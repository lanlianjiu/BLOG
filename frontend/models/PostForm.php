<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\PostModel;
use common\models\CatsModel;
use yii\base\Object;
use common\models\RelationPostTagModel;
use yii\db\Query;
class PostForm extends Model{
    public $id;
    public $title;
    public $content;
    public $label_img;
    public $cat_id;
    public $tags;

    public $_lastError = "";
    const SCENARIOS_CREATE = 'create';
    const SCENARIOS_UPDATE = 'update';
    const EVENT_AFTER_CREATE = 'evenAfterCreate';
    const  EVENT_AFTER_UPDATE = 'evenAfterUpdate';
    public function scenarios(){
        $scenarios = [
            self::SCENARIOS_CREATE => ['title','content','label_img','cat_id','tags'],
            self::SCENARIOS_UPDATE => ['title','content','label_img','cat_id','tags']
        ];
        return array_merge(parent::scenarios(),$scenarios);
    }
   public function rules(){
    return [

        [['id','title','content','cat_id'],'required'],
        [['id','cat_id'],'integer'],
        ['title','string','min'=>4,'max'=>50]
    ];

   }

   public function attributeLabels()
    {
        return [
            'id' => '编码',
            'title' => '标题',
            'content' => '内容',
            'label_img' => '标签图',
            'tags' => '标签',
            'cat_id' => '分类'
        ];
    }

    public static function getList($cond,$curPage = 1,$pageSize = 5,$orderBy = ['id'=>SORT_DESC]){

        $model = new PostModel();

        $select = ['id','title','summary','label_img','cat_id','user_id','user_name','is_valid','created_at','updated_at'];

        $query = $model->find()
        ->select($select)
        ->where($cond)
        ->with('relate.tag','extend')
        ->orderBy($orderBy);

        $res = $model->getPages($query,$curPage,$pageSize);

        $res['data'] = self::_formatList($res['data']);

        return $res;
    }

    public static function  _formatList($data){

        foreach ($data as &$list){
            $list['tags'] = [];
            if(isset($list['relate'])&&!empty($list['relate'])){

                foreach($list['relate'] as $lt){
                    $list['tags'][] = $lt['tag']['tag_name'];
                }
            }

            unset($list['relate']);
        }
        
        return $data;

    }

    public function create(){

        $transaction = Yii::$app->db->beginTransaction();
        try{

            $model = new PostModel();
            $model->setAttributes($this->attributes);
            $model->summary = $this->_getSummary();
            $model->user_id = Yii::$app->user->identity->id;
            $model->user_name = Yii::$app->user->identity->username;
            $model->is_valid = PostModel::IS_VALID;
            $model->created_at = time();
            $model->updated_at = time();

            if(!$model->save()){
                throw new  \Exception('保存失败!');
            };

            $this->id = $model->id;

            $data = array_merge($this->getAttributes(),$model->getAttributes());
            $this->_eventAfterCreate($data);

            $transaction->commit();
            return true;
        }catch(\Exception $e){

            $transaction->rollBack();
            $this->_lastError = $e->getMessage();
            return false;
        }
    }

    public function getViewById($id){

     $res = PostModel::find()->with('relate.tag','extend')->where(['id'=>$id])->asArray()->one();

        if(!$res){
            throw new NoFoundHttpException('文章不存在!');
        }

        $res['tags'] = [];

        if(isset($res['relate'])&&!empty($res['relate'])){
            foreach ($res['relate'] as $list){
                $res['tags'][] = $list['tag']['tag_name'];
            }
        }

        unset($res['relate']);

        return $res;

    }

    private function _getSummary($s = 0,$e = 90,$char = 'utf8'){
        if(empty($this->content)) return null;

        return (mb_substr(str_replace('&nbsp','',strip_tags($this->content)),$s,$e,$char));
    }


    public function _eventAfterCreate($data){

        $this->on(self::EVENT_AFTER_CREATE,[$this,'_eventAddTag'],$data);

        $this->trigger(self::EVENT_AFTER_CREATE);
    }

    public function _eventAddTag($event){

        $tag = new TagForm();
        $tag->tags = $event->data['tags'];
        $tagids = $tag->saveTags();

        RelationPostTagModel::deleteAll(['post_id'=>$event->data['id']]);

        if(!empty($tagids)){
            foreach ($tagids as $k=>$id){
                $row[$k]['post_id'] = $this->id;
                $row[$k]['tag_id'] = $id;
            }

            
            $res = (new Query())->createCommand()->batchInsert(RelationPostTagModel::tableName(),['post_id','tag_id'],$row)->execute();
        
            if(!$res) throw new \Exception("关联关系保存失败!");
        }


    }




}


?>
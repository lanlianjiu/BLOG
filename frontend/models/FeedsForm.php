<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\base\Object;
use common\models\FeedsModel;

/**
 * This is the model class for table "feeds".
 *
 * @property integer $id
 * @property string $content
 */
class FeedsForm extends Model
{
    public $content;
    
    public $_lastError;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
        ];
    }
    
    public function create()
    {
        try{
            $model = new FeedsModel();
            $model->user_id = Yii::$app->user->identity->id;
            $model->content = $this->content;
            $model->created_at = time();            
            if(!$model->save())
                throw new \Exception('保存失败！');
            
            return true;
        }catch (\Exception $e){
            $this->_lastError = $e->getMessage();
            return false;
        }
    }
    
    public function getList()
    {
        $model = new FeedsModel();
        $res = $model->find()->limit(10)->with('user')->orderBy(['id'=>SORT_DESC])->asArray()->all();
        
        return $res?:[];
    }


}

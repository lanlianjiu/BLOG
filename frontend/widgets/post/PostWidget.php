<?php
namespace frontend\widgets\post;

use Yii;
use yii\base\Widget;
use common\models\PostModel;
use frontend\models\PostForm;
use yii\helpers\Url;
use yii\data\Pagination;
use yii\base\Object;
class PostWidget extends Widget{

    public $title = '';
    public $limit = 6;
    public $more = true;
    public $page = true;

    public function run(){

        $curPage = Yii::$app->request->get('page',1);
        $cond = ['=','is_valid',PostModel::IS_VALID];
        $res = PostForm::getList($cond,$curPage,$this->limit);
        $result['title'] = $this->title?:"最新文章";
        $result['more'] = Url::to(['post/index']);
        $result['body'] = $res['data']?:[];
        if($this->page){
           $pages = new Pagination(['totalCount'=>$res['count'],'pageSize'=>$res['pageSize']]);
        
            $result['page'] = $pages;
        }

        return $this->render('index',['data'=>$result]);
    }

}



?>
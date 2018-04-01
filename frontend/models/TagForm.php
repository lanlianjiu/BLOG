<?php
namespace frontend\models;

use yii;
use yii\base\Model;
use common\models\TagsModel;

class TagForm extends Model{


    public $id;
    public $tags;
    public function rules(){

        return [
            ['tags','required'],
            ['tags','each','rule'=>['string']]
        ];
    }

    public function saveTags(){

        $ids = [];
        if(!empty($this->tags)){
            foreach($this->tags as $tag){
                $ids[] = $this->_saveTags($tag);
            }
        }
        return $ids;
    }


    private function _saveTags($tag){

        $model = new TagsModel;

        $res = $model->find()->where(['tag_name'=>$tag])->one();

        if(!$res){
           
            $model->tag_name = $tag;
            $model->post_num = 1;
            $ta = $model->save();
            if(!$model->save()){
               
               
                throw new \Exception("保存标签失败！");
            }
             
            return $model->id;
        }else{

            $res->updateCounter(['post_num'=>1]);
        };

        return $res->id;
    }










}












?>
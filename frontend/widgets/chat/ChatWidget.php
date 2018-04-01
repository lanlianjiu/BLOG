<?php
namespace frontend\widgets\chat;
use Yii;
use yii\bootstrap\Widget;
use yii\base\Object;
use frontend\models\FeedsForm;

class ChatWidget extends Widget{

        public function run(){

            $feed = new FeedsForm();

            $data['feed'] = $feed->getList();

            return $this->render('index',['data'=>$data]);
        }
}

?>
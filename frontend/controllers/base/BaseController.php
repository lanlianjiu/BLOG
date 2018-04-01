<?php
namespace frontend\controllers\base;

use yii\web\Controller;
class BaseController extends Controller{

    public function beforAction($action){

        if(!parent::beforAction($action)){

            return false;
        }else{

            return true;
        };
    }

};
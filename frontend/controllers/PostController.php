<?php
namespace frontend\controllers;

use Yii;

use frontend\controllers\base\BaseController;
use common\models\CatsModel;
use common\models\userModel;
use frontend\models\PostForm;
use common\models\Cats;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\Object;
use common\models\PostExtendsModel;

class PostController extends BaseController
{

     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create','upload','ueditor'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true
                    ],
                    [
                        'actions' => ['create','upload','ueditor'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    '*' => ['get','post'],
                ],
            ],
        ];
    }

    public function actions(){
        return [
            'upload'=>[
                    'class'=>'common\widgets\file_upload\UploadAction',
                    'config'=>[
                        'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                            ]
                    ],
            'ueditor'=>[
                    'class'=>'common\widgets\file_upload\UeditorAction',
                    'config'=>[
                        'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                            ]
                    ]
        ];
    }

    

    public function actionIndex(){
        
        return $this->render('index');
    }

    public function actionCreate()
    {
        $model = new PostForm();

        $model->setScenario(PostForm::SCENARIOS_CREATE);
        if($model->load(Yii::$app->request->post())&&$model->validate()){

            if(!$model->create()){
                Yii::$app->session->setFlash('warning',$model->_lastError);
            }else{
                return $this->redirect(['post/view','id'=>$model->id]);
            }
        }
       
        $cats = CatsModel::getAllCats();
        return $this->render('create',['model'=>$model,'cat'=>$cats]);
    }

     
    public function actionsTime(){
        return;
    }

    public function actionView($id){
       
        $model = new PostForm;
        $data = $model->getViewById($id);
        $model = new PostExtendsModel();
        $model->upCounter(['post_id'=>$id],'browser',1);
       
        return $this->render('view',['data'=>$data]);
    }

}
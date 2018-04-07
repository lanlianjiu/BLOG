<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       
        $menuList = Yii::$app->db->createCommand('
         SELECT DISTINCT m.menu_id menuId,
						   m.menu_dname name,
						   m.menu_dname title,
						   m.menu_id tabs,
						   m.menu_url url,
						   m.help_url helpUrl,
						   IFNULL(m.menu_p_id,0) menuPId,
						   m.new_window_opened newWindowOpened,
						   m.menu_icon menuIcon
                      FROM admin_menus m	
                     WHERE m.menu_id != 1
                     ORDER BY m.menu_p_id, m.menu_order')->queryAll();
                      $result = [
                        'result'=>$menuList,
                        'status' => true,
                        'msg' => ''
                        ];
                       
       return json_encode($result);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
             $result = [
            'status' => true,
               'msg' => ''
            ];
             return json_encode($result);
        }
       
        $model = new LoginForm();
         
        if ($model->load(Yii::$app->request->post(),'') && $model->login()) {

            $result = [
            'result' => ['username'=>Yii::$app->user->identity->username], 
            'status' => true,
               'msg' => ''
            ];
            $result = (object) $result; 
            return json_encode($result);
        } else {
            $result = [
            'status' => false,
               'msg' => ''
            ];
            return json_encode($result);
        }
    }
    
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return json_encode(true);
    }
}

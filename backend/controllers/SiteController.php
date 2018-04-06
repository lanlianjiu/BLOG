<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\base\BaseModel;
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
        $model = new BaseModel();

        if (!Yii::$app->user->isGuest) {
       
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

            return $model->resultObj(true,$menuList,"");
        }else {
            
            return $model->resultObj(false,"","");
        }
       
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        $modelBase = new BaseModel();
        if (!Yii::$app->user->isGuest) {
            return  $modelBase->resultObj(true,"","");
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return  $modelBase->resultObj(true,"","");
        } else {
            return  $modelBase->resultObj(false,"","");
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
        $modelBase = new BaseModel();
        return  $modelBase->resultObj(false,"","");
    }
}

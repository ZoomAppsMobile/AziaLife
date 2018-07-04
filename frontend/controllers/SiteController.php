<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\Slider;
use backend\models\News;
use backend\models\Banner;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    { 
        if (!\Yii::$app->session->get('lang')){
            \Yii::$app->session->set('lang', 'ru');
        }
        $slider=Slider::find()->where(['status'=>1])->orderBy(['order'=>SORT_ASC])->all();
        $news=News::find()->where(['status'=>1])->orderBy(['dating'=>SORT_ASC])->all();
        $banner1=Banner::findOne(1);
        $banner2=Banner::findOne(2);
        $banner3=Banner::findOne(3);
        $banner4=Banner::findOne(4);
               
        return $this->render('index', [
            'slider'=>$slider, 
            'news'=>$news,
            'banner1'=>$banner1,
            'banner2'=>$banner2,
            'banner3'=>$banner3,
            'banner4'=>$banner4,
            ]);
    }
  
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
  
    
  

}

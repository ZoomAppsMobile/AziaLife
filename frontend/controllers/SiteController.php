<?php
namespace frontend\controllers;

use backend\controllers\UserController;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use yii\base\InvalidParamException;
use yii\helpers\VarDumper;
use yii\httpclient\Client;
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

    public function actionXml(){
        $oClient = new \SoapClient(
            'https://app.asia-life.kz/ws/asialife.wsdl',
            [
                'location' => 'http://asialife.kz/ws',
                'login' => 'asialife_site',
                'password' => '1q3wr2',
            ]
        );
//        ini_set('soap.wsdl_cache_enabled',0);
//        ini_set('soap.wsdl_cache_ttl',0);
        $aResult = $oClient->authorizationWS(
            [
                'login' => 'asialife_site',
                'password' => '1q3wr2',
            ]
        );
//
//        echo '<pre>' . print_r($aResult,true) . '</pre>';die;

//        $client = new \GuzzleHttp\Client();
//
//        $response = $client->get('https://app.asia-life.kz/ws/asialife.wsdl', [
//            'auth' => [
//                'asialife_site',
//                '1q3wr2'
//            ]
//        ]);
//
//        $response = $client->get('https://app.asia-life.kz/ws/asialife.wsdl/authorizationWS', [
//            'auth' => [
//                'asialife_site',
//                '1q3wr2'
//            ]
//        ]);

//        $client = new Client(['https://app.asia-life.kz/ws/asialife.wsdl']);
//
//        $loginResponse = $client->post('authorizationWS', [
//            'login' => 'asialife_site',
//            'password' => '1q3wr2',
//        ])->send();
//
////        $loginResponse->cookies->get('PHPSESSID') - содержит новый идентификатор сессии
//        VarDumper::dump($loginResponse);die;
//        $client->post('account/profile', ['birthDate' => '10/11/1982'])
//            ->setCookies($loginResponse->cookies) // передача файла cookie из ответа в запрос
//            ->send();
//
//        VarDumper::dump($response);die;


    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->redirect('/cabinet');
        }
        $model = new LoginForm();
        $signup = new SignupForm();
        $array = Yii::$app->request->post();
        if ($array['LoginForm']&&$model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/cabinet');
        } elseif($array['LoginForm']) {
            Yii::$app->session->setFlash('contactFormLogin');
            return $this->render('login', [
                'model' => $model, 'signup' => $signup
            ]);
        }

        if ($array['SignupForm']&&$signup->load(Yii::$app->request->post())) {
            if ($user = $signup->signup()) {
                $backend_user = new \backend\models\SignupForm();
                $backend_user->getRole($user->role, $user->id, 1);
                return $this->goHome();
            }else{
                return $this->render('login', [
                    'model' => $model, 'signup' => $signup, 'error_signup' => 1
                ]);
            }
        }
        return $this->render('login', [
            'model' => $model, 'signup' => $signup
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}

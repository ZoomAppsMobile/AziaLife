<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
class LangController extends Controller
{
	public function actionIndex($url){

		if($url=='ru'){
			Yii::$app->session->set('lang','ru');
		}     
		else if($url=='en'){
			Yii::$app->session->set('lang','en');
		}
		else if($url=='kz'){
			Yii::$app->session->set('lang','kz');
		}
		else{
			throw new ForbiddenHttpException;   
		}
		$this->redirect($_SERVER['HTTP_REFERER']);                                                              
    }
}
?>
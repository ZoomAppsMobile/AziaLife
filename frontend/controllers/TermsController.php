<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Term;
class TermsController extends Controller
{
	public function actionIndex()
    {
    	if(\Yii::$app->session->get('lang')=='ru'){
    		$terms=Term::find()->where(['status'=>'1'])->orderBy(['title' => SORT_ASC])->all();
        } else if(\Yii::$app->session->get('lang')=='en'){
        	$terms=Term::find()->where(['status'=>'1'])->orderBy(['title_en' => SORT_ASC])->all();
        } else if(\Yii::$app->session->get('lang')=='kz'){
        	$terms=Term::find()->where(['status'=>'1'])->orderBy(['title_kz' => SORT_ASC])->all();
        }    	
        return $this->render('index',['terms'=>$terms]);
    }
}
?>
<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Vacancy;
class VacancyController extends Controller
{
	public function actionIndex()
    {
    	$vacancy=Vacancy::find()->where(['status'=>1, 'main'=>1])->all();
        return $this->render('index',['vacancy'=>$vacancy]);
    }
    public function actionDetail($id)
    {
    	$vacancy=Vacancy::find()->where(['status'=>1, 'id'=>$id])->one();
        return $this->render('detail',['vacancy'=>$vacancy]);
    }
}
?>
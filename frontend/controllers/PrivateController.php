<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Term;
class PrivateController extends Controller
{
	public function actionIndex()
    {	
        return $this->render('index',['terms'=>$terms]);
    }
    public function actionDetail()
    {   
        return $this->render('detail');
    }
}
?>
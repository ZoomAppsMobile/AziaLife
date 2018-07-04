<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\News;

class NewsController extends Controller
{
	public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
	public function actionIndex()
    {
    	$news=News::find()->where(['status'=>1])->orderBy(['dating' => SORT_DESC]);
    	if(isset($_POST['page'])){
            $post_page=$_POST['page'];
        } else{
            $post_page=1;
        }
      
        $post_per_page=4;
        
        if ($post_page * $post_per_page >= count($news->all())) {
            $last = true;
        } else {
            $last = false;
        }
        $allmodels = $news->offset(($post_page - 1) * $post_per_page)
            ->limit($post_per_page)
            ->all();
        return $this->render('index',['models'=>$allmodels, 'last'=>$last]);
    }
    public function actionPage()
    {
    	$news=News::find()->where(['status'=>1])->orderBy(['dating' => SORT_DESC]);
    	if(isset($_POST['page'])){
            $post_page=$_POST['page'];
        } else{
            $post_page=1;
        }
      
        $post_per_page=4;
        
        if ($post_page * $post_per_page >= count($news->all())) {
            $last = true;
        } else {
            $last = false;
        }
        $allmodels = $news->offset(($post_page - 1) * $post_per_page)
            ->limit($post_per_page)
            ->all();
        return $this->renderAjax('ajax',['models'=>$allmodels, 'last'=>$last]);
    }

}
?>
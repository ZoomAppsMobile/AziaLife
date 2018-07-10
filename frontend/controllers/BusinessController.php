<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Blogcategory;
use backend\models\Blog;
use backend\models\Blogtag;
use backend\models\Privatewidget;
class BusinessController extends Controller
{
	public function actionIndex()
    {
    	$blogs=Blog::find()->where(['status'=>'1', 'category'=>4])->all();
        return $this->render('index',['blogs'=>$blogs]);
    }
    public function actionDetail($url)
    {   
    	$blog=Blog::find()->where(['status'=>'1', 'url'=>$url, 'category'=>4])->one();
    	$blogtags=Blogtag::find()->where(['blogid'=>$blog->id])->all();
        $privatewidget=Privatewidget::find()->where(['status'=>'1', 'pid'=>$blog->id])->orderBy(['order' => SORT_ASC])->all();
        return $this->render('detail', ['blog'=>$blog, 'blogtags'=>$blogtags, 'privatewidget'=>$privatewidget]);
    }
}
?>
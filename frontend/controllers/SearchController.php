<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 28.08.2018
 * Time: 9:34
 */

namespace frontend\controllers;


use backend\models\Blog;
use backend\models\News;
use common\models\Metatags;

class SearchController extends FrontendController
{
    public function actionIndex()
    {
        $meta = Metatags::find()->where('url = "search"')->one();
        $this->setMeta($meta);

        $model_blog = Blog::find()->where('content'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();

        $model_news = News::find()->where('content'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();

        return $this->render('index', compact('model_blog', 'model_news'));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2018
 * Time: 9:44
 */

namespace frontend\controllers;

use backend\models\Faqcategory;
use yii\web\Controller;

class FaqController extends Controller
{
    public function actionIndex()
    {
        $model = Faqcategory::find()->where('status = 1')->all();
        return $this->render('index', compact('model'));
    }
}
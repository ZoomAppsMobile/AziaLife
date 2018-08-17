<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2018
 * Time: 17:13
 */

namespace frontend\controllers;

use common\models\City;
use common\models\Offices;
use yii\web\Controller;

class OfficeController extends Controller
{
    public function actionIndex()
    {
            $city = City::findOne($_GET['id']);

            $model = Offices::find()->where('city_id = '.$_GET['id'].' AND status = 1')->all();

            return $this->render('index', compact('model', 'city'));
    }
}
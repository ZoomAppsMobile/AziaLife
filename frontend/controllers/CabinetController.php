<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 10:29
 */

namespace frontend\controllers;

use common\models\Profiles;
use common\models\User;
use yii\web\Controller;
use Yii;

class CabinetController extends Controller
{

    public function actionIndex(){
        if(!Yii::$app->user->id){
            return $this->redirect('/login');
        }

        $profile = Profiles::findOne(Yii::$app->user->id);

        return $this->render('index', compact('profile'));
    }

}
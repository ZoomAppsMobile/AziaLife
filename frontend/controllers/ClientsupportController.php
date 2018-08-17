<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2018
 * Time: 15:31
 */

namespace frontend\controllers;

use backend\models\Advise;
use backend\models\Event;
use common\models\UsefulTips;
use yii\web\Controller;
use Yii;

class ClientsupportController extends Controller
{
        public function actionUsefulTips()
        {
            $model = Advise::find()->orderBy('order')->all();

            $UsefulTips = new UsefulTips();

            if ($UsefulTips->load(Yii::$app->request->post()) && $UsefulTips->save())
                Yii::$app->session->setFlash('success1', 'Спасибо за Ваш вопрос');

            return $this->render('/menu/client-support/useful-tips', compact('model', 'UsefulTips'));
        }

        public function actionActionInsuredEvent()
        {
            $model = Event::find()->orderBy('order')->all();

            return $this->render('/menu/client-support/action-insured-event', compact('model'));
        }
}
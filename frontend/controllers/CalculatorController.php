<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 11.07.2018
 * Time: 17:06
 */

namespace frontend\controllers;

use yii\helpers\VarDumper;
use yii\web\Controller;

class CalculatorController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionChild($url){

        return $this->render($url);
    }

    public function actionKazinaResponse(){
        if($array = \Yii::$app->request->get()) {
            $oClient = new \SoapClient(
                'https://app.asia-life.kz/ws/asialife.wsdl',
                [
                    'login' => 'asialife_site',
                    'password' => '1q3wr2',
                ]
            );

            $oClient->__setLocation('https://app.asia-life.kz/ws/asialife.wsdl');

            $periodichnost = [1 => 'ежегодно', 2 => 'единовременно', 3 => 'раз в пол года', 4 => 'ежеквартально', 5 => 'ежемесячно'];
            $sex = [1 => 'м', 2 => 'ж'];

            $aResult = $oClient->kazina(
                [
                    'sessionId' => '',
                    'periodichnost' => $periodichnost[$array['periodichnost']],
                    'sex' => $sex[$array['sex']],
                    'clnYears' => $this->calculate_age($array['clnYears']),
                    'srokYears' => $array['srokYears'],
                    'strSum' => $array['strSum'],
                    'ADB' => $array['ADB'],
                    'ATPD' => $array['ATPD'],
                    'TT' => $array['TT'],
                    'CI' => $array['CI'],
                    'TD' => $array['TD'],
                    'HD' => $array['HD'],
                ]
            );
        }
        return json_encode($aResult);
    }

    function calculate_age($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        return $age;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 11.07.2018
 * Time: 17:06
 */

namespace frontend\controllers;

use common\models\Countries;
use yii\helpers\VarDumper;
use yii\web\Controller;

class CalculatorController extends FrontendController
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionChild($url){

        return $this->render($url);
    }

    public function actionBolashakResponse(){
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

            if($array['ADB']==0)
                $array['ADB'] = $array['strSum'];

            if($array['TT']==0)
                $array['TT'] = $array['strSum'];

            if($array['TD']==0)
                $array['TD'] = $array['strSum'];

            if($array['HD']==0)
                $array['HD'] = $array['strSum'];

            if($array['ATPD']==0)
                $array['ATPD'] = $array['strSum'];

            if($array['CI']==0)
                $array['CI'] = $array['strSum'];

            if($array['TTV']==0)
                $array['TTV'] = $array['strSum'];

            if($array['DB']==0)
                $array['DB'] = $array['strSum'];


            $aResult = $oClient->bolashak(
                [
                    'sessionId' => '',
                    'periodichnost' => $periodichnost[$array['periodichnost']],
                    'sex' => $sex[$array['sex']],
                    'clnYears' => $this->calculate_age($array['clnYears']),
                    'srokYears' => $array['srokYears'],
                    'strSum' => $array['strSum'],
                    'DB' => $array['DB'],
                    'ADB' => $array['ADB'],
                    'ATPD' => $array['ATPD'],
                    'TT' => $array['TT'],
                    'CI' => $array['CI'],
                    'TD' => $array['TD'],
                    'HD' => $array['HD'],
                    'TTV' => $array['TTV'],
                ]
            );
        }
        return json_encode($aResult);

        die;
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

            if($array['ADB']==0)
                $array['ADB'] = $array['strSum'];

            if($array['ATPD']==0)
                $array['ATPD'] = $array['strSum'];

            if($array['TT']==0)
                $array['TT'] = $array['strSum'];

            if($array['CI']==0)
                $array['CI'] = $array['strSum'];

            if($array['TD']==0)
                $array['TD'] = $array['strSum'];

            if($array['HD']==0)
                $array['HD'] = $array['strSum'];

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

        die;
    }

    public function actionOsrnsResponse(){

        if($array = \Yii::$app->request->get()) {

            $oClient = new \SoapClient(
                'https://app.asia-life.kz/ws/asialife.wsdl',
                [
                    'login' => 'asialife_site',
                    'password' => '1q3wr2',
                ]
            );

            $oClient->__setLocation('https://app.asia-life.kz/ws/asialife.wsdl');


            $aResult = $oClient->osrns(
                [
                    'sessionId' => '',
                    'oked' => $array['oked'],
                    'yearFond' => $array['yearFond'],
                    'col_sotr' => $array['col_sotr'],
                ]
            );
        }
//        $aResult = (array)$aResult;
//        $aResult['sumStrahKz'] = (int)$aResult['sumStrahKz'];
        return json_encode($aResult);

        die;
    }

    public function actionMstResponse(){

        if($array = \Yii::$app->request->get()) {

            $oClient = new \SoapClient(
                'https://app.asia-life.kz/ws/asialife.wsdl',
                [
                    'login' => 'asialife_site',
                    'password' => '1q3wr2',
                ]
            );

            $oClient->__setLocation('https://app.asia-life.kz/ws/asialife.wsdl');

            $rez = $oClient->authorizationWS(
                [
                    'login' => 'asialife_site',
                    'password' => '1q3wr2',
                ]
            );

            $rez = (array)$rez;

            $beginDate = strtotime($array['beginDate']);
            $beginDate = date('d.m.Y', $beginDate);

            $endDate = strtotime($array['endDate']);
            $endDate = date('d.m.Y', $endDate);

            $birthDate = strtotime($array['birthDate']);
            $birthDate = date('d.m.Y', $birthDate);

            if($array['insuranceProgramm']==1){
                $array['rprogSrok'] = '';
                $array['rprogMaxDays'] = '';
            }

            $aResult = $oClient->mst(
                [
                    'sessionId' => $rez['sessionId'],
                    'country1' => $array['country1'],
                    'country2' => $array['country2'],
                    'country3' => $array['country3'],
                    'sumStrah' => $array['sumStrah'],
                    'insuranceProgramm' => $array['insuranceProgramm'],
                    'beginDate' => $beginDate,
                    'endDate' => $endDate,
                    'birthDate' => $birthDate,
                    'rprogSrok' => $array['rprogSrok'],
                    'rprogMaxDays' => $array['rprogMaxDays'],
                    'email' => $array['email'],
                ]
            );
        }

        return json_encode($aResult);

        die;
    }

    public function actionCountryType()
    {
        $id = $_GET['id'];

        $model = Countries::find()->where("country_id = $id")->one();

        echo $model->type;

        die;
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
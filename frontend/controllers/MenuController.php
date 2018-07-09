<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 15:16
 */

namespace frontend\controllers;

use common\models\Menu;
use yii\web\Controller;

class MenuController extends Controller
{
    //////////////////Top menu
    public function actionAboutTheCompany(){
        $model = Menu::findOne(['url' => 'about-the-company']);

        return $this->render('about-the-company', compact('model'));
    }

    public function actionPrivateClients(){
        $model = Menu::findOne(['url' => 'private-clients']);

        return $this->render('private-clients', compact('model'));
    }

    public function actionClientSupport(){
        $model = Menu::findOne(['url' => 'client-support']);

        return $this->render('client-support', compact('model'));
    }

    public function actionBusiness(){//Готово
        $model = Menu::findOne(['url' => 'business']);

        return $this->render('business', compact('model'));
    }

    public function actionOnlinePayment(){
        $model = Menu::findOne(['url' => 'online-payment']);

        return $this->render('online-payment', compact('model'));
    }

    //////////////////Footer

    public function actionMediaInformation(){
        $model = Menu::findOne(['url' => 'media-information']);

        return $this->render('footer/media-information', compact('model'));
    }

    public function actionCareers(){//Готово
        $model = Menu::findOne(['url' => 'careers']);

        return $this->render('footer/careers', compact('model'));
    }

    public function actionQuestionsAndAnswers(){
        $model = Menu::findOne(['url' => 'questions-and-answers']);

        return $this->render('footer/questions-and-answers', compact('model'));
    }

    public function actionCompanyDetails(){
        $model = Menu::findOne(['url' => 'company-details']);

        return $this->render('footer/company-details', compact('model'));
    }

    public function actionFinancialIndicators(){
        $model = Menu::findOne(['url' => 'financial-indicators']);

        return $this->render('footer/financial-indicators', compact('model'));
    }

    public function actionOfferBook(){
        $model = Menu::findOne(['url' => 'offer-book']);

        return $this->render('footer/offer-book', compact('model'));
    }

    public function actionSpecialOffers(){
        $model = Menu::findOne(['url' => 'special-offers']);

        return $this->render('footer/special-offers', compact('model'));
    }
}
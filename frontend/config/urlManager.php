<?php

/** @var array $params */

return [
    'class' => 'yii\web\UrlManager',
//    'hostInfo' => 'http://azialife',
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'cache' => false,
    'rules' => [
        'login'=>'site/login',
        'lang/<url:\w+>'=>'lang/index',

        /////Меню верхнее
        'about-the-company'=>'menu/about-the-company',
        'about-the-company/<url:[\w-]+>'=>'menu/about-the-company-child',
        'about-the-company/<url:[\w-]+>/<url1:[\w-]+>'=>'menu/about-the-company-child-child',
//        'private-clients'=>'menu/private-clients',
        'client-support'=>'menu/client-support',
        'client-support/<url:[\w-]+>'=>'menu/client-support-child',
//        'business'=>'menu/business',
        'business/<url:[\w-]+>'=>'business/detail',
        'private-clients'=>'private',
        'private-clients/<url:[\w-]+>'=>'private/detail',
        'online-payment'=>'menu/online-payment',

        /////Меню в футере
        'media-information' => 'menu/media-information',
        'careers' => 'vacancy',
        'careers/<id:\d+>'=>'vacancy/detail',
        'careers/our-vacancies'=>'vacancy/our-vacancies',

        'news' => 'news',

        'questions-and-answers' => 'menu/questions-and-answers',
        'company-details' => 'menu/company-details',
        'financial-indicators' => 'menu/financial-indicators',
        'offer-book' => 'menu/offer-book',
        'special-offers' => 'menu/special-offers',

        'calculator' => 'calculator',
        'calculator/kazina-response' => 'calculator/kazina-response',
        'calculator/<url:[\w-]+>' => 'calculator/child',

        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ],
];
<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'sourceLanguage'=>'en',
    'language'=>'ru',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
            'gridview' => [
                'class' => '\kartik\grid\Module',
            ],
			'backup' => [
				'class' => 'spanjeta\modules\backup\Module',
			],
	],
    'components' => [
		 'request' => [
            'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'=>array( 
                //'api/<version:\w+>/<method:\w+>'=>'api/index',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view', 
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>', 
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>', 
                ),
        ],
         'urlManagerFrontEnd' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/frontend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
         'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],
    ],
    'params' => $params,
];

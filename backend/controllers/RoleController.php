<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 8:50
 */

namespace backend\controllers;

use yii\web\Controller;

class RoleController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => 'yii\filters\AccessControl',
                'except' => ['login', 'error', 'logout'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ROLE_USER,
                    ],
                ],
            ],
        ];
    }
}
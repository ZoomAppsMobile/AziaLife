<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public function run(): string
    {
        $model = Menu::find()->where('top = 1')->all();

        return $this->render('menu', compact('model'));
    }
}
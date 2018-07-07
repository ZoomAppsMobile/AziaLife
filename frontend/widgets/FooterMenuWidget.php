<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class FooterMenuWidget extends Widget
{
    public function run()
    {
        $model = Menu::find()->where('footer = 1')->all();

        return $this->render('footer-menu', compact('model'));
    }
}
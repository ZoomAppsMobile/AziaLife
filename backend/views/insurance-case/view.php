<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\InsuranceCase */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Страховой случай', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-case-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'first_name',
            'Last_name',
            'number',
            'phone',
            'email:email',
            'iin',
            'text:ntext',
        ],
    ]) ?>

</div>

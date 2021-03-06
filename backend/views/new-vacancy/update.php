<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewVacancy */

$this->title = 'Редактирование вакансии: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'вакансии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'редактирование';
?>
<div class="new-vacancy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

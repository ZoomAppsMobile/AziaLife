<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = 'Добавить новость';
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
	  <li><a href="/admin">Главная</a></li>
	  <li><a href="/admin/news" >Новости</a></li>
	  <li class="active">Добавить</li>
	</ol>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

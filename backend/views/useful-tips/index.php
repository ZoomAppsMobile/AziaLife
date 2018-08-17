<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UsefulTipsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Useful Tips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useful-tips-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Useful Tips', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'vopros:ntext',
            'city',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
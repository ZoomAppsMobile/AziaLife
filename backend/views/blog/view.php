<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
$this->title = $model->title;
?>
<div class="blog-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/blog" >Частным клиентам</a></li>
      <li class="active"><?= Html::encode($this->title) ?></li>
    </ol>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <?php
        Modal::begin([
            'id'=>'modal',
            'size'=>'modal-md',
             'closeButton' => ['label' => '<p>×</p>'],
        ]);
        echo '<div id="modalContent"></div>';
        Modal::end();
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'title_kz',
            'title_en',
            'description',
            'description_kz',
            'description_en',
            'thumb:image',
            'image:image',
            'content:ntext',
            'content_kz:ntext',
            'content_en:ntext',
            'note',
            'note_kz',
            'note_en',
            'url:url',
            'order',
        ],
    ]) ?>


<p><?=Html::button('Добавить тег' , ['value'=>Url::to('/admin/blogtag/create?id='.$model->id),'class'=>'btn btn-success','id'=>'firstb']);?>
</p>

<?php
        if(count($blogtags)>0){
            echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($blogtags as $key) {
                            echo    '<tr>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_kz.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_en.'</td>
                                        <td>
                                            <a href="/admin/blog/update/1" title="Редактировать" aria-label="Редактировать" data-pjax="0">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a> 
                                            <a href="/admin/blog/delete/1" title="Удалить" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }
    ?>
</div>
<style type="text/css">
    td img{
        max-width: 300px;
    }
    .modal-header .close {
        margin-top: -2px;
        font-size: 45px;
        opacity: 0.66;
        margin-right: 15px;
    }
    .modal-header {
        border-bottom-color: #f4f4f4;
        padding: 0;
    }
    .modal-body {
        position: relative;
        padding: 0 15px 15px;
    }
</style>
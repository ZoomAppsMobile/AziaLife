<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use backend\models\Blogcategory;
/* @var $this yii\web\View */
/* @var $model backend\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList(
                                ArrayHelper::map(Blogcategory::find()
                        ->where(['type' => '0'])->all(),'id','title')
                        ,['options' => [$model->category=> ['Selected'=>'selected']]
                        , 'prompt' => 'Выберите категорию']);
                        ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thumb')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?php
        if($model->thumb){
            echo '<img src="'.$model->thumb.'" width="200">';
        }
    ?>
    <?= $form->field($model, 'image')->widget(KCFinderInputWidget::className(), [
        'multiple' => false,
    ]); ?>
    <?php
        if($model->image){
            echo '<img src="'.$model->image.'" width="200">';
        }
    ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'content_kz')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'content_en')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'bellowing_conditions')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'bellowing_conditions_kz')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'bellowing_conditions_en')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '1' => 'Показать', '0' => 'Скрыть', ], ['prompt' => '']) ?>

    <?
        $model->YourBenefits = [];
        foreach($model->yourBenefitsBlogs as $v) {
            $model->YourBenefits[] = $v->your_benefits_id;
        }
    ?>
    <?= $form->field($model, 'YourBenefits')->checkboxList(ArrayHelper::map(\common\models\YourBenefits::find()->all(), 'id', 'title')) ?>

    <?
        $model->MechanismOfTheContract = [];
        foreach($model->mechanismOfTheContractBlog as $v) {
            $model->MechanismOfTheContract[] = $v->mechanism_of_the_contract_id;
        }
    ?>

    <? $array = \common\models\MechanismOfTheContract::find()->all() ?>

    <? foreach($array as $v){ ?>
        <? if(!$model->isNewRecord){ ?>
            <? if($model->issetmotc($v->id, $model->id)){ ?>
                <div>
                    <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>" checked="checked"> <?=$v['title']?></label>
                    <? $sort = \common\models\MechanismOfTheContractBlog::find()->
                    where("mechanism_of_the_contract_id = ".$v['id']." AND blog_id = ".$model['id'])->one(); ?>
                    <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][]" value="<?=$sort['sort']?>">
                </div>
            <? }else{ ?>
                <div>
                    <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>"> <?=$v['title']?></label>
                    <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][]" value="">
                </div>
            <? } ?>
        <? }else{ ?>
            <div>
                <label><input type="checkbox" name="Blog[MechanismOfTheContract][]" value="<?=$v['id']?>"> <?=$v['title']?></label>
                <input style="position: absolute;left:420px;" type="text" name="Blog[MechanismOfTheContractSorter][]" value="">
            </div>
        <? } ?>
    <? } ?>

<!--    --><?// $array = ArrayHelper::map(\common\models\MechanismOfTheContract::find()->all(), 'id', 'title') ?>
<!--    --><?//= Html::decode($form->field($model, 'MechanismOfTheContract')->checkboxList(
//            $array
//    )); ?>
    <div>Основные виды страховой защиты</div>
    <div style="background: none;">
        <button class="add_options1 btn btn-primary">Добавить</button>
    </div>
    <div class="copyMe_1" style="display: none;background: none;">
        <div>
            <input type="text" name="title1[new][]" value="" style="width:40%">
            <textarea name="text1[new][]" value="" style="width:40%"></textarea>
            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
        </div>
    </div>
    <div class="">
        <? foreach($model->basicInsuranceCoverage as $v){ ?>
            <div>
                <input type="text" name="title1[new][]" value="<?=$v->title?>" style="width:40%">
                <textarea name="text1[new][]" style="width:40%"><?=$v->text?></textarea>
                <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
            </div>
        <? } ?>
    </div>
    <div class="copyTo_1"></div>

    <div>Дополнительные виды страховой защиты</div>
    <div style="background: none;">
        <button class="add_options btn btn-primary">Добавить</button>
    </div>
    <div class="copyMe" style="display: none;background: none;">
        <div>
            <input type="text" name="title[new][]" value="" style="width:40%">
            <textarea name="text[new][]" value="" style="width:40%"></textarea>
            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
        </div>
    </div>
    <div class="">
        <? foreach($model->additionalInsuranceCoverage as $v){ ?>
        <div>
            <input type="text" name="title[new][]" value="<?=$v->title?>" style="width:40%">
            <textarea name="text[new][]" style="width:40%"><?=$v->text?></textarea>
            <button class="remove btn btn-danger" stle="float:right;" onclick="remove(this);">Удалить</button>
        </div>
        <? } ?>
    </div>
    <div class="copyTo"></div>

    <div class="form-group" style="margin-top:50px;">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>


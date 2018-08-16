<?php
$this->registerCssFile('/frontend/web/css/vacancydetail/style.css');
?>
<?if($vacancy->id==1){?>
<link href="/vacancy/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/careers">Вакансии <img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?php
        if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->title;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->title_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->title_kz;
        }
        ?></a>
</div>
<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">
    <?php
        if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->title;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->title_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->title_kz;
        }
    ?>
</h3>

<div class="asia-life-30 d-flex flex-column mt-4">

    <div class="facts-with-dots d-flex flex-column mt-2">

        <?php
        if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->content;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->content_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->content_kz;
        }
        ?>

    </div>

        <?php $form = \yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => "form-class d-flex flex-column mt-4 p-4"]]) ?>
        <input type="hidden" value="<?=$vacancy['id']?>" name="AreDistinguished[vacancy_id]">
        <div class="input-form1 w-100 d-flex flex-md-row flex-column justify-content-between">
            <div class="d-flex flex-column">
                <label for="input1">ФИО</label>
                <input name="AreDistinguished[fio]" class="form-control" type="text" id="input1" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input2">Дата рождения</label>
                <input name="AreDistinguished[date_of_birth]" class="form-control" type="date" id="input2" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input3">Город</label>
                <input name="AreDistinguished[city]" class="form-control" type="text" id="input3" required>
            </div>
        </div>
        <div class="input-form2 w-100 d-flex flex-md-row flex-column justify-content-between">
            <div class="d-flex flex-column">
                <label for="input4">Телефон</label>
                <input name="AreDistinguished[phone]" class="form-control" type="text" id="input4" required>
            </div>
            <div class="d-flex flex-column">
                <label for="input5">Электронный адрес</label>
<!--                --><?//= $form->field($model, 'phone')->textInput(['class' => 'form-control', 'id' => 'input4', 'required' =>'required'])->label(false); ?>
                <input name="AreDistinguished[email]" class="form-control" type="text" id="input5" required>
            </div>
            <div class="d-flex align-items-end">
                <input name="AreDistinguished[doc]" type="file" class="form-control-file" id="input6" required>
                <p class="ml-3 add-document-text">Прикрепить резюме <br>
                    Принимаются pdf, doc, docs,txt</p>
            </div>
        </div>

        <div class="input-form3 w-100 d-flex flex-md-row flex-column justify-content-between">
            <fieldset class="d-flex flex-column">
                <label for="">Есть ли у вас опыт работы в страховании?</label>
                <div class="toggle">
                    <input name="AreDistinguished[opit_1]" type="radio" name="haveExp" value="1" id="input7" checked="checked" />
                    <label for="input7">ДА</label>
                    <input name="AreDistinguished[opit_1]" type="radio" name="haveExp" value="0" id="input8" />
                    <label for="input8">НЕТ</label>
                </div>
            </fieldset>
            <fieldset class="d-flex flex-column">
                <label for="">Есть ли у вас опыт работы в продажах?</label>
                <div class="toggle">
                    <input name="AreDistinguished[opit_2]" type="radio" name="salesExp" value="1" id="input9" checked="checked" />
                    <label for="input9">ДА</label>
                    <input name="AreDistinguished[opit_2]" type="radio" name="salesExp" value="0" id="input10" />
                    <label for="input10">НЕТ</label>
                </div>
            </fieldset>
            <div class="d-flex">
                <button type="submit" class="text-uppercase">отправить заявку</button>
            </div>
        </div>
    <?php \yii\widgets\ActiveForm::end() ?>
</div>
<?}else{?>
    <div class="link-anchors d-flex flex-md-row flex-column my-4">
        <a href="">Главная<img src="/image/link-arrow-right.png" alt=""></a>
        <a href="/careers">Вакансии<img src="/image/link-arrow-right.png" alt=""></a>
        <p href="">Риск-менеджер</p>
    </div>

    <div data-aos="fade-up" class="about-stock d-flex flex-column">
        <h3  class="text-uppercase mb-4">Риск-менеджер</h3>

        <ul class="vacancy-block">
            <li class="vacancy-item"><span>Выполнять задачи в соответствии с целями и задачами Компании по организации и функционированию системы управления рисками, в соответствии с законодательными...</span></li>
            <li class="vacancy-item"><span>Иметь высшее экономическое или финансовое образование. Знать основы законодательства и нормативных правовых актов, регламентирующие страховую деятельность, основы бухгалтерского учета, практику...</span></li>
        </ul>

        <div data-aos="fade-up" class="wrapper-2">
            <div  class="banners d-flex justify-content-center my-5">
                <img class="banner" src="public/images/banner.png" alt="">
            </div>

            <div class="icon-block">
                <img src="public/images/icon.png" alt="">
            </div>
        </div>
    </div>
<?}?>

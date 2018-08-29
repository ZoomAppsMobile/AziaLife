<link href="/bolashak1/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator"><?=Yii::t('main-title', 'Калькуляторы')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href=""><?=Yii::t('main-title', 'ОСРНС')?></a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'Шаг 1. Рассчитать стоимость полиса')?></h3>
    <a href=""><?=Yii::t('main-title', 'Важно')?></a>
</div>

<div class="main-text d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h4 class="text-main my-3"><?=Yii::t('main-title', 'Данные о Застрахованном')?></h4>
</div>

<form action="" class="form-asia d-flex flex-column osrns-response">
    <div id="first-row" class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div>
            <label for="input1"><?=Yii::t('main-title', 'Ф.И.О./Наименование юр. лица')?>*</label>
            <input id="name-control" class="form-control" type="text" name="name" value="">
        </div>
        <div>
            <label for="input2"><?=Yii::t('main-title', 'ОКЭД')?>*</label>
            <input id="oked-control" class="form-control" type="text" name="oked" value="">
        </div>
        <div>
            <label for="input3"><?=Yii::t('main-title', 'Контактный телефон')?></label>
            <input id="tel-control" class="form-control" type="tel" name="phone-number" value="">
        </div>
        <div>
            <label for="input4">E-mail</label>
            <input id="email-control" class="form-control" type="text" name="email" value="">
        </div>
    </div>

    <h4 class="text-main my-3"><?=Yii::t('main-title', 'ОСНОВНЫЕ ПАРАМЕТРЫ СТРАХОВАНИЯ')?></h4>
    <div class="third-row d-flex flex-md-row justify-content-between flex-column mb-4">
        <div class="main-parametr">
            <label for="input8"><?=Yii::t('main-title', 'Дата расчетa')?></label>
            <input class="form-control" type="date" id="input8" required>
        </div>
        <div class="main-parametr">
            <label for="input9"><?=Yii::t('main-title', 'Годовой ФОТ, тг')?>*</label>
            <input id="year-fot-control input-nums" class="form-control" type="number" name="yearFond" value="">
        </div>
        <div class="main-parametr">
            <label for="input10"><?=Yii::t('main-title', 'СКПР')?>*</label>
            <input id="skpr-control input-nums" class="form-control" type="number" name="" value="">
        </div>
        <div class="main-parametr">
            <label for="input11"><?=Yii::t('main-title', 'КПР')?>*</label>
            <input id="kpr-fot-control input-nums" class="form-control" type="number" name="" value="">
        </div>
        <div class="main-parametr">
            <label for="input11"><?=Yii::t('main-title', 'Кол. сотрудников')?>*</label>
            <input id="kpr-fot-control input-nums" class="form-control" type="number" name="col_sotr" value="">
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column mb-4 p-3">
        <div class="last-dynamic">
            <label for="input14"><?=Yii::t('main-title', 'Страховая сумма, тенге')?></label>
            <p class="form-control premKz">&nbsp;</p>
        </div>
        <div class="last-dynamic dynamic2">
            <label for="input14"><?=Yii::t('main-title', 'Страховой взнос, тенге')?></label>
            <p class="form-control sumStrahKz">&nbsp;</p>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-md-row flex-column">
        <p class="sometext"><?=Yii::t('main-title', 'Укажите страховую сумму или желаемую сумму взноса. По второму полю расчет будет произведен автоматически')?></p>
        <button class="text-uppercase sum-btn"><?=Yii::t('main-title', 'Рассчитать')?></button>
    </div>
<!--    <div class="response">-->
<!--        <div class="third-row d-flex flex-md-row flex-column justify-content-start mb-4 p-3">-->
<!--            <div class="last-dynamic d-flex flex-column" style="width:21rem;margin-right:10px;">-->
<!--                <label>Премия(сумма, которую должен оплатить клиент)</label>-->
<!--                <input class="form-control premKz" type="text">-->
<!--            </div>-->
<!--            <div class="last-dynamic d-flex flex-column" style="width:21rem;margin-right:10px;">-->
<!--                <label>Страховая сумма</label>-->
<!--                <input class="form-control sumStrahKz" type="text">-->
<!--            </div>-->
<!--            <div class="last-dynamic d-flex flex-column" style="width:21rem;margin-right:10px;">-->
<!--                <label>Если что то пошло не так, то здесь будет ошибка отображаться</label>-->
<!--                <input class="form-control err" type="text">-->
<!--            </div>-->
<!--            <div class="last-dynamic d-flex flex-column" style="width:21rem;">-->
<!--                <label>Страховой взнос по «телесная травма в результате»</label>-->
<!--                <input class="form-control result" type="text">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</form>
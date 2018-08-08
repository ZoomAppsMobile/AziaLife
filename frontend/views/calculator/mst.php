<link href="/stiles/style.css" rel="stylesheet">
<link href="/calcOne/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator">Калькуляторы <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Мтс</a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">Шаг 1. Расчет стоимости полиса</h3>
    <a href="">Как оформить полис</a>
</div>

<form action="" class="form-asia d-flex flex-column mst-response">
    <div class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input1">Программа страхования</label>
            <select name="insuranceProgramm" class="insuranceProgramm form-control" id="input1" required>
                <option value="0"></option>
                <option value="1">однократная поездка</option>
                <option value="2">многократная поездка</option>
            </select>
        </div>
        <div class="d-flex flex-column">
            <label for="input2">Продолжительность страхования</label>
            <select name="rprogSrok" disabled="disabled" class="rprogSrok form-control" id="input2" required>
                <option value="0"></option>
                <option value="1">до 6 месяцев</option>
                <option value="2">от 6 до 9 месяцев</option>
                <option value="3">от 9 до 12 месяцев</option>
            </select>
        </div>
        <div class="d-flex flex-column">
            <label for="input3">Макс. кол-во дней за границей</label>
            <select name="rprogMaxDays" disabled="disabled" id="input3" class="rprogMaxDays1 form-control" required>
                <option value="0"></option>
                <option value="1">30</option>
                <option value="2">60</option>
            </select>
            <select name="rprogMaxDays" style="display:none;" id="input3" class="rprogMaxDays2 form-control" required>
                <option value="0"></option>
                <option value="1">30</option>
                <option value="2">60</option>
                <option value="3">90</option>
            </select>
            <select name="rprogMaxDays" style="display:none;" id="input3" class="rprogMaxDays3 form-control" required>
                <option value="0"></option>
                <option value="1">30</option>
                <option value="2">60</option>
                <option value="3">90</option>
                <option value="3">180</option>
            </select>
        </div>
<!--        <div class="d-flex flex-column">-->
<!--            <label for="input4">Выберите страну</label>-->
<!--            <select class="form-control" id="input4" required>-->
<!--                <option></option>-->
<!--                <option>2</option>-->
<!--                <option>3</option>-->
<!--                <option>4</option>-->
<!--                <option>5</option>-->
<!--            </select>-->
<!--        </div>-->
    </div>

    <div class="second-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input5">Страна 1</label>
            <? $country = \common\models\Countries::find()->orderBy('name')->all(); ?>
            <select class="form-control" id="input5" name="country1" required>
                <option value="0"></option>
                <? foreach($country as $v){ ?>
                    <option value="<?=$v->country_id?>"><?=$v->name?></option>
                <? } ?>
            </select>
        </div>
        <div class="d-flex flex-column">
            <label for="input6">Страна 2</label>
            <select class="form-control" id="input6" name="country2">
                <option value="0"></option>
                <? foreach($country as $v){ ?>
                    <option value="<?=$v->country_id?>"><?=$v->name?></option>
                <? } ?>
            </select>
        </div>
        <div class="d-flex flex-column">
            <label for="input7">Страна 3</label>
            <select class="form-control" id="input7" name="country3">
                <option value="0"></option>
                <? foreach($country as $v){ ?>
                    <option value="<?=$v->country_id?>"><?=$v->name?></option>
                <? } ?>
            </select>
        </div>
    </div>

    <div class="third-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input8">Начало действия</label>
            <input class="form-control" name="beginDate" type="date" id="input8" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input9">Окончание действия</label>
            <input class="form-control" name="endDate" type="date" id="input9" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input10">Дата рождения</label>
            <input class="form-control" name="birthDate" type="date" id="input10" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input11">Контактный телефон</label>
            <input class="form-control" type="text" name="phone" id="input11">
        </div>
        <div class="d-flex flex-column">
            <label for="input12">E-mail</label>
            <input class="form-control" type="text" name="email" id="input12" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input13">Страховая сумма, евро</label>
            <select class="form-control sumStrah1" disabled="disabled" name="sumStrah" id="input13" required>
                <option></option>
                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
            </select>
            <select class="form-control sumStrah2" style="display:none;" name="sumStrah" id="input13" required>
                <option></option>
                <option value="30000">30000</option>
                <option value="50000">50000</option>
            </select>
            <select class="form-control sumStrah3" style="display:none;" name="sumStrah" id="input13" required>
                <option></option>
                <option value="70000">70000</option>
                <option value="100000">100000</option>
            </select>
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column justify-content-between mb-4 p-3">
        <div class="last-dynamic d-flex flex-column">
            <label for="input14">Страховая премия, тенге</label>
            <input class="form-control premKz" type="text">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label for="input14">Курс евро на сегодня</label>
            <input class="form-control kurs" type="text">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label for="input14">Страховая сумма, тенге</label>
            <input class="form-control sumStrahKz" type="text">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label for="input14">Страховая премия, евро</label>
            <input class="form-control premEur" type="text">
        </div>
<!--        <div class="last-dynamic d-flex flex-column err_div" style="display:none;">-->
<!--            <label for="input14">Ошибки</label>-->
<!--            <input class="form-control err" type="text">-->
<!--        </div>-->
    </div>


    <div class="fifth-row d-flex flex-md-row flex-column justify-content-between align-items-center mb-4">
        <p> *Все поля обязательны для заполнения!</p>
        <button class="text-uppercase">Продолжить оформление</button>
    </div>
</form>



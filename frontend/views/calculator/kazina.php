<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator">Калькулятор <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">ОСРНС</a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">Шаг 1. Рассчитать стоиомость полиса</h3>
    <a href="">Важно</a>
</div>

<form class="form-asia d-flex flex-column kazina-response">
<!--    <h4 class="text-uppercase mb-4">данные страхователя</h4>-->
<!--    <div class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">-->
<!--        <div class="d-flex flex-column">-->
<!--            <label for="input1">Ф.И.О.</label>-->
<!--            <input name="oked" class="form-control" type="text" id="input1">-->
<!--        </div>-->
<!--        <div class="d-flex flex-column">-->
<!--            <label for="input3">Телефон</label>-->
<!--            <input name="col_sotr" class="form-control" type="text" id="input3">-->
<!--        </div>-->
<!--        <div class="d-flex flex-column">-->
<!--            <label for="input4">E-mail</label>-->
<!--            <input class="form-control" type="text" id="input4">-->
<!--        </div>-->
<!--    </div>-->
    <h4 class="text-uppercase mb-4">ОСНОВНЫЕ ПАРАМЕТРЫ СТРАХОВАНИЯ</h4>
    <div class="second-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input5">Количество лет</label>
            <input class="form-control" type="text" id="input5" name="clnYears">
        </div>
        <div class="d-flex flex-column">
            <label for="input5">Пол</label>
            <input class="form-control" type="radio" id="input5" name="sex" value="1">
            <input class="form-control" type="radio" id="input5" name="sex" value="2">
        </div>
    </div>
    <div class="second-row d-flex flex-md-row flex-column justify-content-between mb-4">
<!--        <div class="d-flex flex-column">-->
<!--            <label for="input5">Дата расчета</label>-->
<!--            <input class="form-control" type="date" id="input5">-->
<!--        </div>-->
        <div class="d-flex flex-column">
            <label for="input5">Срок страхования</label>
            <select name="srokYears">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="d-flex flex-column">
            <label for="input5">Периодичность взносов</label>
            <select name="periodichnost">
                <option value="1">ежегодно</option>
                <option value="2">единовременно</option>
                <option value="3">раз в пол года</option>
                <option value="4">ежеквартально</option>
                <option value="5">ежемесячно</option>
            </select>
        </div>
    </div>
    <div class="third-row d-flex flex-md-row flex-column justify-content-start mb-4 p-3">
        <div class="last-dynamic d-flex flex-column mr-md-5 mr-0">
            <label>Страховая сумма, тенге</label>
            <input class="form-control" type="text" id="input5" name="strSum">
        </div>
<!--        <div class="last-dynamic d-flex flex-column">-->
<!--            <label>Страховой взнос, тенге</label>-->
<!--            <input class="form-control" type="text" id="input5" name="">-->
<!--        </div>-->
    </div>

    <div class="fifth-row d-flex flex-md-row flex-column justify-content-between align-items-center mb-4">
        <p>Укажите страховую сумму или желаемую сумму взноса. По второму полю расчет будет произведен автоматически</p>
        <button class="text-uppercase">Продолжить оформление</button>
    </div>
    <div class="third-row d-flex flex-md-row flex-column justify-content-start mb-4 p-3">
        <div class="last-dynamic d-flex flex-column mr-md-5 mr-0">
            <label>Смерть в результате HC</label>
            <input class="form-control" type="text" id="input5" name="ADB">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Телесная травма в результате</label>
            <input class="form-control" type="text" id="input5" name="TT">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Установление временной нетрудоспособности</label>
            <input class="form-control" type="text" id="input5" name="TD">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Госпитализация в результате HC</label>
            <input class="form-control" type="text" id="input5" name="HD">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Инвалидность в результате HC</label>
            <input class="form-control" type="text" id="input5" name="ATPD">
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Критическое заболевание</label>
            <input class="form-control" type="text" id="input5" name="CI">
        </div>
<!--        <div class="last-dynamic d-flex flex-column">-->
<!--            <label>Освобождение от уплаты взносов...</label>-->
<!--            <input class="form-control" type="text" id="input5" name="">-->
<!--        </div>-->
<!--        <div class="last-dynamic d-flex flex-column">-->
<!--            <label>Сумма, тенге</label>-->
<!--            <input class="form-control" type="text" id="input5" name="">-->
<!--        </div>-->
    </div>
    <div class="response">
        <div class="third-row d-flex flex-md-row flex-column justify-content-start mb-4 p-3">
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос</label>
                <input class="form-control number" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «смерть в результате НС»</label>
                <input class="form-control OutADB" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «инвалидность в результате НС»</label>
                <input class="form-control OutATPD" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «телесная травма в результате»</label>
                <input class="form-control OutTT" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «критические заболевания»</label>
                <input class="form-control OutCI" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «установление временной нетрудоспособности»</label>
                <input class="form-control OutTD" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «госпитализация в результате НС»</label>
                <input class="form-control OutHD" type="text">
            </div>
            <div class="last-dynamic d-flex flex-column">
                <label>Страховой взнос по «Освобождение от уплаты взносов»</label>
                <input class="form-control OutTPD" type="text">
            </div>
        </div>
    </div>
</form>
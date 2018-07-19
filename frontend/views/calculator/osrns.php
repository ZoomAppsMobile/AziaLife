<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator">Калькулятор <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">ОСРНС</a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">Шаг 1. Рассчитать стоиомость полиса</h3>
    <a href="">Важно</a>
</div>

<form action="/calculator/xml" class="form-asia d-flex flex-column">
    <h4 class="text-uppercase mb-4">данные страхователя</h4>
    <div class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input1">Ф.И.О./Наименование юр. лица*</label>
            <input name="oked" class="form-control" type="text" id="input1" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input2">ОКЭД*</label>
            <input name="yearFond" class="form-control" type="text" id="input2" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input3">Контактный телефон</label>
            <input name="col_sotr" class="form-control" type="text" id="input3" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input4">E-mail</label>
            <input class="form-control" type="text" id="input4" required>
        </div>
    </div>
    <h4 class="text-uppercase mb-4">ОСНОВНЫЕ ПАРАМЕТРЫ СТРАХОВАНИЯ</h4>
    <div class="second-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div class="d-flex flex-column">
            <label for="input5">Дата расчета</label>
            <input class="form-control" type="date" id="input5" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input6">Годовой ФОТ, тг*</label>
            <input class="form-control" type="text" id="input6" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input7">СКПР*</label>
            <input class="form-control" type="text" id="input7" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input8">КПР*</label>
            <input class="form-control" type="text" id="input8" required>
        </div>
        <div class="d-flex flex-column">
            <label for="input9">Кол. сотрудников*</label>
            <input class="form-control" type="text" id="input9" required>
        </div>
    </div>

    <div class="third-row d-flex flex-md-row flex-column justify-content-start mb-4 p-3">
        <div class="last-dynamic d-flex flex-column mr-md-5 mr-0">
            <label>Страховая сумма, тенге</label>
            <p class="form-control">15 666 000</p>
        </div>
        <div class="last-dynamic d-flex flex-column">
            <label>Страховая премия, тенге</label>
            <p class="form-control">0</p>
        </div>
    </div>

    <div class="fifth-row d-flex flex-md-row flex-column justify-content-between align-items-center mb-4">
        <p>Укажите страховую сумму или желаемую сумму взноса. По второму полю расчет будет произведен автоматически</p>
        <button class="text-uppercase">Продолжить оформление</button>
    </div>
</form>
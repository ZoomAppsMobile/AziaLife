<link href="/bolashak1/style.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/calculator"><?=Yii::t('main-title', 'Калькуляторы')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Азия Казына')?></p>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?=Yii::t('main-title', 'Калькуляторы')?>Шаг 1. Рассчитать стоимость полиса</h3>
    <a href=""><?=Yii::t('main-title', 'Важно')?></a>
</div>

<div class="main-text d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h4 class="text-main my-3"><?=Yii::t('main-title', 'Данные о Застрахованном')?></h4>
</div>

<form class="form-asia d-flex flex-column kazina-response">
    <div id="first-row" class="first-row d-flex flex-md-row flex-column justify-content-between mb-4">
        <div>
            <label for="input1"><?=Yii::t('main-title', 'Ф.И.О.')?></label>
            <input id="name-control" class="form-control" type="text" name="name" value="">
        </div>
        <div>
            <label for="input2"><?=Yii::t('main-title', 'Телефон')?></label>
            <input id="tel-control input-nums" class="form-control" type="tel" name="phone-number" value="">
        </div>
        <div>
            <label for="input3">E-mail</label>
            <input id="email-control" class="form-control" type="text" name="email" value="">
        </div>
    </div>

    <div class="second-row d-flex flex-md-row flex-column mb-4">
        <div>
            <label for="input5"><?=Yii::t('main-title', 'Дата рождения')?>*</label>
            <input class="form-control" type="date" id="born-control" required name="clnYears">
        </div>
        <div class="gender-block">
            <label for="input6"><?=Yii::t('main-title', 'Пол')?></label>
            <div class="gender">
                <label><input type="radio" name="sex" value=""> <?=Yii::t('main-title', 'Мужской')?></label>
                <label><input type="radio" name="sex" value=""> <?=Yii::t('main-title', 'Женский')?></label>
            </div>
        </div>
    </div>

    <h4 class="text-main my-3"><?=Yii::t('main-title', 'ОСНОВНЫЕ ПАРАМЕТРЫ СТРАХОВАНИЯ')?></h4>
    <div class="third-row d-flex flex-md-row flex-column mb-4">
        <div>
            <label for="input8"><?=Yii::t('main-title', 'Дата расчетa')?></label>
            <input class="form-control" type="date" id="input8" required>
        </div>
        <div class="select-block">
            <label for="input9"><?=Yii::t('main-title', 'Срок страхования')?>*</label>
            <select id="select1" class="form-control" name="srokYears">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="select-block">
            <label for="input10"><?=Yii::t('main-title', 'Периодичность взносов')?>*</label>
            <select id="select1" class="form-control" name="periodichnost">
                <option></option>
                <option value="1"><?=Yii::t('main-title', 'ежегодно')?></option>
                <option value="2"><?=Yii::t('main-title', 'единовременно')?></option>
                <option value="3"><?=Yii::t('main-title', 'раз в пол года')?></option>
                <option value="4"><?=Yii::t('main-title', 'ежеквартально')?></option>
                <option value="5"><?=Yii::t('main-title', 'ежемесячно')?></option>
            </select>
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column mb-4 p-3">
        <div class="last-dynamic">
            <label for="input14"><?=Yii::t('main-title', 'Страховая сумма, тенге')?></label>
            <input id="input-nums" class="form-control" type="number" name="strSum" value="">
        </div>
        <div class="last-dynamic dynamic2">
            <label for="input14"><?=Yii::t('main-title', 'Страховой взнос, тенге')?></label>
            <input id="input-nums" class="form-control number" type="number" name="" value="">
        </div>
    </div>
    <p class="sometext"><?=Yii::t('main-title', 'Укажите страховую сумму или желаемую сумму взноса. По второму полю расчет будет произведен автоматически')?></p>

    <h4 class="text-main my-3"><?=Yii::t('main-title', 'Дополнительные покрытия Застрахованного')?></h4>

    <p class="sometext"><?=Yii::t('main-title', 'Выберите по желанию виды дополнительного покрытия и размеры страховых сумм')?></p>

    <div class="d-flex flex-column mb-4">
        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text"><?=Yii::t('main-title', 'Смерть в результате НС')?></p>
            <div class="select-block">
                <label for="input9"><?=Yii::t('main-title', 'Срок страхования')?>*</label>
                <select id="select2" class="form-control" name="ADB">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <label for="input14"><?=Yii::t('main-title', 'Страховой взнос, тенге')?></label>
                <input id="input-nums" class="form-control OutADB" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Телесная травма в результате')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="TT">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTT" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Установление временой нетрудоспособности')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="TD">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTD" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Госпитализация в результате НС')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="HD">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutHD" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Инвалидность в результате НС')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="ATPD">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutATPD" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Критическое заболевание')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="CI">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutCI" type="number" name="" value="">
            </div>
        </div>

        <div class="first-row d-flex flex-md-row flex-column mb-4">
            <p class="dop-text2"><?=Yii::t('main-title', 'Освобождение от уплаты взносов. Инвалидность в результате НС в первые 2 года. НС/заболевания с 3-го года.')?></p>
            <div class="select-block">
                <select id="select2" class="form-control" name="">
                    <option><?=Yii::t('main-title', 'равна страховой сумме')?></option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="300000">300000</option>
                    <option value="400000">400000</option>
                    <option value="500000">500000</option>
                </select>
            </div>
            <div class="last-dynamic dynamic2">
                <input id="input-nums" class="form-control OutTPD" type="number" name="" value="">
            </div>
        </div>
    </div>

    <div class="fourth-row d-flex flex-md-row flex-column justify-content-between mb-4 p-3">
        <div class="dynamic-item d-flex">
            <p class="dynamic-sum"><?=Yii::t('main-title', 'Сумма, тенге')?></p>
            <div class="last-dynamic dynamic3">
                <p class="form-control">&nbsp;</p>
            </div>
        </div>
        <button class="text-uppercase sum-btn"><?=Yii::t('main-title', 'Рассчитать')?></button>
    </div>
</form>
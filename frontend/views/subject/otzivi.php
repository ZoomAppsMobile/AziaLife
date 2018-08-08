<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <p>Отзывы</p>
</div>
<div class="wrapper">
    <div class="main">

        <div style="color:green">
            <? echo Yii::$app->session->getFlash('success1'); ?>
        </div>
        <h1 class="client-review">ОТЗЫВЫ КЛИЕНТОВ</h1>

        <div class="text-clients">
            <h2 class="text1">Уважаемые клиенты!</h2>
            <p class="text2">
                Мы благодарим вас за отзывы и предложения, они помогают делать нашу работу еще лучше!<br>
                Вы можете задать любой вопрос, отправить отзыв или пожелание. Самые интересные и актуальные будут опубликованы на сайте.
            </p>
        </div>
        <?php $form = \yii\widgets\ActiveForm::begin(); ?>
            <div class="form">
                <p class="message">Сообщение</p>
                <textarea class="message-textarea" name="Reviews[text]" class="message" required></textarea>
                <p class="message name">ФИО</p>
                <input name="Reviews[fio]" class="form-name" type="text" required />
                <p class="message phone-num">Телефон</p>
                <input name="Reviews[phone]" class="form-name" required />
                <p class="message phone-num">E-mail</p>
                <input name="Reviews[email]" class="form-name email" type="email" required />
                <input name="submit" class="btn-submit" type="submit" value="ОТПРАВИТЬ ОТЗЫВ" />
            </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div>
</div>
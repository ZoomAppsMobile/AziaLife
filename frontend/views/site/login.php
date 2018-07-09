<div class="link-anchors d-flex mt-4">
    <a href="/">Главная <img src="image/link-arrow-right.png" alt=""></a>
    <a href="">Личный кабинет <img src="image/link-arrow-right.png" alt=""></a>
</div>

<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">ЛИЧНЫЙ КАБИНЕТ</h3>

<div class="d-flex justify-content-center my-5">
    <div id="exTab1" class="">
        <ul  class="nav nav-pills">
            <li>
                <a  href="#1a" data-toggle="tab" class="<?if(!$error_signup){?>active<?}?>">Вход</a>
            </li>
            <li><a href="#2a" data-toggle="tab" <?if($error_signup){?>class="active"<?}?>>Регистрация</a>
            </li>

        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane <?if(!$error_signup){?>active<?}?>" id="1a">
                <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
                <?php if (Yii::$app->session->hasFlash('contactFormLogin')): ?>
                    <div class="alert alert-danger">
                        Неправильный логин или пароль.
                    </div>
                <?php endif; ?>
                <input type="text" id="" class="" name="LoginForm[username]" autofocus="" placeholder="Email">
                <input type="password" name="LoginForm[password]" placeholder="Пароль">
                <div class="form-group">
                    <input type="submit" value="ВОЙТИ В ЛИЧНЫЙ КАБИНЕТ">
                </div>

                <?php \yii\bootstrap\ActiveForm::end(); ?>
                <a href="<?=\yii\helpers\Url::to(['site/request-password-reset']);?>"><span>Забыли пароль</span></a>
            </div>
            <div class="tab-pane <?if($error_signup){?>active<?}?>" id="2a">
                <?php $form = \yii\bootstrap\ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($signup, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Имя пользователя'])->label(false); ?>

                    <?= $form->field($signup, 'email')->textInput(['placeholder' => 'E-mail'])->label(false);  ?>

                    <?= $form->field($signup, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false);  ?>

                    <div class="form-group">
                        <?= \yii\helpers\Html::submitButton('ПОЛУЧИТЬ ДОСТУП', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php \yii\bootstrap\ActiveForm::end(); ?>
<!--                <form action="">-->
<!--                    <input type="text" placeholder="Код"> <br>-->
<!--                    <input type="submit" value="ПОЛУЧИТЬ ДОСТУП">-->
<!--                </form>-->
                <div class="litletext">
                    <span> Получить код <a href="">онлайн оплата</a></span>
                    <br><br>
                    <span>Регистрация возможна только для клиентов “Азия  Life”, заключившим договор страхования оффлайн</span>
                </div>
            </div>

        </div>
    </div>
</div>
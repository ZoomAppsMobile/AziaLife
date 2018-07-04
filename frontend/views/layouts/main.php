<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use backend\models\Banner;
use yii\db\Expression;
AppAsset::register($this);
if (!\Yii::$app->session->get('lang')){
\Yii::$app->session->set('lang', 'ru');
}
$banner=Banner::find()
            ->where(['main' => '0'])
            ->orderBy(new Expression('rand()'))
            ->one(); 
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="header1 d-none d-md-flex justify-content-between">
    <a href="/"><img class="logo" src="/image/logo.png" alt=""></a>
    <div class="d-flex flex-column">
        <div class="top-bar d-flex align-items-center">
            <div class="phone-and-map d-flex flex-column mr-4">
                <div class="d-flex align-items-center">
                    <img src="/image/header-phone.png" alt="">
                    <a href="tel:+77712280607">+7 (771) 228 06 07</a>
                </div>
                <a class="pink-text" href="">
                    <span>
                        <?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Заказать звонок";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Request a call";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Қоңырауға тапсырыс беру";
                            }
                        ?>
                    </span></a>
            </div>
            <div class="phone-and-map d-flex flex-column">
                <div class="d-flex align-items-center">
                    <img src="/image/header-map.png" alt="">
                    <a><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Астана";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Astana";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Астана";
                            }
                        ?></a>
                </div>
                <a class="pink-text" href=""><span><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "офисы в вашем городе";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "offices in your city";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Сіздің қалаңыздағы кеңселер";
                            }
                        ?></span></a>
            </div>
            <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
              <option value="/lang/ru" <?php if(\Yii::$app->session->get('lang')=='ru'){ echo 'selected'; } ?>>RU</option>
              <option value="/lang/kz" <?php if(\Yii::$app->session->get('lang')=='kz'){ echo 'selected'; } ?>>KZ</option>
              <option value="/lang/en" <?php if(\Yii::$app->session->get('lang')=='en'){ echo 'selected'; } ?>>EN</option>
            </select>
            <form class="d-flex search-form align-items-center" action="">
                <input type="text">
                <button><img src="/image/header-search.png" alt=""></button>
            </form>
            <a class="cabinet" href=""><img src="/image/header-cabinet.png" alt=""><span>
            <?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Личный кабинет";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Жеке кабинет";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Personal account";
                            }
                        ?></span></a>
        </div>
        <div class="bottom-bar d-flex">
            <a class="text-uppercase" href=""><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "о компании";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Компания туралы";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "about the company";
                            }
                        ?></a>
            <a class="text-uppercase" href=""><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Частным клиентам";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Жеке клиенттерге";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Private clients";
                            }
                        ?></a>
            <a class="text-uppercase" href=""><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Бизнесу";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Бизнес үшін";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "business";
                            }
                        ?> </a>
            <a class="text-uppercase" href=""><?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Онлайн оплата";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Онлайн төлеу";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Online payment";
                            }
                        ?></a>
            <a class="text-uppercase" href="">
            <?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo "Клиентская поддержка";
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo "Клиенттік қолдау";
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo "Client support";
                            }
                        ?></a>
        </div>
    </div>
</div>
        <?= Alert::widget() ?>
        <?= $content ?> 
        <div data-aos="fade-up" class="banners d-flex justify-content-center my-5">
    <img class="banner" src="<?=$banner->image?>" alt="">
</div>
        <div data-aos="fade-up" class="footer d-flex flex-md-row flex-column align-items-center align-items-md-start text-center text-md-left justify-content-between">
    <div class="links d-flex flex-column">
        <a href="">Медиа информация</a>
        <a href="">Вакансии</a>
        <a href="">Вопросы и ответы</a>
    </div>
    <div class="links d-flex flex-column mx-md-3 mx-0">
        <a href="">О компании</a>
        <a href="">Реквизиты компании</a>
        <a href="">Финансовые показатели</a>
    </div>
    <div class="links d-flex flex-column">
        <a href="">Кабинет агента</a>
        <a href="">Книга предложений</a>
        <a href="">Спецпредложения</a>
    </div>
    <div class="contacts my-4 my-md-0">
        <div class="mobile-phone d-flex align-items-center">
            <img src="/image/footer-phone.png" alt="">
            <a href="tel:+77712280607">+7 (771) 228 06 07</a>
        </div>
        <p>заказать звонок</p>
        <div class="email d-flex align-items-center">
            <img src="/image/footer-email.png" alt="">
            <a href="mailto:Info@mail.com">Info@mail.com</a>
        </div>
        <div class="mobile-app d-flex">
            <img src="/image/footer-mobile-app.png" alt="">
            <a href="">Мобильное приложение</a>
        </div>
    </div>

    <div class="social-media d-flex flex-column align-items-center align-items-md-start justify-content-between">
        <div class="social d-flex align-items-center mb-4 mb-md-0">
            <a href=""><img src="/image/footer-social1.png" alt=""></a>
            <a href=""><img src="/image/footer-social2.png" alt=""></a>
            <a href=""><img src="/image/footer-social3.png" alt=""></a>
            <a href=""><img src="/image/footer-social4.png" alt=""></a>
            <a href=""><img src="/image/footer-social5.png" alt=""></a>
            <a href=""><img src="/image/footer-social6.png" alt=""></a>
            <a href=""><img src="/image/footer-social7.png" alt=""></a>
        </div>
        <div class="second-row d-flex">
            <a href=""><img src="/image/footer-social8.png" alt=""></a>
            <a href=""><img src="/image/footer-social9.png" alt=""></a>
        </div>
    </div>
</div>
<p class="footer-copyright text-center">
    ©2018. Все права защищены. Перепечатка и использование материалов данного сайта допускается только при условии
    активной гиперссылки на источник и только с письменного разрешения АО «КСЖ «Азия Life»
</p>
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

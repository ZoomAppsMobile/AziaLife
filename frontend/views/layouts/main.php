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
    \Yii::$app->session->set('lang', '');
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
                <a class="pink-text callback" href="№">
                    <span>
                        <?php
                            echo Yii::t('main-title', 'Заказать звонок');
                        ?>
                    </span></a>
            </div>
            <div class="phone-and-map d-flex flex-column">
                <div class="d-flex align-items-center">
                    <img src="/image/header-map.png" alt="">
                    <a id="office-city"><?php
                            echo Yii::t('main-title', 'Астана');
                        ?></a>
                </div>
                <a class="pink-text" href="" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>
                        <?php
                            echo Yii::t('main-title', 'офисы в вашем городе');
                        ?>
                    </span>
                </a>
                <div class="dropdown-menu ddn-cont" data-offset="1" aria-labelledby="dLabel">
                    <div class="ddn-cont-wrap">
                        <div class="ddn-cont-top d-flex justify-content-between">
                            <h3 class="text-uppercase"><?=Yii::t('main-title', 'выберите ваш город');?></h3>
                            <div class="close"><a href="">X</a></div>
                        </div>

                        <form class="d-flex search-form align-items-center" action="/search">
                            <input type="text" name="text">
                            <button><img src="public/images/header-search1.png" alt=""></button>
                        </form>
                        <div class="ddn-cont-citys d-flex justify-content-between">
                            <ul class="border-right">
                                <? $city = \common\models\City::find()->all(); ?>
                                <? foreach($city as $v){ $var = 'name'.\Yii::$app->session->get('lang')?>
                                    <li><a href="/office?id=<?=$v->id?>"><?=$v->$var?></a></li>
                                <? } ?>
<!--                                <li><a href="">Актау</a></li>-->
<!--                                <li><a href="">Актобе</a></li>-->
<!--                                <li><a href="">Астана</a></li>-->
<!--                                <li><a href="">Атырау </a></li>-->
<!--                                <li><a href="">Шымкент</a></li>-->
<!--                                <li><a href="">Караганда</a></li>-->
<!--                                <li><a href="">Кызылорда</a></li>-->
<!--                                <li><a href="">Усть-Каменогорск</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
<!--                                <li><a href="">Рудный</a></li>-->
                            </ul>
<!--                            <ul>-->
<!--                                <li><a href="">Туркестан</a></li>-->
<!--                                <li><a href="">Темиртау</a></li>-->
<!--                                <li><a href="">Талдыкорган</a></li>-->
<!--                                <li><a href="">Павлодар</a></li>-->
<!--                                <li><a href="">Петропавловск</a></li>-->
<!--                                <li><a href="">Кокшетау</a></li>-->
<!--                                <li><a href="">Семей</a></li>-->
<!--                                <li><a href="">Уральск</a></li>-->
<!--                                <li><a href="">Экибастуз</a></li>-->
<!--                            </ul>-->

                        </div>
                    </div>
                </div>
            </div>
            <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
              <option value="/lang/ru" <?php if(\Yii::$app->session->get('lang')==''){ echo 'selected'; } ?>>RU</option>
              <option value="/lang/kz" <?php if(\Yii::$app->session->get('lang')=='_kz'){ echo 'selected'; } ?>>KZ</option>
              <option value="/lang/en" <?php if(\Yii::$app->session->get('lang')=='_en'){ echo 'selected'; } ?>>EN</option>
            </select>
            <form class="d-flex search-form align-items-center" action="/search">
                <input type="text" name="text">
                <button><img src="/image/header-search.png" alt=""></button>
            </form>
            <?= \frontend\widgets\MenuWidget::widget() ?>
    </div>
</div>
        <?= Alert::widget() ?>
        <?= $content ?> 
<div data-aos="fade-up" class="banners d-flex justify-content-center my-5">
    <img class="banner" src="<?=$banner->image?>" alt="">
</div>

<?= \frontend\widgets\FooterMenuWidget::widget() ?>
<p class="footer-copyright text-center">
    <?=Yii::t('main-title', '©2018. Все права защищены. Перепечатка и использование материалов данного сайта допускается только при условии
    активной гиперссылки на источник и только с письменного разрешения АО «КСЖ «Азия Life»');?>
</p>
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

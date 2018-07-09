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
    ©2018. Все права защищены. Перепечатка и использование материалов данного сайта допускается только при условии
    активной гиперссылки на источник и только с письменного разрешения АО «КСЖ «Азия Life»
</p>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

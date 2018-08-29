<?php
$this->registerCssFile('/frontend/web/style_busines/style.css');
$this->registerCssFile('/frontend/web/css/news/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/"><?=Yii::t('main-title', 'Главная')?> <img src="/image/link-arrow-right.png" alt=""></a>
    <p><?=Yii::t('main-title', 'Результаты поиска')?></p>
</div>
<div data-aos="fade-up" class="about-stock d-flex flex-column aos-init aos-animate">
    <h3 class="text-uppercase mb-4">
        <?=Yii::t('main-title', 'Результаты поиска')?>
    </h3>

    <?foreach ($model_blog as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('content'), 800)?></p>
                    <a class="more-info" href="/private-clients/<?=$v->url?>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>

    <?foreach ($model_news as $v){?>
        <div data-aos="fade-up" class="main d-flex justify-content-between mt-5 aos-init aos-animate">
            <div class="news-block1 d-flex" style="width: 100%;">
                <img class="" src="<?=$v->image?>" alt="">
                <div class="block-info">
                    <h4 class="text-uppercase head-text"><?=$v->setLang('title')?></h4>
                    <p class="block-info-text"><?=\frontend\controllers\FrontendController::cutStr($v->setLang('content'), 800)?></p>
                    <a class="more-info" href="#>"><?=Yii::t('main-title', 'Читать больше')?></a>
                </div>
            </div>
        </div>
    <?}?>
</div>
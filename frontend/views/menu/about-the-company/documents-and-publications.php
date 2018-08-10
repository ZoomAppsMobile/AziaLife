<?php
$this->registerCssFile('/frontend/web/styles/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Документы и публикации</a>
</div>

<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4">документы и публикации</h3>

    <div class="main-img">
        <img class="big-image" src="/images/main-img.png" alt="">
    </div>

    <div class="list mt-5">
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/financial-indicators" class="list-link">ФИНАНСОВЫЕ ПОКАЗАТЕЛИ</a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/register-of-insurance-agents" class="list-link">РЕЕСТР СТРАХОВЫХ АГЕНТОВ</a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/insurance-tariffs" class="list-link">СТРАХОВЫЕ ТАРИФЫ</a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="" class="list-link">ПРЕЗЕНТАЦИИ</a>
        </div>
        <div class="list-item">
            <img src="/images/list.png" alt="">
            <a href="/about-company/documents-and-publications/insurance-rules" class="list-link">ПРАВИЛА СТРАХОВАНИЯ</a>
        </div>
    </div>
</div>

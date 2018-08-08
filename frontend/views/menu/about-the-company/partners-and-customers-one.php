<link href="/about/style.css" rel="stylesheet">
<link href="/css1/main.css" rel="stylesheet">
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company/partners-and-customers']))?>">Партнеры и клиенты<img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Текст</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">РЕЕСТР СТРАХОВЫХ АГЕНТОВ</h3>

<div class="rules d-flex flex-column">
    <?=$model->title?>
</div>
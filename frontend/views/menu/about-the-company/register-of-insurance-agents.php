<?php
$this->registerCssFile('/frontend/web/new_style/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-company/documents-and-publications']))?>">Документы и публикации <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Реестр страховых агентов</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">РЕЕСТР СТРАХОВЫХ АГЕНТОВ</h3>

<div class="rules d-flex flex-column">
    <h4>В Данном разделе Вы можете ознакомиться со страховыми тарифами, применяемыми в АО «КСЖ «Азия Life».</h4>

    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <div data-aos="fade-up" class="finance-block">
            <? foreach($model as $v){ ?>
                <a href="<?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo $v['file'];
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo $v['file_kz'];
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo $v['file_en'];
                            }
                          ?>">
                    <div class="finance-row d-flex">
                        <p class="finance-item"><img src="/images/icon.png" alt=""></p>
                        <p class="finance-item2">
                            <?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo $v['title'];
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo $v['title_kz'];
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo $v['title_en'];
                            }
                            ?>
                        </p>
                    </div>
                </a>
            <? } ?>
        </div>
    </div>
</div>
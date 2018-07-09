<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-the-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-the-company/documents-and-publications']))?>">Документы и публикации <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Реестр страховых агентов</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">РЕЕСТР СТРАХОВЫХ АГЕНТОВ</h3>

<div class="rules d-flex flex-column">
    <h4>В Данном разделе Вы можете ознакомиться со страховыми тарифами, применяемыми в АО «КСЖ «Азия Life».</h4>

    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <div data-aos="fade-up" class="badges-row d-flex flex-md-row row justify-content-around flex-column align-items-md-start align-items-center w-100 mt-0 mt-md-4">
            <? foreach($model as $v){ ?>
                <a href="<?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo $v['file'];
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo $v['file_kz'];
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo $v['file_en'];
                            }
                          ?>"
                   class="badge-pdf mt-2 mt-md-0 d-flex flex-column justify-content-center align-items-center p-2">
                    <img src="/image/rules-download.png" alt="">
                    <p class="text-center mt-2">
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
                </a>
            <? } ?>
        </div>
    </div>
</div>
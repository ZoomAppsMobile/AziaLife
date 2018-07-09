<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="/">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Html::encode(\yii\helpers\Url::to(['/about-the-company']))?>">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Партнеры и клиенты</a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center">партнеры и клиенты</h3>
</div>

<div class="main-body d-flex flex-column">
        <? $i = 0; foreach($model as $v){ ?>
        <? if($i == 0){ ?>
            <div class="d-flex flex-md-row flex-column justify-content-between">
        <? }if($i != 0 && $i % 4 == 0){ ?>
                <div class="second-row d-flex flex-md-row flex-column mt-md-4 mt-0 justify-content-between">
        <? } ?>

        <div class="item-inside d-flex flex-column align-items-center">
            <img src="<?php
                            if(\Yii::$app->session->get('lang')=='ru'){
                                echo $v['doc'];
                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                echo $v['doc_kz'];
                            } else if(\Yii::$app->session->get('lang')=='en'){
                                echo $v['doc_en'];
                            }
                       ?>
                       " alt="">
            <p class="text-center">
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
            <a href="<?=\yii\helpers\Url::to(['/about-the-company/partners-and-customers/'.$v['url']]);?>">Читать больше</a>
        </div>

        <? $i++;if($i % 4 == 0 || $i == count($model)){ ?></div><? } ?>
        <? } ?>
</div>
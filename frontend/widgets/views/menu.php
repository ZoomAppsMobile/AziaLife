<a class="cabinet" href="/login" style="margin-top:-29px;"><img src="/image/header-cabinet.png" alt="">
        <span>
            <?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo "Личный кабинет";
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo "Жеке кабинет";
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo "Personal account";
            }
            ?>
        </span>
</a>
<div style="position: relative;top:10px;left:-159px;">
<a class="cabinet" href="/site/logout" style="">
    <img src="/image/header-cabinet.png" alt="">
    <span>
            <?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo "Выход";
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo "Выход";
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo "Выход";
            }
            ?>
        </span>
</a>
</div>
</div>
<div class="bottom-bar d-flex">
    <? foreach($model as $v){ ?>
        <a class="text-uppercase" href="/<?=\yii\helpers\Html::encode(\yii\helpers\Url::to($v['url']))?>">
            <?php
                if(\Yii::$app->session->get('lang')=='ru'){
                    echo $v['name'];
                } else if(\Yii::$app->session->get('lang')=='kz'){
                    echo $v['name_kz'];
                } else if(\Yii::$app->session->get('lang')=='en'){
                    echo $v['name_en'];
                }
            ?>
        </a>
    <? } ?>
</div>
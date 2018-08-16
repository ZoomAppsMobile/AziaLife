<?php
$this->registerCssFile('/frontend/web/new_style/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column my-4">
    <a href="/">Главная<img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Url::to(['/about-company'])?>">О компании<img src="/image/link-arrow-right.png" alt=""></a>
    <a href="<?=\yii\helpers\Url::to(['/about-company/documents-and-publications'])?>">Документы и публикации<img src="/image/link-arrow-right.png" alt=""></a>
    <p href="">Финансовые показатели</p>
</div>


<div data-aos="fade-up"  class="about-stock d-flex flex-column">
    <h3 class="text-uppercase mb-4">Финансовые показатели</h3>
    <p class="text1">В данном разделе Вашему вниманию предлагается финансовая отчетность, а также ежеквартальная финансовая отчетность АО «КСЖ «Азия Life».</p>

    <? $Oldyear = "";foreach($model as $v){ $year = $v['year'];?>
    <?if($year!=$Oldyear&&$Oldyear != ""){?>
        <p class="year"><?=$v['year']?></p>
    <?}?>
    <?if($year!=$Oldyear&&$Oldyear == ""){?>
        <p class="year"><?=$v['year']?></p>
    <?}?>
    <div class="finance-block">
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
    </div>
        <? $Oldyear = $v['year'];} ?>
</div>
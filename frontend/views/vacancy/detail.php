<?php
$this->registerCssFile('/frontend/web/css/vacancydetail/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/vacancy">Вакансии <img src="/image/link-arrow-right.png" alt=""></a>
    <a><?php
    	if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->title;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->title_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->title_kz;
        }
    ?></a>
</div>

<div class="main-text mt-1 mt-md-5 mb-4 d-flex flex-md-row flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase text-md-left text-center"><?php
    	if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->title;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->title_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->title_kz;
        }
    ?></h3>
</div>

<div class="main-body d-flex flex-column">
    <?php
    	if(\Yii::$app->session->get('lang')=='ru'){
            echo $vacancy->content;
        } else if(\Yii::$app->session->get('lang')=='en'){
            echo $vacancy->content_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            echo $vacancy->content_kz;
        }
    ?>
</div>
<script>
    jQuery(document).ready(function($){

        AOS.init({
            offset: 0,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
//            disable: window.innerWidth < 768
        });
    });

</script>
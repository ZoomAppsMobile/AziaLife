<?php
$this->registerCssFile('/frontend/web/css/business/style.css');
?>
<h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold">Бизнесу</h3>
<div class="busines main-text d-flex flex-md-row flex-column">
    <?php
        if(count($blogs)>0){
            foreach ($blogs as $key) {
                 if(\Yii::$app->session->get('lang')=='ru'){
                    $keydes=$key->description;
                    $keytitle=$key->title;
                } else if(\Yii::$app->session->get('lang')=='en'){
                    $keydes=$key->description_en;
                    $keytitle=$key->title_en;
                } else if(\Yii::$app->session->get('lang')=='kz'){
                    $keydes=$key->description_kz;
                    $keytitle=$key->title_kz;
                }
                echo '<div class="busines-customers-wrap"><a href="/business/'.$key->url.'">
                    <img src="'.$key->thumb.'" alt="">
                    <h4 class="text-uppercase font-weight-bold">'.$keytitle.'</h4>
                    <div class="mgb">'.$keydes.' 
                    </div></a>
                </div>';
            }
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
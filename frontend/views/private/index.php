<?php
use backend\models\Blog;
$this->registerCssFile('/frontend/web/css/private/style.css');
?>

<?php

if(count($blogcategory)>0){
    foreach ($blogcategory as $key) {
        ?>
            <h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo $key->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $key->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $key->title_kz;
            }
            ?></h3>
            <div class="main-text d-flex flex-md-row flex-column">
                <?php
                    $blogs=Blog::find()->where(['status'=>'1', 'category'=>$key->id])->all();
                    foreach ($blogs as $val) {
                        if(\Yii::$app->session->get('lang')=='ru'){
                            $valtitle=$val->title;
                            $valdescription=$val->description;
                        } else if(\Yii::$app->session->get('lang')=='en'){
                            $valtitle=$val->title_en;
                            $valdescription=$val->description_en;
                        } else if(\Yii::$app->session->get('lang')=='kz'){
                            $valtitle=$val->title_kz;
                            $valdescription=$val->description_kz;
                        }
                        echo '<div class="private-customers-wrap">
                            <a href="/private/'.$val->url.'">
                                <img src="'.$val->thumb.'" alt="">
                                <h4 class="text-uppercase font-weight-bold">'.$valtitle.'</h4>
                                <span>'.$valdescription.'</span>
                            </a>
                        </div>' ;
                    }
                ?>
                
            </div>

        <?php
    }
}
?>
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
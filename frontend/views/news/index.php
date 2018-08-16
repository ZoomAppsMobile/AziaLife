<?php
$this->registerCssFile('/frontend/web/css/news/style.css');
?>
<div data-aos="fade-up" class="about-stock d-flex flex-column mt-5">
    <h3 class="text-uppercase mb-4">Новости</h3>
<?php
    $newflex=true;
    foreach ($models as $key) {
        $data = strtotime($key->dating);
        if(\Yii::$app->session->get('lang')=='ru'){
            $newtitle=$key->title;
            $newdescription=$key->description;
        } else if(\Yii::$app->session->get('lang')=='en'){
            $newtitle=$key->title_en;
            $newdescription=$key->description_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            $newtitle=$key->title_kz;
            $newdescription=$key->description_kz;
        }
        if($newflex){            
            echo '<div data-aos="fade-up" class="main d-flex justify-content-between">';
        }
?>
    <div data-aos="fade-up" class="main d-flex justify-content-between mt-5">
        <div class="news-block1 d-flex">
            <img class="" src="<?=$key->image?>" alt="">
            <div class="block-info">
                <h4 class="text-uppercase head-text"><?=$newtitle?></h4>
                <p class="pub-date"><?=date('d.m.Y', $data)?></p>
                <p class="block-info-text"><?=$newdescription?></p>
                <a class="more-info">Читать больше</a>
            </div>
        </div>
    </div>
    <?    if(!$newflex){
            echo '</div>';
        }
        if($newflex){
            $newflex=false;
        }else{
            $newflex=true;
        }
    }
     if(!$newflex){
            echo '</div>';
        }
?>
<?php
if(!$last){
        echo '<button data-aos="fade-up" class="old-news" id="newsbut" data-page="2">Ранние новости</button>';
    }
?>
</div>



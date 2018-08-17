<?php
$this->registerCssFile('/frontend/web/style_busines/style.css');
?>
<div data-aos="fade-up" class="about-stock d-flex flex-column mt-5">
    <h3 class="text-uppercase mb-4">
       Бизнесу
<!--        --><?php
//        if(count($blogs)>0){
//            foreach ($blogs as $key) {
//                if(\Yii::$app->session->get('lang')=='ru'){
//                    $keydes=$key->description;
//                    $keytitle=$key->title;
//                } else if(\Yii::$app->session->get('lang')=='en'){
//                    $keydes=$key->description_en;
//                    $keytitle=$key->title_en;
//                } else if(\Yii::$app->session->get('lang')=='kz'){
//                    $keydes=$key->description_kz;
//                    $keytitle=$key->title_kz;
//                }
//                echo '<div class="busines-customers-wrap"><a href="/business/'.$key->url.'">
//                    <img src="'.$key->thumb.'" alt="">
//                    <h4 class="text-uppercase font-weight-bold">'.$keytitle.'</h4>
//                    <div class="mgb">'.$keydes.' 
//                    </div></a>
//                </div>';
//            }
//        }
//        ?>
    </h3>

    <div class="main d-flex justify-content-between flex-md-row flex-column">
        <div class="row1 d-flex flex-column">
            <img src="/images/image1.png" alt="">
            <p class="text1 mt-4"><a href="/private-clients/compulsory_employee_insurance" class="text1">Обязательное страхование работника от несчастных случаев</a></p>
            <p class="text2">Социальная ответственность и обязанность работодателя</p>
        </div>

        <div class="row2">
            <img src="/images/image2.png" alt="">
            <p class="text1 mt-4"><a href="/private-clients/dgs" class="text1">Добровольное групповое страхование</a></p>
            <p class="text22">Лучший способ финансовой защиты сотрудников</p>
        </div>
    </div>
</div>
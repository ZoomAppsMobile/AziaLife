<?php
$this->registerCssFile('/frontend/web/css/doc1/style.css');
?>
<div class="link-anchors d-flex flex-md-row flex-column mt-4">
    <a href="">Главная <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">О компании <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Документы и публикации <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">Правила страхования</a>
</div>

<h3 class="text-uppercase mt-1 mt-md-5 mb-2 main-text font-weight-bold">ПРАВИЛА СТРАХОВАНИЯ</h3>

<div class="rules d-flex flex-column">
    <h4>В данном разделе Вы можете ознакомиться с действующие правилами страхования по видам страхования, с возможностью
        просмотра предыдущих редакций, внесенных изменений и дополнений</h4>

    <div data-aos="fade-up" class="rules-badges mt-4 d-flex flex-column align-items-center justify-content-center p-4 w-100">
        <div data-aos="fade-up" class="badges-row d-flex flex-column align-items-center justify-content-around w-100">
            <?php
                 
                foreach ($docs as $key) {
                if(\Yii::$app->session->get('lang')=='ru'){
                    $keyfile=$key->file;
                    $keytitle=$key->title;
                } else if(\Yii::$app->session->get('lang')=='en'){
                    $keyfile=$key->file_en;
                    $keytitle=$key->title_en;
                } else if(\Yii::$app->session->get('lang')=='kz'){
                    $keyfile=$key->file_kz;
                    $keytitle=$key->title_kz;
                }
                    echo '<a href="'.$keyfile.'" class="badge-pdf mt-4 d-flex align-items-center p-4">
                <img class="mr-4" src="/image/rules-download.png" alt="">
                <p class="text-center mt-2">'.$keytitle.'</p>
            </a>';
                }
            ?>
            
        </div>

    </div>
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
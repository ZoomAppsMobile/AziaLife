<?php
if(\Yii::$app->session->get('lang')=='ru'){
    $this->title="AsiaLife";
} else if(\Yii::$app->session->get('lang')=='en'){
    $this->title="AsiaLife";
} else if(\Yii::$app->session->get('lang')=='kz'){
    $this->title="AsiaLife";
}
?>
<link href="/css/style.css" rel="stylesheet">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
            $sl_i=0;
            $class='class="active"';
            foreach ($slider as $key) {
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$sl_i.'" '.$class.'></li>';
                $sl_i++;
                $class='';
            }
        ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <?php
            $sl_class=' active';
            foreach ($slider as $key) {

                if(\Yii::$app->session->get('lang')=='ru'){
                    $keytitle=$key->title;
                    $keydescription=$key->description;
                    $more="ПОДРОБНЕЕ";
                } else if(\Yii::$app->session->get('lang')=='en'){
                    $keytitle=$key->title_en;
                    $keydescription=$key->description_en;
                    $more="MORE";
                } else if(\Yii::$app->session->get('lang')=='kz'){
                    $keytitle=$key->title_kz;
                    $keydescription=$key->description_kz;
                    $more="ТОЛЫҒЫРАҚ";
                }

                echo '<div class="carousel-item'.$sl_class.'">
                    <img class="d-block w-100"
                         src="'.$key->image.'"
                         data-color="lightblue" alt='.$keytitle.'>
                    <div class="carousel-captions d-md-block">
                        <h5 class="text-uppercase">'.$keytitle.'</h5>
                        <p>'.$keydescription.'</p>
                        <button>'.$more.'</button>
                    </div>
                </div>';
                $sl_class='';
            }
        ?>
    </div>
</div>
<div class="products-mobile mt-4 d-flex d-md-none flex-column align-items-center">
    <img class="absolute-logo" src="/image/absolute-logo.png" alt="">
    <h3 data-aos="fade-up" class="text-uppercase text-center mb-3"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo 'СТРАХОВЫЕ ПРОДУКТЫ';
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo 'INSURANCE PRODUCTS';
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo 'Сақтандыру өнімдері';
            }
        ?></h3>
    <div data-aos="fade-up" class="item1 mb-2">
        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner1->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner1->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner1->title_kz;
            }
        ?> <br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner1->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner1->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner1->description_kz;
            }
        ?></span></h4>
    </div>
    <div data-aos="fade-up" class="item2 mb-2">
        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner2->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner2->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner2->title_kz;
            }
        ?><br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner2->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner2->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner2->description_kz;
            }
        ?></span></h4>
    </div>
    <div data-aos="fade-up" class="item3 mb-2 d-flex align-items-center justify-content-end pr-4">
        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner4->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner4->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner4->title_kz;
            }
        ?>
            <br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner4->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner4->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner4->description_kz;
            }
        ?></span></h4>
    </div>
    <div data-aos="fade-up" class="item4 mb-2">
        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner3->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner3->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner3->title_kz;
            }
        ?><br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner3->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner3->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner3->description_kz;
            }
        ?></span></h4>
    </div>
    <div data-aos="fade-up" class="item5 mb-2 d-flex flex-column justify-content-around w-100">
        <div class="item-inside  align-items-center justify-content-center d-flex">
            <img src="/image/products-item5.png" alt="">
            <h4 class="text-uppercase"><a href="/subject/strahovoy-sluchay" style="color:#9f074f;">Произошел страховой случай</a></h4>
        </div>
        <div class="item-inside  align-items-center justify-content-center my-2 d-flex">
            <img src="/image/products-item6.png" alt="">
            <h4 class="text-uppercase"><a href="/calculator" style="color:#9f074f;">КАЛЬКУЛЯТОР онлайн</a></h4>
        </div>
        <div class="item-inside  align-items-center justify-content-center d-flex">
            <img src="/image/products-item7.png" alt="">
            <h4 class="text-uppercase">Оформление договора страхования онлайн</h4>
        </div>
    </div>
</div>
<div class="products mt-4 d-md-flex d-none flex-column align-items-center">
    <img data-aos="fade-up" class="absolute-logo" src="/image/absolute-logo.png" alt="">
    <h3 data-aos="fade-up" class="text-uppercase text-center mb-3"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo 'СТРАХОВЫЕ ПРОДУКТЫ';
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo 'INSURANCE PRODUCTS';
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo 'Сақтандыру өнімдері';
            }
        ?></h3>
    <div class="d-flex flex-column">
        <div class="d-flex ">
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <div data-aos="fade-right" class="item1">
                        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner1->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner1->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner1->title_kz;
            }
        ?><br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner1->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner1->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner1->description_kz;
            }
        ?></span></h4>
                    </div>
                    <div data-aos="fade-right" class="item2">
                        <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner2->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner2->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner2->title_kz;
            }
        ?> <br/><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner2->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner2->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner2->description_kz;
            }
        ?></span></h4>
                    </div>
                </div>
                <div data-aos="fade-up" class="item3 d-flex align-items-center justify-content-end pr-4">
                    <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner4->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner4->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner4->title_kz;
            }
        ?>
                        <br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner4->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner4->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner4->description_kz;
            }
        ?></span></h4>
                </div>
            </div>
            <div data-aos="fade-left" class="item4">
                <h4 class="text-uppercase text-center"><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner3->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner3->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner3->title_kz;
            }
        ?>  <br><span><?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $banner3->description;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $banner3->description_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $banner3->description_kz;
            }
        ?></span></h4>
            </div>
        </div>
        <div data-aos="fade-up" class="item5 d-flex justify-content-around w-100">
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item5.png" alt="">
                <h4 class="text-uppercase"><a href="/subject/strahovoy-sluchay" style="color:#9f074f;">Произошел страховой случай</a></h4>
            </div>
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item6.png" alt="">
                <h4 class="text-uppercase"><a href="/calculator" style="color:#9f074f;">КАЛЬКУЛЯТОР онлайн</a></h4>
            </div>
            <div class="item-inside  align-items-center justify-content-center d-flex">
                <img src="/image/products-item7.png" alt="">
                <h4 class="text-uppercase">Оформление договора страхования онлайн</h4>
            </div>
        </div>
    </div>
</div>

<div class="news d-flex flex-column mt-5 align-items-center">
    <h3 data-aos="fade-up" class="mb-4 text-uppercase text-center">Новости компании</h3>
    <div data-aos="fade-up" class="carousel-wrap">
        <div class="owl-carousel">

            <?php
                foreach ($news as $key) {
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
                   echo '<div class="item"><img src="'.$key->image.'">
                <h4 class="text-uppercase mt-3">'.$newtitle.'</h4>
                <p>'.$key->dating.'7</p>
                <h6>'.$newdescription.'</h6>
            </div>';
                }
            ?>

        </div>
    </div>
</div>





<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
            //disable: window.innerWidth < 768
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,

            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            },
            nav: true
        })

        $('.carousel').carousel({
            interval: 3000,
            pause: "false"
        });
    });
</script>
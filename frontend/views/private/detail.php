<?php
use backend\models\Widget;
use backend\models\Widgetitem;
use backend\models\Tableitem;
$this->registerCssFile('/frontend/web/css/privatedetail/style.css');
?>
<div class="link-anchors d-flex my-4">
    <a href="/"><?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo "Главная";
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo "Main";
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo "Басты бет";
            }
            ?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="/private-clients"><?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo "Частным клиентам";
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo "Private clients";
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo "Жеке клиент";
            }
            ?> <img src="/image/link-arrow-right.png" alt=""></a>
    <a href="">
        <?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo $blog->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $blog->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $blog->title_kz;
            }
            ?>
    </a>
</div>
<div class="about-stock d-flex flex-column">
    <h3 data-aos="fade-up" class="text-uppercase mb-4"><?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo $blog->title;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $blog->title_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $blog->title_kz;
            }
            ?></h3>
    <div data-aos="fade-up" class="d-flex flex-md-row flex-column">
        <img class="main-pic" src="<?=$blog->image?>" alt="">
        <div class="ml-3 d-flex flex-column">
            <?php

                if(count($blogtags)>0){
                    echo '<div class="pink-links align-items-md-center mt-4 mt-md-0 d-flex flex-md-row flex-column">';
                    foreach ($blogtags as $tagkey) {
                        if(\Yii::$app->session->get('lang')=='ru'){
                            $tagkeytitle=$tagkey->title;
                            if(isset($tagkey->file)){
                                $tagkeyurl=$tagkey->file;
                            }else{
                                $tagkeyurl=$tagkey->url;
                            }
                        } else if(\Yii::$app->session->get('lang')=='en'){
                            $tagkeytitle=$tagkey->title_en;
                            if(isset($tagkey->file_en)){
                                $tagkeyurl=$tagkey->file_en;
                            }else{
                                $tagkeyurl=$tagkey->url;
                            }
                        } else if(\Yii::$app->session->get('lang')=='kz'){
                            $tagkeytitle=$tagkey->title_kz;
                            if(isset($tagkey->file_kz)){
                                $tagkeyurl=$tagkey->file_kz;
                            }else{
                                $tagkeyurl=$tagkey->url;
                            }
                        }
                        echo ' 
                            <a class="text-uppercase" target="_blank" href="'.$tagkeyurl.'"><img class="mr-3" src="'.$tagkey->icon.'" alt="">'.$tagkeytitle.'</a>
                        ';
                    }
                    echo '</div>';
                }

            ?>
           
            <?php
             if(\Yii::$app->session->get('lang')=='ru'){
                echo $blog->content;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $blog->content_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $blog->content_kz;
            }
            ?>
        </div>
    </div>
</div>
<?php
if(count($privatewidget)>0){
    foreach ($privatewidget as $wkey) {
        $widget=Widget::findOne($wkey->wid);
        if(\Yii::$app->session->get('lang')=='ru'){
            $widgettitle=$widget->title; 
        } else if(\Yii::$app->session->get('lang')=='en'){
            $widgettitle=$widget->title_en;
        } else if(\Yii::$app->session->get('lang')=='kz'){
            $widgettitle=$widget->title_kz; 
        }
        if($widget->type==0){
            echo '<div class="your-profit d-flex flex-column my-4">
                    <h3 data-aos="fade-up" class="text-uppercase my-3">'.$widgettitle.'</h3>
                    <div data-aos="fade-up" class="items d-flex flex-md-row flex-column align-items-center justify-content-center p-3">
                        ';
                    $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
                    foreach ($widgetitem as $walue) {
                        if(\Yii::$app->session->get('lang')=='ru'){
                            $widgetitemtitle=$walue->title; 
                        } else if(\Yii::$app->session->get('lang')=='en'){
                            $widgetitemtitle=$walue->title_en;
                        } else if(\Yii::$app->session->get('lang')=='kz'){
                            $widgetitemtitle=$walue->title_kz; 
                        }
                        if(isset($walue->icon)){
                           echo '<div data-aos="fade-up" class="item d-flex flex-column align-items-center justify-content-center">
                                <img src="'.$walue->icon.'" alt="">
                                <h5 class="text-uppercase text-center">'.$widgetitemtitle.'</h5>
                            </div>';
                        }else{
                            echo '<div data-aos="fade-up" class="item d-flex flex-column align-items-center justify-content-center">
                                <h5 class="text-uppercase text-center">'.$widgetitemtitle.'</h5>
                            </div>';
                        }
                    }
            echo         '</div>
                </div>';
        }else if($widget->type==1){
            echo '<div data-aos="fade-up" class="accordion accordion-second mt-5" id="accordion'.$widget->id.'">
                        <div class="accordion-group">
                            <div class="accordion-heading accordion-heading2" data-toggle="collapse" data-parent="#accordion'.$widget->id.'"
                                 href="#collapseDiv'.$widget->id.'">
                                <a class="accordion-toggle">
                                    '.$widgettitle.'
                                </a>
                            </div>
                            <div id="collapseDiv'.$widget->id.'" class="accordion-body collapse">
                                <div class="accordion-inner d-flex flex-column">';
                                $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
                                foreach ($widgetitem as $walue) {
                                    if(\Yii::$app->session->get('lang')=='ru'){
                                        $widgetitem1=$walue->title;
                                        $widgetitem2=$walue->description;  
                                    } else if(\Yii::$app->session->get('lang')=='en'){
                                        $widgetitem1=$walue->title_en;
                                        $widgetitem2=$walue->description_en; 
                                    } else if(\Yii::$app->session->get('lang')=='kz'){
                                        $widgetitem1=$walue->title_kz;
                                        $widgetitem2=$walue->description_kz;  
                                    }
                                    echo '<div class="first-table d-flex flex-column mt-5">
                                        <div class="d-flex align-items-center">
                                            <h5 class="text-uppercase p-3 mb-0 w-50">'.$widgetitem1.'</h5>
                                            <h5 class="text-uppercase p-3 mb-0 w-50">'.$widgetitem2.'</h5>
                                        </div>';
                                        $tableitem=Tableitem::find()->where(['itemid'=>$walue->id])->orderBy(['order' => SORT_ASC])->all();
                                        foreach ($tableitem as $tableitemkey) {
                                            if(\Yii::$app->session->get('lang')=='ru'){
                                                $table1=$tableitemkey->names;
                                                $table2=$tableitemkey->value;
                                            } else if(\Yii::$app->session->get('lang')=='en'){
                                                $table1=$tableitemkey->names_en;
                                                $table2=$tableitemkey->value_en;
                                            } else if(\Yii::$app->session->get('lang')=='kz'){
                                                $table1=$tableitemkey->names_kz;
                                                $table2=$tableitemkey->value_kz;
                                            }
                                            echo '<div class="d-flex align-items-center">
                                                <p class="mb-0 p-3 w-50">'.$table1.'</p>
                                                <p class="mb-0 p-3 w-50">'.$table2.'</p>
                                            </div>';
                                        }
                                echo '</div>';
                                }
                                    
            echo '              </div>
                            </div>
                        </div>
                    </div>';
        }else if($widget->type==2){
            echo '<div data-aos="fade-up" class="accordion accordion-first  mt-5" id="accordion'.$widget->id.'">
                    <div class="accordion-group">
                        <div class="accordion-heading accordion-heading1" data-toggle="collapse" data-parent="#accordion'.$widget->id.'"
                             href="#collapseDiv'.$widget->id.'">
                            <a class="accordion-toggle">
                                '.$widgettitle.'
                            </a>
                        </div>
                        <div id="collapseDiv'.$widget->id.'" class="accordion-body collapse p-3">
                            <div class="accordion-inner d-flex flex-column">';
                                 $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
                                foreach ($widgetitem as $walue) {
                                    if(\Yii::$app->session->get('lang')=='ru'){
                                        $widgetitemtitle=$walue->title; 
                                    } else if(\Yii::$app->session->get('lang')=='en'){
                                        $widgetitemtitle=$walue->title_en;
                                    } else if(\Yii::$app->session->get('lang')=='kz'){
                                        $widgetitemtitle=$walue->title_kz; 
                                    }
                                    echo '<p class="d-flex align-items-center"><span>•</span>'.$widgetitemtitle.'</p>';
                                    }
                         echo   '</div>
                        </div>
                    </div>
                </div>' ;
        }else if($widget->type==3){
            echo '<div class="mechanism d-flex flex-column mt-5">
                <h3 data-aos="fade-up" class="text-uppercase mb-3">'.$widgettitle.'</h3>';
                $widgetitem=Widgetitem::find()->where(['wid'=>$widget->id])->all();
                $check=100;        
                foreach ($widgetitem as $walue) {
                    if(\Yii::$app->session->get('lang')=='ru'){
                        $widgetitemtitle=$walue->title; 
                        $widgetitemdescription=$walue->description; 
                    } else if(\Yii::$app->session->get('lang')=='en'){
                        $widgetitemtitle=$walue->title_en;
                        $widgetitemdescription=$walue->description_en; 
                    } else if(\Yii::$app->session->get('lang')=='kz'){
                        $widgetitemtitle=$walue->title_kz; 
                        $widgetitemdescription=$walue->description_kz; 
                    }
                    if($check==100){
                        echo '<div class="d-flex flex-md-row flex-column justify-content-between align-items-center">';
                        $check=0; 
                    }else if($check==0){
                        echo '<div class="d-flex flex-md-row flex-column justify-content-between align-items-center mt-md-3 mt-0">';
                    }
                    echo   '<div data-aos="fade-up" class="item d-flex flex-column py-1 px-2 mt-3 mt-md-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="'.$walue->icon.'" alt="">
                                        <h5 class="text-uppercase ml-2">'.$widgetitemtitle.'</h5>
                                    </div>
                                    <h4>'.$walue->order.'</h4>
                                </div>
                                <p class="mt-3">
                                    '.$widgetitemdescription.'
                                </p>
                            </div>';
                    $check++;
                    if($check==3){
                        echo '</div>'; 
                        $check=0;                                  
                    }
                }
                if($check!=3){
                    echo '</div>';                                   
                }
        }
    }
}
?>
<div data-aos="fade-up" class="button-with-text d-flex flex-column align-items-center my-5">
    <button>оформить сейчас</button>
    <p class="text-left w-100">
        <?php
            if(\Yii::$app->session->get('lang')=='ru'){
                echo $blog->note;
            } else if(\Yii::$app->session->get('lang')=='en'){
                echo $blog->note_en;
            } else if(\Yii::$app->session->get('lang')=='kz'){
                echo $blog->note_kz;
            }
        ?>
    </p>
</div>
<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
        });     
    });
</script>
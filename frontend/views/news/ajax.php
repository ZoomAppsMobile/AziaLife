
<?php
    $newflex=true;
    foreach ($models as $key) {
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
            echo '<div class=" d-flex main-text justify-space-around my-md-5">
                    <div class="wrap-news d-flex flex-md-row flex-column justify-content-between">';
        }
        echo '<div class="news-one d-flex flex-md-row flex-column justify-content-between">
            <div class="news-img-wr">
                <img src="'.$key->image.'" alt="">
            </div>
            <div class="news-text-wr">
                <h4 class="text-uppercase font-weight-bold">'.$newtitle.'</h4>
                <span>'.$key->dating.'</span>
                <p>'.$newdescription.'</p>
                <a href=""><p>Читать далее</p></a>
            </div>
        </div>';
        if(!$newflex){
            echo '</div>
            </div>';
        }
        if($newflex){
            $newflex=false;
        }else{
            $newflex=true;
        }
    }
     if(!$newflex){
            echo '</div>
            </div>';
        }
?>


<script type="text/javascript">
    jQuery(document).ready(function($){
        <?php
            if($last){
                    echo '$("#newsbut").remove();';
                }
                else{
            ?>

        $("#newsbut").click(function() {     
            var page = $(this).data('page'); 
            var newdata=$(this).data('page')+1;   
            $(this).data('page', newdata)        
            $.ajax({  
                type: "POST",  
                url: "/news/page/",  
                data: {page: page},  
                success: function(html){                 
                   $(".allnews").append(html);
                }  
            });  
            return false;  
        });
        <?php } ?>
    });
</script>
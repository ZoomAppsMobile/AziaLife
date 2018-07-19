<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $jsOptions = array(
//    'position' => \yii\web\View::POS_HEAD
//    );
    public $css = [
        'css/rstyle.css',
        'stylesheets/style.css',
        'stylesheets1/style.css',
        'stylesheets2/style.css',
        'stylesheets3/style.css',
        'stylesheets4/style.css',
        'stylesheets5/style.css',
        'stylesheets6/style.css',
        'stylesheets7/style.css',
        'stylesheets8/style.css',
        'stylesheets9/style.css',
        'stylesheets10/style.css',
        'css/style.css',
        'css/normalize.css',
        'css/my.css',
    ];
    public $js = [
        'libs/jquery/dist/jquery.min.js',
        'https://unpkg.com/popper.js/dist/umd/popper.min.js',
        'libs/bootstrap/dist/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        'https://use.fontawesome.com/826a7e3dce.js',
        'js/script.js',
        'js/main.js',
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];


}
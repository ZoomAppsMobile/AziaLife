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
    public $jsOptions = array(
    'position' => \yii\web\View::POS_HEAD
);
    public $css = [
        'css/style.css',
        'css/normalize.css',
    ];
    public $js = [
        'libs/jquery/dist/jquery.min.js',
        'libs/bootstrap/dist/js/bootstrap.min.js',
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];


}
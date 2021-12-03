<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/lightbox.css',
        'css/main.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/jquery.countTo.js',
        'js/bootstrap.min.js',
        'js/lightbox.min.js',
        'js/wow.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}

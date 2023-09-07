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
        'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css',
        'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,900;1,300;1,400;1,500;1,600;1,700&display=swap',
//        'https://fonts.googleapis.com',
//        'https://fonts.gstatic.com',

        'css/bootstrap-grid.min.css',
        'css/loading-bar.min.css',
        'css/mobile.css',
        'css/main.min.css',
        'css/site.css',
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
        'js/libs.min.js',
        'js/loading-bar.min.js',
        'js/main.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}

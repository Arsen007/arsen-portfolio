<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/responsive.css',
        'css/jasny-bootstrap.min.css',
        'fonts/font-awesome/font-awesome.min.css',
        'extras/animate.css',
        'extras/lightbox.css',
        'extras/owl/owl.carousel.css',
        'extras/owl/owl.theme.css',
        'extras/owl/owl.transitions.css',
    ];
    public $js = [
        'js/wow.js',
        'js/main.js',
        'js/smooth-scroll.js',
        'js/jasny-bootstrap.min.js',
        'js/jquery.counterup.min.js',
        'js/waypoints.min.js',
        'js/circle-progress.js',
        'js/owl.carousel.js',
        'js/lightbox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\BootstrapAsset',
        'app\assets\FancyBoxAsset',
        'app\assets\MasonryAsset',
    ];
}

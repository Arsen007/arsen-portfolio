<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@bower/fancybox/source';
    public $css = [
        'jquery.fancybox.css',
        'helpers/jquery.fancybox-buttons.css',
        'helpers/jquery.fancybox-thumbs.css',
    ];
    public $js = [
        'jquery.fancybox.js',
        'helpers\jquery.fancybox-buttons.js',
        'helpers\jquery.fancybox-media.js',
        'helpers\jquery.fancybox-thumbs.js',
    ];
}

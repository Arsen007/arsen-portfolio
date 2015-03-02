<?php

namespace app\assets;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/masonry/dist';
    public $css = [

    ];
    public $js = [
        'masonry.pkgd.min.js',
    ];
}

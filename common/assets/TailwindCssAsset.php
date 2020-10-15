<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class TailwindCssAsset extends AssetBundle
{
    public $sourcePath = '@common/dist';

    public $css = [
        'tailwind.css',
    ];

    public $depends = [
        YiiAsset::class,
    ];
}

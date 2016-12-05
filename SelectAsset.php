<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class SelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/select2/css/core.css',
    ];
    public $js = [
        'vendor/plugins/select2/select2.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
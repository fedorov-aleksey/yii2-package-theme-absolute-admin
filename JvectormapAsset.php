<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class JvectormapAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [

    ];
    public $js = [
        'vendor/plugins/jvectormap/jquery.jvectormap.min.js',
        'vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
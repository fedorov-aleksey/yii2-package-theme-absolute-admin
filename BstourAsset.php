<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class BstourAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/bstour/bootstrap-tour.css',
    ];
    public $js = [
        'vendor/plugins/bstour/bootstrap-tour.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
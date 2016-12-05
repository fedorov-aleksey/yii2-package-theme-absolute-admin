<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class CollorpickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css',
    ];
    public $js = [
        'vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
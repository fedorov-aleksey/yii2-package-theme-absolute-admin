<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class MapplicAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/mapplic/mapplic/mapplic.css',
    ];
    public $js = [
        'vendor/plugins/mapplic/js/hammer.js',
        'vendor/plugins/mapplic/mapplic/mapplic.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
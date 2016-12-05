<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class HighlightAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/highlight/styles/googlecode.css',
        'vendor/plugins/highlight/styles/github.css',
    ];
    public $js = [
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
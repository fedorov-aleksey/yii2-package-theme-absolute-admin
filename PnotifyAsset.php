<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class PnotifyAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
    ];
    public $js = [
        'vendor/plugins/pnotify/pnotify.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
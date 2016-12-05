<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/summernote/summernote.css',
    ];
    public $js = [
        'vendor/plugins/summernote/summernote.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class TagsinputAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [

    ];
    public $js = [
        'vendor/plugins/tagsinput/tagsinput.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
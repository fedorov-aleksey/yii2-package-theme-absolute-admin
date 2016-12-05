<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class TagmanagerAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/tagmanager/tagmanager.css',
    ];
    public $js = [
        'vendor/plugins/tagmanager/tagmanager.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
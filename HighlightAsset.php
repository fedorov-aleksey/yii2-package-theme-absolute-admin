<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class HighlightAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fedorov-aleksey/yii2-package-theme-absolute-admin/';
    public $basePath = '@webroot';

    public $css = [
        'plugins/highlight/styles/googlecode.css',
        'plugins/highlight/styles/github.css',
    ];
    public $js = [
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
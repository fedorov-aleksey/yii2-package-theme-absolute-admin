<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class PnotifyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fedorov-aleksey/yii2-package-theme-absolute-admin/';
    public $basePath = '@webroot';

    public $css = [
    ];
    public $js = [
        'plugins/pnotify/pnotify.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
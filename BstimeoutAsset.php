<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class BstimeoutAsset extends AbsoluteAsset
{
    public $sourcePath = '@vendor/fav/yii2-package-theme-absolute-admin/';


    public $css = [

    ];
    public $js = [
        'plugins/bstimeout/bs-timeout.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
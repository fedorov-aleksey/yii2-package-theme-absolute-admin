<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class SelectAsset extends AssetBundle
{



    public $css = [
        'plugins/select2/css/core.css',
    ];
    public $js = [
        'plugins/select2/select2.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
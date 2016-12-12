<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class SlickAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/slick/slick.css',
    ];
    public $js = [
        'plugins/slick/slick.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
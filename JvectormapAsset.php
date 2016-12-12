<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class JvectormapAsset extends AbsoluteAsset
{



    public $css = [

    ];
    public $js = [
        'plugins/jvectormap/jquery.jvectormap.min.js',
        'plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
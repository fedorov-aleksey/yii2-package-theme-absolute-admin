<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class BstourAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/bstour/bootstrap-tour.css',
    ];
    public $js = [
        'plugins/bstour/bootstrap-tour.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
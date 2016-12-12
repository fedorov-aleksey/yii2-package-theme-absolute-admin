<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MaxlenghtAsset extends AssetBundle
{



    public $css = [

    ];
    public $js = [
        'plugins/maxlength/bootstrap-maxlength.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class CollorpickerAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/colorpicker/css/bootstrap-colorpicker.min.css',
    ];
    public $js = [
        'plugins/colorpicker/js/bootstrap-colorpicker.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class TabdropAsset extends AssetBundle
{



    public $css = [
    ];
    public $js = [
        'plugins/tabdrop/bootstrap-tabdrop.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class HolderAsset extends AssetBundle
{



    public $css = [
    ];
    public $js = [
        'plugins/holder/holder.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
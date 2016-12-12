<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MapplicAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/mapplic/mapplic/mapplic.css',
    ];
    public $js = [
        'plugins/mapplic/js/hammer.js',
        'plugins/mapplic/mapplic/mapplic.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
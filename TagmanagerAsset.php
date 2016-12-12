<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class TagmanagerAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/tagmanager/tagmanager.css',
    ];
    public $js = [
        'plugins/tagmanager/tagmanager.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
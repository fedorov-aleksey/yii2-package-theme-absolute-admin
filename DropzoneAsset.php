<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class DropzoneAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/dropzone/css/dropzone.css',
    ];
    public $js = [
        'plugins/dropzone/dropzone.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
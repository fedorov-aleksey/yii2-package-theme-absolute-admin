<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class SummernoteAsset extends AbsoluteAsset
{



    public $css = [
        'plugins/summernote/summernote.css',
    ];
    public $js = [
        'plugins/summernote/summernote.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class AdmintoolsAsset extends AssetBundle
{



    public $css = [
        'assets/admin-tools/admin-forms/css/admin-forms.css',
    ];
    public $js = [
        'assets/admin-tools/admin-forms/js/additional-methods.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
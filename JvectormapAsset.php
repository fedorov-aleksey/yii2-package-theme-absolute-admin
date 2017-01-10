<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class JvectormapAsset extends AssetBundle
{



    public $css = [

    ];
    public $js = [
        'jquery.jvectormap.min.js',
        'assets/jquery-jvectormap-us-lcc-en.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/jvectormap';
        parent::init();
    }
}
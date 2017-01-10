<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:00
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class AnimatePluginCss extends AssetBundle
{
    public $css = ['animate.min.css'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/animate';
        parent::init();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:03
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class FancytreePluginCss extends AssetBundle
{
    public $css = ['skin-win8/ui.fancytree.min.css',];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/fancytree';
        parent::init();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:05
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class LaddaPluginCss extends AssetBundle
{
    public $css = ['ladda.min.css',];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/ladda';
        parent::init();
    }

}
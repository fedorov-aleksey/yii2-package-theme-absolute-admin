<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 13:12
 */

namespace fav\AbsoluteAdmin;
use yii\web\AssetBundle;

class FootablePluginCss extends AssetBundle
{
    public $css = [
        'css/footable.core.min.css',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/footable';
        parent::init();
    }
}
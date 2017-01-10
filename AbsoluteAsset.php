<?php

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AbsoluteAsset extends AssetBundle
{

    public $basePath = '@webroot';

    public $js = [
        'main.js',
        'utility/utility.js',
        'demo/demo.js',
        'demo/widgets.js',
    ];
    public $depends = [
        'fav\AbsoluteAdmin\AbsolutePlugins',
        'fav\AbsoluteAdmin\SkinAssetCss',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/assets/js';
        parent::init();
    }
}

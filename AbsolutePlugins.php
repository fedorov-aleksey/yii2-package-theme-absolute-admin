<?php

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AbsolutePlugins extends AssetBundle
{

    public $basePath = '@webroot';

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteDepend',
        'fav\AbsoluteAdmin\AnimatePluginCss',
        'fav\AbsoluteAdmin\FancytreePluginCss',
        'fav\AbsoluteAdmin\LaddaPluginCss',
        'fav\AbsoluteAdmin\MagnificPlugin',
        'fav\AbsoluteAdmin\MomentPluginJs',
        'fav\AbsoluteAdmin\ValidatePluginJs',
        'fav\AbsoluteAdmin\JquerymaskPluginJs',
    ];
}

<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 13:13
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class NestablePluginCss extends AssetBundle
{

    public $css = [
        'nestable.css',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/nestable';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['nestable' . $type . '.css'];
    }
}
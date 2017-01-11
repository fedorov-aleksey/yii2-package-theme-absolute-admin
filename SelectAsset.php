<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class SelectAsset extends AssetBundle
{



    public $css = [
        'css/core.css',
    ];
    public $js = [
        'select2.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/select2';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['css/core' . $type . '.css'];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class SlickAsset extends AssetBundle
{



    public $css = [
        'slick.css',
    ];
    public $js = [
        'slick.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/slick';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'slick' . $type . '.css',
        ];
    }
}
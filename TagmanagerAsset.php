<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class TagmanagerAsset extends AssetBundle
{



    public $css = [
        'tagmanager.css',
    ];
    public $js = [
        'tagmanager.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/tagmanager';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'tagmanager' . $type . '.css',
        ];
    }
}
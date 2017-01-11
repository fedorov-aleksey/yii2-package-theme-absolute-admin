<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class HighlightAsset extends AssetBundle
{



    public $css = [
        'styles/googlecode.css',
        'styles/github.css',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/highlight';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'styles/googlecode' . $type . '.css',
            'styles/github' . $type . '.css',
        ];
    }

}
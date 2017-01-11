<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MapplicAsset extends AssetBundle
{



    public $css = [
        'mapplic/mapplic.css',
    ];
    public $js = [
        'js/hammer.js',
        'mapplic/mapplic.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/mapplic';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['mapplic/mapplic' . $type . '.css'];
    }
}
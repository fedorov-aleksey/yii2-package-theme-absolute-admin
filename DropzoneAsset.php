<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class DropzoneAsset extends AssetBundle
{



    public $css = [
        'css/dropzone.css',
    ];
    public $js = [
        'dropzone.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/dropzone';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['css/dropzone' . $type . '.css'];
    }
}
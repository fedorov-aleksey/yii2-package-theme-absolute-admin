<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:35
 */

namespace fav\AbsoluteAdmin;

use  yii\web\AssetBundle;

class SkinAssetCss extends AssetBundle
{
    public $css = [
        'default_skin/css/theme.css',
        'fonts/zocial/zocial.css',
        'fonts/glyphicons-pro/glyphicons-pro.css',
        'fonts/icomoon/icomoon.css',
        'fonts/iconsweets/iconsweets.css',
        'fonts/octicons/octicons.css',
        'fonts/stateface/stateface.css',
        'fonts/google/font.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/assets/skin';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'default_skin/css/theme' . $type . '.css',
            'fonts/zocial/zocial' . $type . '.css',
            'fonts/glyphicons-pro/glyphicons-pro' . $type . '.css',
            'fonts/icomoon/icomoon' . $type . '.css',
            'fonts/iconsweets/iconsweets' . $type . '.css',
            'fonts/octicons/octicons' . $type . '.css',
            'fonts/google/font' . $type . '.css',
            'fonts/stateface/stateface' . $type . '.css',
        ];
    }
}
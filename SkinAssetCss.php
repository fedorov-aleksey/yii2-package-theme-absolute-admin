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
    }
}
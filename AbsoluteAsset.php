<?php

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AbsoluteAsset extends AssetBundle
{

    public $basePath = '@webroot';

    public $css = [
        'assets/skin/default_skin/css/theme.css',
        'assets/fonts/zocial/zocial.css',
        'assets/fonts/glyphicons-pro/glyphicons-pro.css',
        'assets/fonts/icomoon/icomoon.css',
        'assets/fonts/iconsweets/iconsweets.css',
        'assets/fonts/octicons/octicons.css',
        'assets/fonts/stateface/stateface.css',
        'assets/fonts/google/font.css',
        'plugins/animate/animate.min.css',
        'plugins/fancytree/skin-win8/ui.fancytree.min.css',
        'plugins/ladda/ladda.min.css',
        'plugins/magnific/magnific-popup.css',
    ];
    public $js = [
        'assets/js/main.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'assets/js/demo/widgets.js',
        'plugins/moment/moment.min.js',
        'plugins/validate/jquery.validate.js',
        'plugins/jquerymask/jquery.maskedinput.min.js',
        'plugins/magnific/jquery.magnific-popup.js',
//        'plugins/map/gmaps.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\widgets\ActiveFormAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\jui\JuiAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';
        parent::init();
    }
}

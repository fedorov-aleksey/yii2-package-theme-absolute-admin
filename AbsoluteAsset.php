<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AbsoluteAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
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
        'vendor/plugins/animate/animate.min.css',
        'vendor/plugins/fancytree/skin-win8/ui.fancytree.min.css',
        'vendor/plugins/ladda/ladda.min.css',
        'vendor/plugins/magnific/magnific-popup.css',
    ];
    public $js = [
        'assets/js/main.js',
        'vendor/plugins/moment/moment.min.js',
        'assets/js/utility/utility.js',
        'assets/js/demo/demo.js',
        'vendor/plugins/validate/jquery.validate.js',
        'vendor/plugins/jquerymask/jquery.maskedinput.min.js',
        'vendor/plugins/magnific/jquery.magnific-popup.js',
        'assets/js/demo/widgets.js',
//        'vendor/plugins/map/gmaps.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\widgets\ActiveFormAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\jui\JuiAsset'
    ];
}

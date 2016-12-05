<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class CharsAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/c3charts/c3.min.css',
    ];
    public $js = [
        'assets/js/demo/charts/d3.js',
        'assets/js/demo/charts/flot.js',
        'assets/js/demo/charts/highcharts.js',
        'vendor/plugins/c3charts/c3.min.js',
        'vendor/plugins/c3charts/d3.min.js',
        'vendor/plugins/highcharts/highcharts.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
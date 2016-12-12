<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class CharsAsset extends AssetBundle
{



    public $css = [
        'plugins/c3charts/c3.min.css',
    ];
    public $js = [
        'assets/js/demo/charts/d3.js',
        'assets/js/demo/charts/flot.js',
        'assets/js/demo/charts/highcharts.js',
        'plugins/c3charts/c3.min.js',
        'plugins/c3charts/d3.min.js',
        'plugins/highcharts/highcharts.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
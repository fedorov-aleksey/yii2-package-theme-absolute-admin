<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class DateAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/daterange/daterangepicker.css',
        'vendor/plugins/datepicker/css/bootstrap-datetimepicker.css',
    ];
    public $js = [
        'vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js',
        'vendor/plugins/daterange/daterangepicker.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
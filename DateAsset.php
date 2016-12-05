<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class DateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fedorov-aleksey/yii2-package-theme-absolute-admin/';
    public $basePath = '@webroot';

    public $css = [
        'plugins/daterange/daterangepicker.css',
        'plugins/datepicker/css/bootstrap-datetimepicker.css',
    ];
    public $js = [
        'plugins/datepicker/js/bootstrap-datetimepicker.min.js',
        'plugins/daterange/daterangepicker.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
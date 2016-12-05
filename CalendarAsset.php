<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class CalendarAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/fullcalendar/fullcalendar.min.css',
    ];
    public $js = [
        'vendor/plugins/fullcalendar/fullcalendar.min.js',
        'vendor/plugins/fullcalendar/lib/moment.min.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
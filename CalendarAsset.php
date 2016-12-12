<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class CalendarAsset extends AssetBundle
{



    public $css = [
        'plugins/fullcalendar/fullcalendar.min.css',
    ];
    public $js = [
        'plugins/fullcalendar/fullcalendar.min.js',
        'plugins/fullcalendar/lib/moment.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
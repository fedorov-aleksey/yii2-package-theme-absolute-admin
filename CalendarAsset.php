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
        'fullcalendar.min.css',
    ];
    public $js = [
        'fullcalendar.min.js',
        'lib/moment.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/fullcalendar';
        parent::init();
    }
}
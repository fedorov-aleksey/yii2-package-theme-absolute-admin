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



    public $css = [
        'css/bootstrap-datetimepicker.css',
    ];
    public $js = [
        'js/bootstrap-datetimepicker.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/datepicker';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['css/bootstrap-datetimepicker' . $type . '.css'];
    }    
}
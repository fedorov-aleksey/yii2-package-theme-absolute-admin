<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 11.01.17
 * Time: 11:59
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class DaterangeAsset extends AssetBundle
{
    public $css = [
        'daterangepicker.css',
    ];
    public $js = [
        'daterangepicker.min.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/daterange';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = ['daterangepicker' . $type . '.css'];
    }
}
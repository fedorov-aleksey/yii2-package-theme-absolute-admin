<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:59
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class HighchartsAsset extends AssetBundle
{
    public $js = [
        'highcharts.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/highcharts';
        parent::init();
    }
}
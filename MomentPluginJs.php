<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:41
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MomentPluginJs extends AssetBundle
{
    public $js = [
        'moment.min.js',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/moment';
        parent::init();
    }
}
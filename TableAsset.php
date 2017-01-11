<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class TableAsset extends AssetBundle
{


    public $css = [
        'media/css/dataTables.plugins.css',
        'media/css/dataTables.bootstrap.css',
        'extensions/Editor/css/dataTables.editor.css',
        'extensions/ColReorder/css/dataTables.colReorder.min.css',
    ];
    public $js = [
        'media/js/jquery.dataTables.js',
        'media/js/dataTables.bootstrap.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset',
        'fav\AbsoluteAdmin\XedittablePlugin',
        'fav\AbsoluteAdmin\NestablePluginCss',
        'fav\AbsoluteAdmin\FootablePluginCss',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/datatables';
        parent::init();
        $type = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'media/css/dataTables.plugins' . $type . '.css',
            'media/css/dataTables.bootstrap' . $type . '.css',
            'extensions/Editor/css/dataTables.editor' . $type . '.css',
            'extensions/ColReorder/css/dataTables.colReorder.min.css',
        ];
    }
}
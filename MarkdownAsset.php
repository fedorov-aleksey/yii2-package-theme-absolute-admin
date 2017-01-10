<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MarkdownAsset extends AssetBundle
{



    public $css = [

    ];
    public $js = [
        'bootstrap-markdown.js',
        'markdown.js',
        'to-markdown.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/markdown';
        parent::init();
    }
}
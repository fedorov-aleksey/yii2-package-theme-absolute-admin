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
        'plugins/markdown/bootstrap-markdown.js',
        'plugins/markdown/markdown.js',
        'plugins/markdown/to-markdown.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
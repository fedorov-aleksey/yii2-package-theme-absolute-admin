<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class MarkdownAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [

    ];
    public $js = [
        'vendor/plugins/markdown/bootstrap-markdown.js',
        'vendor/plugins/markdown/markdown.js',
        'vendor/plugins/markdown/to-markdown.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
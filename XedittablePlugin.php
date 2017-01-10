<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 13:10
 */

namespace fav\AbsoluteAdmin;
use yii\web\AssetBundle;

class XedittablePlugin extends AssetBundle
{
    public $css = [
        'css/bootstrap-editable.css',
        'inputs/address/address.css',
        'inputs/typeaheadjs/lib/typeahead.js-bootstrap.css',
    ];
    public $js = [
        'js/bootstrap-editable.min.js',
        'inputs/address/address.js',
        'inputs/typeaheadjs/lib/typeahead.js',
        'inputs/typeaheadjs/typeaheadjs.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/xeditable';
        parent::init();
    }
}
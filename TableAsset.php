<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 09.08.16
 * Time: 10:07
 */

namespace backend\assets;

use yii\web\AssetBundle;

class TableAsset extends AssetBundle
{
    public $sourcePath = '@bower/absoluteAdmin/theme/';
    public $basePath = '@webroot';

    public $css = [
        'vendor/plugins/datatables/media/css/dataTables.plugins.css',
        'vendor/plugins/datatables/media/css/dataTables.bootstrap.css',
        'vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css',
        'vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css',
        'vendor/plugins/nestable/nestable.css',
        'vendor/plugins/xeditable/css/bootstrap-editable.css',
        'vendor/plugins/xeditable/inputs/address/address.css',
        'vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js-bootstrap.css',
        'vendor/plugins/footable/css/footable.core.min.css',
    ];
    public $js = [
        'vendor/plugins/datatables/media/js/jquery.dataTables.js',
        'vendor/plugins/datatables/media/js/dataTables.bootstrap.js',
        'vendor/plugins/xeditable/js/bootstrap-editable.min.js',
        'vendor/plugins/xeditable/inputs/address/address.js',
        'vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js',
        'vendor/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js',
    ];

    public $depends = [
        'backend\assets\AbsoluteAsset'
    ];
}
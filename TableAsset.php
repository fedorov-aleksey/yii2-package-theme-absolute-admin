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
        'plugins/datatables/media/css/dataTables.plugins.css',
        'plugins/datatables/media/css/dataTables.bootstrap.css',
        'plugins/datatables/extensions/Editor/css/dataTables.editor.css',
        'plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css',
        'plugins/nestable/nestable.css',
        'plugins/xeditable/css/bootstrap-editable.css',
        'plugins/xeditable/inputs/address/address.css',
        'plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js-bootstrap.css',
        'plugins/footable/css/footable.core.min.css',
    ];
    public $js = [
        'plugins/datatables/media/js/jquery.dataTables.js',
        'plugins/datatables/media/js/dataTables.bootstrap.js',
        'plugins/xeditable/js/bootstrap-editable.min.js',
        'plugins/xeditable/inputs/address/address.js',
        'plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js',
        'plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js',
    ];

    public $depends = [
        'fav\AbsoluteAdmin\AbsoluteAsset'
    ];
}
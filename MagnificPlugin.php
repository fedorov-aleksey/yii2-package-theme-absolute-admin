<?php
/**
 * Created by PhpStorm.
 * User: fav
 * Date: 10.01.17
 * Time: 12:06
 */

namespace fav\AbsoluteAdmin;

use yii\web\AssetBundle;

class MagnificPlugin extends AssetBundle
{
    public $css = ['magnific-popup.css',];
    public $js = ['jquery.magnific-popup.js',];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/source/plugins/magnific';
        parent::init();
    }

}
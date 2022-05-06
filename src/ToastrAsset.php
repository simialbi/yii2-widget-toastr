<?php
/**
 * @link https://github.com/simialbi/yii2-widget-toastr
 * @copyright Copyright (c) 2022 Simon Karlen
 * @license MIT
 */

namespace simialbi\yii2\toastr;

use yii\web\AssetBundle;

/**
 * The asset bundle needed for toastr
 */
class ToastrAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/toastr';

    /**
     * @inheritdoc
     */
    public $css = [
        'toastr.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'toastr.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}

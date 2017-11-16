<?php
/**
 * @link      http://www.activemedia.uz/
 * @copyright Copyright (c) 2017. ActiveMedia Solutions LLC
 * @author    Rustam Mamadaminov <rmamdaminov@gmail.com>
 */

namespace rustamwin\checkbo;


use yii\web\AssetBundle;

class CheckBoAsset extends AssetBundle
{
    public $sourcePath = '@bower/checkbo';

    public $js = [
        'src/0.1.4/js/checkBo.min.js',
    ];

    public $css = [
        'src/0.1.4/css/checkBo.min.css',
    ];
}
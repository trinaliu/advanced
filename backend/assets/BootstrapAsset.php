<?php
/**
 * Created by PhpStorm.
 * User: trina
 * Date: 18-9-12
 * Time: 上午9:06
 */

namespace backend\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/dashboard.css'
    ];

    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
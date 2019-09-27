<?php
/**
 * Author: Eugine Terentev <eugine@terentev.net>
 */

namespace zoge\filekit\widget;

use yii\web\AssetBundle;

class UploadAsset extends AssetBundle
{

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'trntv\filekit\widget\BlueimpFileuploadAsset'
    ];

    public $sourcePath = __DIR__ . '/assets';
    
    public $css = [
        YII_DEBUG ? 'css/upload-kit.css' : 'css/upload-kit.min.css',
		YII_DEBUG ? 'css/cropper.css' : 'css/cropper.min.css',
    ];

    public $js = [
        YII_DEBUG ? 'js/upload-kit.js' : 'js/upload-kit.min.js',
		YII_DEBUG ? 'js/cropper.js' : 'js/cropper.min.js',
    ];
}

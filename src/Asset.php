<?php
namespace zoge\jcrop;
use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@zoge/jcrop/assets';

    public $css = [
        'css/jcrop.css'
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'js/jcrop.js'
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'zoge\jcrop\JcropAsset',
        'zoge\jcrop\SimpleAjaxUploaderAsset',
    ];
}
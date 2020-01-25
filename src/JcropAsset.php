<?php
namespace zoge\jcrop;
use yii\web\AssetBundle;
class JcropAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/jcrop/';
    public $js = [
        'js/jquery.Jcrop.min.js'
    ];
    public $css = [
        'css/jquery.Jcrop.min.css'
    ];
}

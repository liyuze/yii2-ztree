<?php
/**
 * @package yii2-ztree
 */
namespace liyuze\ztree;
use Yii;
use yii\web\AssetBundle;
/**
 * Asset bundle for ZTree Widget
 *
 * @author li yuze
 */
class ZTreeAsset extends AssetBundle
{
    public $sourcePath = '@liyuze/ztree/assets';
    public $js = [
        'jquery.ztree.all-3.5.min.js',      //完整包
        // 'jquery.ztree.all-3.5.js',
        // 'jquery.ztree.core-3.5.min.js',     //核心包
        // 'jquery.ztree.core-3.5.js',
        // 'jquery.ztree.excheck-3.5.min.js',  //excheck 扩展包
        // 'jquery.ztree.excheck-3.5.js',
        // 'jquery.ztree.exedit-3.5.min.js',   //exedit 扩展包
        // 'jquery.ztree.exedit-3.5.js',
        // 'jquery.ztree.exhide-3.5.min.js',   //exhide 扩展包
        // 'jquery.ztree.exhide-3.5.js',
    ];
    public $css = [
        #皮肤样式
        'zTreeStyle/zTreeStyle.css',
        // 'awesomeStyle/awesomeStyle.css',
        // 'metroStyle/metroStyle.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
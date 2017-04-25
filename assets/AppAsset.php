<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use app\services\UrlService;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

//    public $css = [
//        '/bootstrap/css/bootstrap.min.css',
//    ];
//    public $js = [
//        '/bootstrap/css/bootstrap.min.js',
//        '/jquery/jquery.min.js',
//    ];

    public function registerAssetFiles( $view ){
        $release = '20171213'; //加一个版本号,目的 ： 是浏览器获取最新的css 和 js 文件
        $this->css = [
            UrlService::buildUrl("/bootstrap/css/bootstrap.min.css",[ 'v' => $release ]),
            UrlService::buildUrl( "/css/app.css")
        ];
        $this->js = [
            UrlService::buildUrl("/bootstrap/js/bootstrap.min.js"),
            UrlService::buildUrl("/jquery/jquery.min.js"),
        ];
        parent::registerAssetFiles($view);
    }

}

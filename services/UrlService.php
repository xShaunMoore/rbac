<?php
/**
 * Created by PhpStorm.
 * User: Looking
 * Date: 2017/4/25
 * Time: 18:30
 */

namespace app\services;

use yii\helpers\Url;

class UrlService
{
    //返回一个内部链接
    public static function buildUrl( $url , $params = [] ){

        return Url::toRoute( array_merge( [$url] , $params ));
    }

    //返回一个空链接
    public function buildNullUrl(){

        return "javascript:void(0);";
    }
}
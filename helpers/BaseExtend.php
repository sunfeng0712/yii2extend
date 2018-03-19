<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2018/3/19
 * Time: 下午5:48
 */
namespace yii2extend\mod\helpers;

use yii;

/**
 * Class BaseExtend
 * @package yii2extend\mod\helpers
 */
class BaseExtend
{
    /**
     * common debug for php
     * @param $param
     * @return array
     */
    public static function dd($param)
    {
        foreach ($param as $p)  {
            \yii\helpers\VarDumper::dump($p, 10, true);
            echo '<pre>';
        }
        exit(1);
    }

    /**
     * get client ip for php
     * @return array|false|string
     */
    public static function getClientIp()
    {
        if(getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR')) {
            $ip = getenv('REMOTE_ADDR');
        } else {
            $ip = "Unknown";
        }
        return $ip;
    }


}

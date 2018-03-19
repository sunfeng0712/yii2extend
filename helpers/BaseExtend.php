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
}

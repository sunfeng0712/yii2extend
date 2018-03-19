<?php
namespace sfphp\src;

/**
 * Class helpers 第三方公共类库
 * @package sfphp\src
 */
class helpers
{
    /**
     * var_dump格式化输出
     * @param array ...$param
     */
    public static function dd(...$param)
    {
        foreach ($param as $p) {
            \yii\helpers\VarDumper::dump($p, 10, true);
            echo '<pre>';
        }
        exit(1);
    }
}
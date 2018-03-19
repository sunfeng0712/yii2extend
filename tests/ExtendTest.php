<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2018/3/19
 * Time: 下午6:05
 */
namespace yii2extend\mod\tests;

use yii;
use PHPUnit\Framework\TestCase;
use yii2extend\mod\helpers\BaseExtend;

/**
 * tests for helpers
 * Class ExtendTest
 * @package yii2extend\mod\tests
 */
class ExtendTest extends TestCase
{
    /**
     * test for dd methods
     */
    public function testdd()
    {
        $data = [
            "数字1"   =>  "dasdas",
            "id2"    =>   "12344",
            "学生"    =>
                [
                    "李三","赵四","刘老根",
                ],
            ];
        BaseExtend::dd($data);
    }
}
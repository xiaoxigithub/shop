<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/18
 * Time: 11:15
 */

namespace app\common\model;

use think\Model;

class User extends Model
{

    protected $schema = [
        'id'       => 'int',
        'username' => 'varchar',
        'password' => 'varchar',
        'age'      => 'int',
        'sex'      => 'int',
        'mobile'   => 'int',
    ];

    protected $field = [
        'id',
        'username',
        'password',
        'mobile',
        'age',
        'sex',
    ];


    public static function onAfterRead($model)
    {
        echo "查询后事件" . "<br>";
    }

    public static function onBeforeInsert($model)
    {
        echo "新增前事件" . "<br>";
    }

    public static function onAfterInsert($model)
    {
        echo "新增后事件" . "<br>";
    }

    public static function onBeforeUpdate($model)
    {
        echo "更新前事件" . "<br>";
    }

    public static function onAfterUpdate($model)
    {
        echo "更新后事件" . "<br>";
    }

    public static function onBeforeWrite($model)
    {
        echo "写入前事件" . "<br>";
    }

    public static function onAfterWrite($model)
    {
        echo "写入后事件" . "<br>";
    }

    public static function onBeforeDelete($model)
    {
        echo "删除前事件" . "<br>";
    }

    public static function onAfterDelete($model)
    {
        echo "删除后事件" . "<br>";
    }

}
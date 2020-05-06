<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/18
 * Time: 11:15
 */

namespace app\common\model;

use think\Model;

class Category extends Model
{
    protected $schema = [
        'id'   => 'int',
        'name' => 'varchar',
        'pid'  => 'int',
    ];

    protected $field = [
        'id',
        'name',
        'pid',
    ];

    protected $type = [
        'create_time' => 'int',
        'update_time' => 'int',
    ];

    protected $append = ['url'];

    /**
     * 自动获取书籍url
     * @param $value
     * @param $data
     * @return string
     */
    protected function getUrlAttr($value, $data)
    {
        if (isset($data['id'])) {
            return '/list?id=' . $data['id'];
        }
        return '';
    }
    public static function onAfterRead($model)
    {
//        echo "查询后事件" . "<br>";
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
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/18
 * Time: 11:15
 */

namespace app\common\model;

use think\Model;

class Goods extends Model
{
    protected $schema = [
        'id'          => 'int',
        'cate_id'     => 'int',
        'name'        => 'varchar',
        'price'       => 'int',
        'thumb'       => 'varchar',
        'status'      => 'int',
        'desc'        => 'varchar',
        'recycle'     => 'int',
        'create_time' => 'int',
        'update_time' => 'int',

    ];

    protected $field = [
        'id',
        'cate_id',
        'name',
        'price',
        'thumb',
        'status',
        'desc',
        'create_time',
        'update_time',
        'recycle',
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
            return '/view?id=' . $data['id'];
        }
        return '';
    }

    protected $autoWriteTimestamp = true;

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
<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('ww', function () {
    return 'hello!WW';
});

Route::rule('/', 'Index');
// 分类列表页
Route::get('/cate_list', 'index/cateList');
// 书籍列表
Route::get('/list', 'index/list');
// 详情页
Route::get('/view', 'index/view')->pattern(['id' => '\d']);
// 登录
Route::get('/login', 'User/Login');
// 注销
Route::get('/logout', 'User/LogOut');
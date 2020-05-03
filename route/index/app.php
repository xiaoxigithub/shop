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

//config/app.php 开启多应用口，创建route下对应的路由
//访问时带上应用+路由名字
//host/index/mm
Route::rule('/', 'Index');
// 列表页
Route::get('/list', 'Index/List');
// 详情页
Route::get('/view/:id', 'Index/View');

// 登录
Route::get('/login', 'Admin/Login');
// 注销
Route::get('/logout', 'Admin/LogOut');

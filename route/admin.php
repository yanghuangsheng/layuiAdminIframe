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

// 绑定admin子域名到admin模块
Route::domain('admin', 'admin');
// index
Route::get('index', 'admin/index/index');
Route::get('console', 'admin/index/console');
Route::get('homepage1', 'admin/index/homepage1');
Route::get('homepage2', 'admin/index/homepage2');


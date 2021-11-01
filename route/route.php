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

Route::pattern([
    'id'    =>  '\d+',
    'name'  =>  '\w+',
]);

Route::rule('hello/:id','admin/User/index','GET|POST',[]);
Route::rule('banner/:name','admin/User/getName','GET|POST',[]);

Route::get('add','index/User/add'); // get方式
Route::post('save','index/User/save'); // post方式
Route::any('delete','index/User/delete');  // 任意方式

Route::group('goods',function() {
    Route::get('/:id','admin/Goods/detail'); // goods/1
    Route::post('/add','admin/Goods/add'); // goods/add
    Route::any('/delete/:id','admin/Goods/delete'); // goods/delete/1
});

Route::group('order',function() {
    Route::get('/:id','admin/Order/detail'); // order/1
    Route::post('/add','admin/Order/add'); // order/add
    Route::any('/delete/:id','admin/Order/delete'); // order/delete/1
});

Route::group('api/:version/goods',function () {
    // 这是错误的写法
//    Route::get('/:id','api/v1/Goods/index');

    // 正确的写法
//    Route::get('/:id','api/v1.Goods/index');

    // 正确的写法
    Route::any('/:id/:name','api/:version.Goods/index');
});
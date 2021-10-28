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

return [
    // 生成应用公共文件
    '__file__' => ['common.php'],

    // 生成admin模块
    'admin'     => [
        // 生成admin模块的公共函数文件
        '__file__'   => ['common.php'],
        // 在 admin 模块创建 controller model view 目录
        '__dir__'    => ['controller', 'model', 'view'],
        // 在 controller中创建index控制器
        'controller' => ['Index'],
        // 在model中创建User模型类
        'model'      => ['User'],
        // 在view中创建index/index.html视图文件
        'view'       => ['index/index'],
    ],
];

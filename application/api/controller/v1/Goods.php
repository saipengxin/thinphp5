<?php

namespace app\api\controller\v1;

use think\Controller;

class Goods extends Controller
{
    public function index()
    {
        // 使用过滤器（PHP函数）对参数进行过滤，默认使用htmlspecialchars函数对引号转义
        // strip_tags ： 过滤掉标签
        dump(input('post.content','','strip_tags')); 
    }
}
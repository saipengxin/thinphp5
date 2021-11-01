<?php

namespace app\api\controller\v1;

use think\Controller;
use think\facade\Request;

class Goods extends Controller
{
    public function index()
    {
        $re = Request::instance();
        dump(Request::method());
        dump(Request::isGet());
        dump(Request::isPost());
        dump(Request::isAjax());
    }
}
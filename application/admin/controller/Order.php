<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Order extends Controller
{
    public function detail()
    {
        echo '订单详情';
    }

    public function add()
    {
        echo '新增订单';
    }

    public function delete()
    {
        echo '删除订单';
    }
}

<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Goods extends Controller
{
   public function detail()
   {
       echo '商品详情';
   }

   public function add()
   {
       echo '商品添加';
   }

    public function delete()
    {
        echo '商品删除';
    }
}

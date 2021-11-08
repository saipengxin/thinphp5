<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function page()
    {
        // 创建分页导航
        $list = Db::table('tn_goods')
            ->field('goods_name,shop_price')
            ->paginate(5); // 每页显示5条数据

        $this->assign('list',$list);
        return $this->fetch();
    }

}

<?php

namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    // 查询数据时隐藏id字段不显示
    protected $hidden = ['id'];
}
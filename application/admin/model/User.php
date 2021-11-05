<?php
namespace app\admin\model;

use think\Model;

class User extends Model
{
    // 定义user表和profile表之间的关联关系
    public function profile()
    {
        // 参数1：关联模型名
        // 参数2：外键字段
        // 参数3、本表的主键
        return $this->hasOne('Profile','uid','id');
    }
}
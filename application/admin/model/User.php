<?php
namespace app\admin\model;

use think\Model;

class User extends Model
{
    protected function getImgAttr($value) {
        return config('img_url') . $value;
    }


    protected function setPasswordAttr($value)
    {
        return md5($value);
    }
}
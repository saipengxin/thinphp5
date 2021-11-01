<?php

namespace app\admin\controller;
use think\Controller;
use think\facade\Cookie;

class User extends Controller {
    public function index()
    {
        session("user","赛鹏新");
        Cookie::set('age',30);
        
        define('ROOT','localhost/tp5/public');

        return $this->fetch();
    }
}
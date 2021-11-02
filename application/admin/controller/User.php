<?php

namespace app\admin\controller;
use think\Controller;

class User extends Controller {
    public function index()
    {
        $this->assign('number',10);
        return $this->fetch();
    }
}
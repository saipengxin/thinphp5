<?php

namespace app\admin\controller;
use think\Controller;

class User extends Controller {
    public function index()
    {
        $this->assign('age','');
        $this->assign('id',5);
        define('APP_PATH','./public/index.php');
        return $this->fetch();
    }
}
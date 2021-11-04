<?php

namespace app\admin\controller;
use think\Controller;
use app\admin\model\User as UserModel;

class User extends Controller {
    public function index()
    {
        $data = [
            'username'  =>  '没有加密',
            'password'  =>  '123456',
        ];
        $user = new UserModel();
        $user->save($data);
    }
}
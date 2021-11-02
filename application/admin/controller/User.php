<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;

class User extends Controller {
    public function index()
    {
        $data = [];
        for ($i=1; $i < 10; $i++) {
            $data[] = [
                'username'  =>  'user'.$i,
                'password'  =>  md5('admin123'.$i),
            ];
        }
        $res = Db::table('user')->insertAll($data);
        dump($res);
    }
}
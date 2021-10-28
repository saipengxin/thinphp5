<?php

namespace app\admin\controller;

use think\facade\Config;
use think\Controller;

class User extends Controller {

    public function index()
    {
        config('dbhost','localhost');
        dump(config('dbhost'));
    }

}
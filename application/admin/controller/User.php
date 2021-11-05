<?php

namespace app\admin\controller;
use app\admin\model\Article;
use think\Controller;
class User extends Controller {
    public function index()
    {
        // 给1号文章写入多条评论
        // 先查询到1号文章
        $article = Article::get(1);
        // 给1号文章写入评论
        $data = [
            ['comment'=>'1号评论'],
            ['comment'=>'2号评论'],
        ];
        $res = $article->comm()->saveAll($data);
    }
}
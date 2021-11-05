<?php

namespace app\admin\model;

use think\Model;

class Article extends Model
{
    // 定义文章表和评论表的一对多关系
    public function comm()
    {
        return $this->hasMany('Comment','article_id','id');
    }
}
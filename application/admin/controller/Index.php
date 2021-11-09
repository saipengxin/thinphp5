<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function page()
    {
        return $this->fetch();
    }

    public function upload()
    {
        // 接收
        $file = request()->file('image');
        // 上传
        $finfo = $file->move('uploads');

        dump($finfo->getSaveName());
        dump($finfo->getFilename());
    }

    public function thumb()
    {
        $image = \think\Image::open('./test.jpg');
        $image -> thumb(150,150)->save('thumb.png');
    }

}

<?php

namespace app\admin\validate;

use think\Validate;

class IDRule extends Validate
{
    // 定义规则
    protected $rule = [
        'name'  =>  'require|[a-z]{5,10}',
        'id'    =>  'require|isPostiveInt' // max : 数据的最大长度，不是最大值
    ];

    // 错误信息，一个规则对应一个信息
    protected $message = [
        'name'  =>  '用户名必填，5-10位字母',
        'id'    =>  'id必填,必须是数值',
    ];

    // 验证场景
    protected $scene = [
        // 在edit场景下验证id
        'edit'  =>  'id',
    ];

    protected function isPostiveInt($value)
    {
        if (is_numeric($value) && is_int($value + 0) && $value+0 > 0) {
            return true;
        } else {
            return false;
        }
    }
}
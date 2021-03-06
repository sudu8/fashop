<?php
namespace App\Validator;

use ezswoole\Validator;

/**
 * 微信验证
 *
 *
 *
 *
 * @copyright  Copyright (c) 2019 MoJiKeJi Inc. (http://www.fashop.cn)
 * @license    http://www.fashop.cn
 * @link       http://www.fashop.cn
 * @since      File available since Release v1.1
 * @author 邓凯
 */
class WechatTag extends Validator {
    //验证
    protected $rule = [
        'name' => 'require',
        'id' => 'require',
        'openid' => 'require',
        'openids' => 'require|array',
    ];
    //提示
    protected $message = [
        'name.require' => '请输入标签名',
        'id.require' => '标签id丢失',
        'openid.require' => 'openid丢失',
        'openids.require' => 'openid丢失',
    ];
    //场景
    protected $scene = [
        'tagAdd' => [
            'name',
        ],
        'tagUpdate'=>[
            'id',
            'name',
        ],
        'del'=>[
            'id',
        ],
        'getTag'=>[
            'openid',
        ],
        'addUserTags'=>[
            'id',
            'openids',
        ],
        'removeUserTags'=>[
            'id',
            ['openids'],
        ]

    ];


}
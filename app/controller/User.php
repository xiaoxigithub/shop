<?php

namespace app\controller;

use think\captcha\facade\Captcha;

class User extends Base
{
    public function login()
    {
        if ($this->request->isPost()) {
            $param = $this->request->param();
            $verify = $param['captcha'];
            if (captcha_check($verify)) {
                $msg = '验证码错误！';
            } else {
                // 判断用户名密码错误
                $user = \app\common\model\User::where([
                    'username' => $param['username'],
                    'password' => $param['password'],
                ])->findOrEmpty();
                // 登录成功
                if (!$user->isEmpty()) {
                    session('user', $user['username']);
                    return redirect('/index');
                } else {
                    $msg = '用户名或密码错误!';
                }
            }
        }
        $this->template->fetch('user/login', [
            'msg' => $msg ?? ''
        ]);
    }

    public function logout()
    {
        session('user', null);
        return redirect('/login');
    }

    public function verify()
    {
        ob_clean();
        return Captcha::create();
    }


    /**
     * 分类管理
     */
    public function category()
    {

    }

    /**
     * 商品列表
     */
    public function goodsList()
    {

    }

    public function goodsAdd()
    {

    }

    public function goodsUpdate()
    {

    }

    public function goodsDelete()
    {

    }
}

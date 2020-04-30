<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/7/10
 * Time: 8:41
 */

namespace app\index\controller;
use app\index\model\Users;
use think\Request;
use think\Controller;
use think\Db;


class Register extends Controller
{
    public function toregister()
    {
        $userName = $this->request->post('userName');
        $userPassword = $this->request->post('userPassword');
        if(request()->isPost()){
            $user=new Users();
            $data=input('post.');
            $user->userName = $userName;
            $user->userPassword = $userPassword;
            $user->save();
        }
        $this->success('注册成功，正在为您跳转','index/index');
    }
}
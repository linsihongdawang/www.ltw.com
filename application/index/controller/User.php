<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2019/6/24
 * Time: 14:32
 */

namespace app\Index\controller;
use think\Controller;
use app\index\model\Admin;
use think\Db;


class User extends Controller
{
    public function tologin(){
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $user =$admin->tologin($data);
            if($user){
                session("userinfo",$data['userName']);
                session("userPass",$user['userPass']);
                $this->success('信息正确，正在为您跳转','paginate/tomain');
            }else{
                $this->error('用户名或密码错误');
            }
        }

    }

    public function adminlogin(){
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $num=$admin->adminlogin($data);
            if($num==3){
                $this->success('信息正确，正在为您跳转','index/admin');
            }else{
                $this->error('用户名或密码错误');
            }
        }
    }
    public function todownload(){
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $num=$admin->todownload($data);
            if($num==2){
                $this->success('信息正确，正在为您跳转','index/download');
            }else{
                $this->error('您不是会员，请充值','paypage/topaypage');
            }
        }
    }
    public function toupload(){

    }
}

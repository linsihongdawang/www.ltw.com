<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2019/6/24
 * Time: 11:19
 */

namespace app\index\model;
use think\Model;
use think\Db;
class Admin extends Model
{
    public function tologin($data)
    {
        $user = Db::name('users')
            ->where('userName', $data['userName'])
            ->where('userPassword', $data['userPassword'])
            ->find();
        return $user;
    }

    public function adminlogin($data){
        $user = Db::name('admin')->where('adminName', '=', $data['adminName'])->find();
        if ($user) {
            if ($user['adminPassword'] == $data['adminPassword']) {
                return 3; //信息正确
            } else {
                return 2;//密码错误
            }
        } else {
            return 1;//用户不存在
        }
    }
    public function todownload($data){
        $user =  Db::name('users')->where('userPass','=',$data['userpass'])->find();
        if($user['userPass'] !=0){
            return 2;//可以下载
        }else {
            return 1;
        }
    }
}
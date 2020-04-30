<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/7/2
 * Time: 11:01
 */

namespace app\index\controller;
use app\index\model\Users;
use think\Controller;
use think\Db;

class Paypage extends Controller
{
    public function topaypage($price){
        return view("paypage",['price'=>$price]);
    }

    public function pay(){
        Db::name('users')
            ->where('userName', session('userinfo'))
            ->update(['userPass' => '1']);
        session("userPass",1);
        $this->success('付款成功，正在为您跳转','paginate/tomain');
    }
}
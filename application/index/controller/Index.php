<?php
namespace app\index\controller;


use think\console\command\make\Controller;use think\Db;
use think\paginator;

class Index
{
    public function index()
    {
        return view("login");
    }

    public function login()
    {
//        return view("main");
        $list = $user = Db::name('image_inf')->select();
        return view("main", ['list' => $list]);
    }

    public function admin()
    {
        return view("index");
    }

    public function toindex()
    {
        return view("index");
    }

    public function leftNav()
    {
        return view("index-left");
    }

    public function upload()
    {
        return view("upload");
    }
    public function download(){
        return view("download");
    }
    public function toregister()
    {
        return view("register");
    }
    public function offline(){
        session(null);
        return view("login");
    }



}




<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/7/7
 * Time: 20:03
 */

namespace app\index\controller;



use think\Controller;
use think\Db;
use think\exception\ErrorException;
use think\facade\Request;

class Paginate extends Controller
{
    public function tomain()
    {

        $list = Db::name('image_inf')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch("index/LTWHomepage");

    }

    public function searchpic()
    {
       $keywords=input('imageName');
       if($keywords){
           $map[]=['imageName','like','%'.$keywords.'%'];
           $list=Db::name('image_inf')->where($map)->order('imageId desc')->paginate($listRows=3,$simple=false,$config=[
               'query'=>array('imageName'=>$keywords)
               ]);
           $this->assign(array(
               'list'=>$list,
               'imageName'=>$keywords,
           ));
       }else{
           $this->assign(array(
               'list'=>null,
               'imageName'=>暂无数据,
           ));
       }
       return $this->fetch('index/LTWHomepage');
    }
}
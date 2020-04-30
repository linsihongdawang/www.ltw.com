<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/6/24
 * Time: 14:34
 */

namespace app\index\controller;


use think\Db;
use think\Controller;

class Widgets extends Controller
{
  public function towidgets(){
      //return view("widgets");
      $list =$user=Db::name('image_inf')->select();
      $this->assign('list',$list);
      return view("widgets",['list'=>$list]);
  }

}
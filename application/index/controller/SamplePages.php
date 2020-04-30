<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/6/24
 * Time: 16:52
 */

namespace app\index\controller;


class SamplePages
{
  public function totimeline(){
      return view("timeline");
  }
    public function  toadmin(){
        return view("admin-login");
    }
}
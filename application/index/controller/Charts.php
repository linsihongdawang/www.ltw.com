<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/6/26
 * Time: 9:28
 */

namespace app\index\controller;


class Charts
{
 public function tochart(){
     return view("chart-js-charts");
 }
 public function toflot(){
     return view("flot-charts");
 }
}
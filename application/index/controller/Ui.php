<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/6/24
 * Time: 17:21
 */

namespace app\index\controller;


class Ui
{
 public function toaccordions(){
     return view("accordions");
 }
 public function tobuttons(){
     return view("buttons");
 }
 public function toicons(){
     return view("icons");
 }
 public function tonotifications(){
     return view("notifications");
 }
 public function totypography(){
     return view ("typography");
 }
}
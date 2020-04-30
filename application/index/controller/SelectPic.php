<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/7/8
 * Time: 10:10
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

class SelectPic extends Controller
{

    public function tobuilding()
    {
        $list = Db::name('image_inf')->where('imageTitle','建筑')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch("LTWHomepages/LTWHomepageBuilding");
    }

    public function tofashion()
    {
        $list = Db::name('image_inf')->where('imageTitle', '时尚')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch("LTWHomepages/LTWHomepageFashion");
    }

    public function toscenery()
    {
        $list = Db::name('image_inf')->where('imageTitle', '风景')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch("LTWHomepages/LTWHomepageScenery");
    }
    public function toweekly(){
        $list =Db::name('image_inf')->where('imageTitle','周刊')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch("LTWHomepages/LTWHomepageWeekly");
    }
    public function toportrait(){
        $list =Db::name('image_inf')->where('imageTitle','人像')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch("LTWHomepages/LTWHomepagePortrait");
    }
    public function toart(){
        $list =Db::name('image_inf')->where('imageTitle','艺术')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch("LTWHomepages/LTWHomepageArt");
    }
    public function tojourney(){
        $list =Db::name('image_inf')->where('imageTitle','旅行')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch("LTWHomepages/LTWHomepageJourney");
    }
    public function todesign(){
        $list =Db::name('image_inf')->where('imageTitle','设计')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch("LTWHomepages/LTWHomepageDesign");
    }

}
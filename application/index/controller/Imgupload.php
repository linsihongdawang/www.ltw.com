<?php
/**
 * Created by PhpStorm.
 * User: 清风云影
 * Date: 2019/7/2
 * Time: 16:40
 */

namespace app\index\controller;


use app\index\model\Users;
use think\Controller;
use think\Request;
use app\index\model\ImageInf;
class Imgupload extends Controller
{
    public function toImgUpload(){
     $file = $this->request->file('test');
     $type = $this -> request -> post('type');
     $imagedate =$this->request->post('imagedate');
     $imagename =$this->request->post('imagename');
//     $authorName = $this -> session("userinfo");
     $introduce =$this->request->post('introduce');
     // todo 取出用户名跟图片存到同一张数据库表


        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move( 'imgpath');
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            //echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            //echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            //echo $info->getFilename();

            $imageInfModel = new ImageInf();
            $imageInfModel->authId = '11111';
            $imageInfModel->imageTitle = $type;
            $imageInfModel->imageDate=$imagedate;
            $imageInfModel->imageName= $imagename;
            $imageInfModel->imageIntroduce= $introduce;

            $imageInfModel->imageSrc = '/imgpath/' . $info->getSaveName();
            $imageInfModel->save();
            $this->success('上传成功，正在为您跳转','index/login',3);

        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }


}
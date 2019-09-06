<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function product_add(){

      $modelBrand = M('Rpj_brand');
      $brand = $modelBrand->select();
      $this->assign('brand',$brand);
      $modelApp = M('Rpj_appfield');
      $appField = $modelApp->select();
      $this->assign('app',$appField);

      $modelProduct = M('Rpj_product');
      if (IS_POST) {
        //处理text
        $idMax = $modelProduct->max('product_id');
        $product_id = $idMax+1;
        $modelProduct->product_id = $product_id;
        $modelProduct->product_name = $_POST["product_name"];
        $modelProduct->product_desc = $_POST["product_dec"];
        $modelProduct->product_standard = $_POST["product_standard"];
        $modelProduct->product_model = $_POST["product_model"];
        $modelProduct->product_video = $_POST["product_video"];
        $modelProduct->brand_id=$modelBrand->where("brand_name='%s'",$_POST["brand_name"])->field('brand_id')->find();
        $modelProduct->app_id=$modelApp->where("app_name='%s'",$_POST["app_name"])->field('app_id')->find();
        //处理文件
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
        $upload->rootPath  =     './Application/Upload/product/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $info = $upload->uploadOne($_FILES['product_logo']);

        if(!$info){
            $this->error($upload->getError());
        }else{
            $modelProduct->product_logo = '/Application/Upload/product/'.$info['savepath'].$info['savename'];
        }

        $info = $upload->uploadOne($_FILES['product_pic']);
        if (!$info) {
            $this->error($upload->getError());
        }else {
            $modelProduct->product_pic = '/Application/Upload/product/'.$info['savepath'].$info['savename'];
        }

        $modelProduct->add();
      }
      $this->display();
    }

    public function product_list(){
      $modelProduct = M('Rpj_product');
      $modelBrand = M('Rpj_brand');
      $product = $modelProduct->select();
      $brand = $modelBrand->select();
      $this->assign('product',$product);
      $this->assign('brand',$brand);
      $this->display();
    }

    public function product_del($product_id){
      $this->display('product_list');
    }

    public function product_edit($product_id){
      $this->display();
    }

    public function product_submit(){
      $this->display('product_edit');
    }

}

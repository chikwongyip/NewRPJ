<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function product_add(){

      $modelBrand = M('Rpj_brand');
      $brand = $modelBrand->select();
      $this->assign('brand',$brand);
      $modelCategory = M('Rpj_procategory');
      $category = $modelCategory->select();
      $this->assign('category',$category);

      $modelProduct = M('Rpj_product');
      if (IS_POST) {
        //处理text

        $idMax = $modelProduct->max('product_id');
        $product_id = $idMax+1;
        $modelProduct->product_id = $product_id;
        $modelProduct->product_name = $_POST["product_name"];
        $modelProduct->product_desc = $_POST["product_desc"];
        $modelProduct->product_standard = $_POST["product_standard"];
        $modelProduct->product_model = $_POST["product_model"];
        $modelProduct->product_video = $_POST["product_video"];
        $brand_id = $modelBrand->where("brand_name='%s'",$_POST["brand_name"])->field('brand_id')->find();
        $modelProduct->brand_id = (int)$brand_id["brand_id"];
        $category_id = $modelCategory->where("category_name='%s'",$_POST["cate_name"])->field('category_id')->find();
        $modelProduct->category_id = (int)$category_id["category_id"];

        //处理文件
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
        $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $info = $upload->uploadOne($_FILES['product_logo']);

        if(!$info){
            $this->error($upload->getError());
        }else{
            $modelProduct->product_logo = '/Upload/'.$info['savepath'].$info['savename'];
        }

        $info = $upload->uploadOne($_FILES['product_pic']);
        if (!$info) {
            $this->error($upload->getError());
        }else {
            $modelProduct->product_pic = '/Upload/'.$info['savepath'].$info['savename'];
        }

        $modelProduct->add();
      }
      $this->display();
    }

    public function product_list(){
      $product = getProductData();
      $this->assign('product',$product);
      $this->display();
    }

    public function product_del($product_id){
      $model = M('Rpj_product');
      $model->delete($product_id);
      $product = $model
                  ->join('rpj_brand ON rpj_product.brand_id = rpj_brand.brand_id')
                  ->select();
      $this->assign('product',$product);
      $this->display('product_list');
    }

    public function product_edit($product_id){
    
      $product = getProductSingle($product_id);

      $this->assign('product',$product);
      $this->display();
    }

    public function product_submit(){
      $model = M('Rpj_product');
      if (IS_POST) {
        $model->find($_POST['product_id']);
        $model->product_name = $_POST['product_name'];
        $model->product_desc = $_POST['product_desc'];
        $model->product_standard = $_POST['product_standard'];
        $model->product_model = $_POST['product_model'];
        $model->product_video = $_POST['product_video'];
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
        $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        if ($_FILES['product_logo']['name'] != null) {
          $info = $upload->uploadOne($_FILES['product_logo']);
          if(!$info){
              $this->error($upload->getError());
          }else{
              $model->product_logo = '/Upload/'.$info['savepath'].$info['savename'];
          }
        }

        if ($_FILES['product_pic']['name'] != null) {
          $info = $upload->uploadOne($_FILES['product_pic']);
          if(!$info){
              $this->error($upload->getError());
          }else{
              $model->product_pic = '/Upload/'.$info['savepath'].$info['savename'];
          }
        }

        $model->save();
      }
      $this->display('product_edit');
    }



}

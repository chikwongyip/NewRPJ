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
        $image = new \Think\Image();
        $idMax = $modelProduct->max('product_id');
        $product_id = $idMax+1;
        $modelProduct->product_id = $product_id;
        $modelProduct->product_name = $_POST["product_name"];
        $modelProduct->product_desc = $_POST["product_desc"];
        $modelProduct->product_standard = $_POST["product_standard"];
        $modelProduct->product_model = $_POST["product_model"];
        $modelProduct->product_video = $_POST["product_video"];
        $modelProduct->brand_id = $_POST["brand_id"];
        $modelProduct->category_id = $_POST["category_id"];
        if ($_POST["top"][0]!=null) {
          $modelProduct->top = 'X';
        }
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
//            $modelProduct->product_logo = '/Upload/'.$info['savepath'].$info['savename'];
            $imagePath = './Public/Upload/'.$info['savepath'].$info['savename'];
            $image->open($imagePath);
            $image->thumb(125,125)->save('./Public/Upload/'.$info['savepath'].$info['savename']);
            $modelProduct->product_logo = '/Upload/'.$info['savepath'].$info['savename'];
        }

        $info = $upload->uploadOne($_FILES['product_pic']);
        if (!$info) {
            $this->error($upload->getError());
        }else {
            $modelProduct->product_pic = '/Upload/'.$info['savepath'].$info['savename'];
            $img_path = './Public/Upload/'.$info['savepath'].$info['savename'];
//            $image = new \Think\Image();
            $image->open($img_path);
            $image->thumb(300,300)->save('./Public/Upload/thumb300/thumb300_'.$info['savename']);
            $model->product_pic300 = '/Upload/thumb/thumb300_'.$info['savename'];

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

<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function product_add(){

      $modelBrand = M('Rpj_brand');
      $brand = $modelBrand->select();
      $this->assign('brand',$brand);
      $modelProduct = M('Rpj_product');
      if (IS_POST) {
        var_dump($_POST);
        $idMax = $modelProduct->max('product_id');
        $product_id = $idMax+1;
        $modelProduct->product_id = $product_id;
        $modelProduct->product_name = $_POST["product_name"];
        $modelProduct->product_desc = $_POST["product_dec"];
        $modelProduct->product_standard = $_POST["product_standard"];
        $modelProduct->product_model = $_POST["product_model"];
        $modelProduct->product_video = $_POST["product_video"];
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

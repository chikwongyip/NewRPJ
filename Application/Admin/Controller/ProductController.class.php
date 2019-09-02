<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function product_add(){
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

<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller
{
    public function product($product_id)
    {
      // model inizitial
          $model = M('Rpj_company');
          $modelProduct = M('Rpj_product');
          $modelBrands  = M('Rpj_brand');
          $category = getCategoryData();
          $brand = getBrandData();
          $modelProductPic = M('Rpj_product_pic');
      //  select data
          $company = $model->find(1);
          $product = getProductSingle($product_id);
          // var_dump($product); exit;
          $product_pic = $modelProductPic->where("product_id = $product_id")->select();
          $brands  = $modelBrands->select();
      // assign data html
          $this->assign('company',$company);
          $this->assign('category',$category);
          $this->assign('brand',$brand);
          $this->assign('product',$product);
          $this->assign('product_pic',$product_pic);
          $this->assign('brands',$brands);
          $this->display();
    }
}

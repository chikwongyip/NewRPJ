<?php
namespace Home\Controller;
use Think\Controller;
class ProdlistController extends Controller
{
    public function prodlist()
    {
      // model inizitial
      // model inizitial
          $model = M('Rpj_company');
          //$modelProduct = M('Rpj_product');
          $modelBrands  = M('Rpj_brand');
          $category = getCategoryData();
          $brand = getBrandData();


      //  select data
          $company = $model->find(1);
          $product = getProductData();
          $brands  = $modelBrands->select();

      // assign data html
          $this->assign('company',$company);
          $this->assign('category',$category);
          $this->assign('brand',$brand);
          $this->assign('product',$product);
          $this->assign('brands',$brands);
          $this->display();
    }

    public function listwithbrand($brand_id)
    {
        $model = M('Rpj_company');
        //$modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $category = getCategoryData();
        $brand = getBrandData();


    //  select data
        $company = $model->find(1);
        $product = getProductDataWithBrand($brand_id);
        $brands  = $modelBrands->select();

    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->display();
    }

    public function listwithcategory($category_id)
    {
        $model = M('Rpj_company');
        //$modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        $product = getProductDataWithCategory($category_id);
        $brands  = $modelBrands->select();

    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->display();
    }

    public function listwithboth($brand_id,$category_id)
    {
        $model = M('Rpj_company');
        //$modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        $product = getProductDataWithBoth($brand_id,$category_id);
        $brands  = $modelBrands->select();

    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->display();
    }
}

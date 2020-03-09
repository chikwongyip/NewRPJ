<?php
namespace Home\Controller;
use Think\Controller;
class ProdlistController extends Controller {
    public function prodlist(){
      // model inizitial
          $model = M('Rpj_company');
          $modelProduct = M('Rpj_product');
          $modelBrand = new \Think\Model();
          $modelCategory = new \Think\Model();
          $modelBrands  = M('Rpj_brand');
          $category=$modelCategory->query("select rpj_product.category_id,
                                                  rpj_procategory.category_name
                                      from rpj_product
                                      inner join rpj_procategory on rpj_product.category_id = rpj_procategory.category_id
                                      group by rpj_product.category_id");


          $brand=$modelBrand->query("select rpj_product.brand_id,
                                          rpj_product.category_id,
                                          rpj_brand.brand_name,
                                          rpj_procategory.category_name
                                      from rpj_product
                                      inner join rpj_brand on rpj_product.brand_id = rpj_brand.brand_id
                                      inner join rpj_procategory on rpj_product.category_id = rpj_procategory.category_id
                                      group by rpj_product.brand_id,rpj_product.category_id");

      //  select data
          $company = $model->find(1);
          $product = $modelProduct->select();
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

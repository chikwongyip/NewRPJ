<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
    // model inizitial
        $model = M('Rpj_company');
        $modelCategory = M('Rpj_procategory');
        $modelProduct = M('Rpj_product');
        $modelBrand = M('Rpj_brand');
        $modelTest = new \Think\Model();
        $test=$modelTest->query("select rpj_product.brand_id,
                                        rpj_product.category_id,
                                        rpj_brand.brand_name,
                                        rpj_procategory.category_name
                                    from rpj_product
                                    inner join rpj_brand on rpj_product.brand_id = rpj_brand.brand_id
                                    inner join rpj_procategory on rpj_product.category_id = rpj_procategory.category_id
                                    group by rpj_product.brand_id,rpj_product.category_id");
        var_dump($test); exit;
    //  select data
        $company = $model->find(1);
        $category = $modelCategory->select();
        $brand  = $modelProduct->field('brand_id,category_id')->group('category_id')->select();
        $product = $modelProduct->select();
        $brandName = $modelBrand->select();
    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brandname',$brandName);
        $this->display();
    }
}

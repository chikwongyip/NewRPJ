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

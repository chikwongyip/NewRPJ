<?php
namespace Home\Controller;
use Think\Controller;
class AttachController extends Controller
{
    public function attach()
    {
    // model inizitial
        $model = M('Rpj_company');
        $modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $category = getCategoryData();
        $brand = getBrandData();
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

<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
    // model inizitial
        $model = M('Rpj_company');
        $modelProduct = M('Rpj_product');
        $modelBrand = new \Think\Model();
        $modelCategory = new \Think\Model();
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
        // var_dump($brand);
        // var_dump($category);
        // exit;
    //  select data
        $company = $model->find(1);
        $product = $modelProduct->select();
    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->display();
    }
}

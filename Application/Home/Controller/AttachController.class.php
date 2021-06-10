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
        $modelAttch = M('Rpj_prod_att');
        $attchCount = $modelAttch->field('product_id,count(product_id) as count')->group('product_id')->select();
        //var_dump($attchCount);exit;
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        $product = $modelProduct->select();
        $brands  = $modelBrands->select();
        $attach = $modelAttch->select();
    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->assign('attach',$attach);
        $this->assign('attch_q',$attchCount);
        $this->display();
    }

    public function attchLike()
    {
        // model inizitial
           $model = M('Rpj_company');
           $modelProduct = M('Rpj_product');
           $modelBrands  = M('Rpj_brand');
           $modelAttch = M('Rpj_prod_att');
           $attchCount = $modelAttch->field('product_id,count(product_id) as count')->group('product_id')->select();
           $category = getCategoryData();
           $brand = getBrandData();
       //  select data
           $company = $model->find(1);
           $product = $modelProduct->select();
           $brands  = $modelBrands->select();
           //$attch = $modelAttch->select();
           if (IS_POST) 
           {
                if (!is_null($_POST["name"]))
                {
                    $like = '%'.trim($_POST["name"]).'%';
                    $map['name'] =array('like',$like);
                    $attch = $modelAttch
                             ->where($map)
                             ->select();
                } 
           } 
           else 
           {
                $attch = $modelAttch->select();
                var_dump($attch);exit();
           }
           
       // assign data html
           $this->assign('company',$company);
           $this->assign('category',$category);
           $this->assign('brand',$brand);
           $this->assign('product',$product);
           $this->assign('brands',$brands);
           $this->assign('attch',$attch);
           $this->assign('attch_q',$attchCount);
           $this->display();
    }

    public function attachWithID($product_id)
    {
    // model inizitial
        $model = M('Rpj_company');
        $modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $modelAttch = M('Rpj_prod_att');
        $attchCount = $modelAttch->field('product_id,count(product_id) as count')->group('product_id')->select();
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        $product = $modelProduct->select();
        $brands  = $modelBrands->select();
        $map['product_id'] =array('eq',$product_id);
        $attch = $modelAttch
                ->where($map)
                ->select();
    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->assign('attch',$attch);
        $this->assign('attch_q',$attchCount);
        $this->display();
    }
}

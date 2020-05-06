<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
      // model inizitial
      // model inizitial
          $model        = M('Rpj_company');
      // $modelProduct = M('Rpj_product');
          $modelBrands  = M('Rpj_brand');
          $category     = getCategoryData();
          $brand        = getBrandData();
      //  select data
          $company      = $model->find(1);
          $product      = getProductData();
          $brands       = $modelBrands->select();
      // assign data html
          $this->assign('company',$company);
          $this->assign('category',$category);
          $this->assign('brand',$brand);
          $this->assign('product',$product);
          $this->assign('brands',$brands);
          if (IS_POST)
          {

            if ($_POST["category_id"] != "" and is_null($_POST["product_name"]))
            {

              $this->success('正在为你查询.....',U('home/prodlist/listwithcategory',array('category_id'=>$_POST["category_id"])));
            }

            if($_POST["category_id"] != "" and !is_null($_POST["product_name"]))
            {

              $this->success('正在为你查询.....',U('home/prodlist/listlikeproduct',array('category_id'=>$_POST["category_id"],'product_name'=>$_POST["product_name"])));
            }

            if($_POST["category_id"] == "" and !is_null($_POST["product_name"]))
            {

                $this->success('正在为你查询.....',U('home/prodlist/listlikeproductsingle',array('product_name'=>$_POST["product_name"])));
            }

            if($_POST["category_id"] == "" and is_null($_POST["product_name"]))
            {
              $this->success('正在为你查询.....',U('home/prodlist/prodlist'));
            }
          }
          else
          {
            $this->display();
          }

    }
}

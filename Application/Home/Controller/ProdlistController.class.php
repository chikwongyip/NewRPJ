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
          $modelBrands  = M('Rpj_brand');
          $modelProduct = M('Rpj_product');

          $category = getCategoryData();
          $brand = getBrandData();
          $brands  = $modelBrands->select();
          $company = $model->find(1);
          if (IS_POST)
          {

            if (!is_null($_POST["product_name"]))
            {
              $like = '%'.trim($_POST["product_name"]).'%';
              $map['product_name'] =array('like',$like);
            }

            if ($_POST["category_id"] != '0')
            {
              $map['rpj_procategory.category_id'] =array('eq',$category_id);
            }

            if (is_null($_POST["product_name"]) and $_POST["category_id"]='0')
            {
              $product = getProductData();
            }
            else
            {
              $product = $modelProduct
                ->join('rpj_procategory on rpj_procategory.category_id = rpj_product.category_id')
                ->join('rpj_brand on rpj_brand.brand_id = rpj_product.brand_id')
                ->where($map)
                ->select();
              //var_dump($product);exit;
            }
          }
          else
          {
            $product = getProductData();
          }
      //  select data



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

    public function listlikeproduct($category_id,$product_name)
    {
        $model = M('Rpj_company');
        //$modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $modelProduct = M('Rpj_product');
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        //$product = getProductDataWithCateName($category_id,$product_name);
        $brands  = $modelBrands->select();
        var_dump($product_name); exit;
        if (!is_null($product_name)) {
          $map['product_name'] =array('like','%'.$product_name.'%');
        }

        if ($category_id != "0") {
          $map['rpj_product.category_id'] =array('eq',$category_id);
        }

        $product = $modelProduct
          ->join('rpj_procategory on rpj_procategory.category_id = rpj_product.category_id')
          ->join('rpj_brand on rpj_brand.brand_id = rpj_product.brand_id')
          ->where($map)
          ->select();
        var_dump($product);exit;


    // assign data html
        $this->assign('company',$company);
        $this->assign('category',$category);
        $this->assign('brand',$brand);
        $this->assign('product',$product);
        $this->assign('brands',$brands);
        $this->display();
    }

    public function listlikeproductsingle($product_name)
    {
        $model = M('Rpj_company');
        //$modelProduct = M('Rpj_product');
        $modelBrands  = M('Rpj_brand');
        $category = getCategoryData();
        $brand = getBrandData();
    //  select data
        $company = $model->find(1);
        $product = getProductDataWithName($product_name);
        var_dump($product);exit;
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

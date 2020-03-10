<?php
// 获取产品数据
  function getProductData()
  {
    $modelProduct = new \Think\Model();
    $product=$modelProduct->query("select * from rpj_product
                                inner join rpj_procategory on
                                  rpj_product.category_id = rpj_procategory.category_id
                                inner join rpj_brand on
                                  rpj_product.brand_id    = rpj_brand.brand_id");
    return $product;
  }

//获取Category
  function getCategoryData()
  {
    $modelCategory = new \Think\Model();
    $category=$modelCategory->query("select rpj_product.category_id,
                                            rpj_procategory.category_name
                                from rpj_product
                                inner join rpj_procategory on rpj_product.category_id = rpj_procategory.category_id
                                group by rpj_product.category_id");
    return $category;
  }
// 获取品牌信息
  function getBrandData()
  {
    $modelBrand = new \Think\Model();
    $brand=$modelBrand->query("select rpj_product.brand_id,
                                    rpj_product.category_id,
                                    rpj_brand.brand_name,
                                    rpj_procategory.category_name
                                from rpj_product
                                inner join rpj_brand on rpj_product.brand_id = rpj_brand.brand_id
                                inner join rpj_procategory on rpj_product.category_id = rpj_procategory.category_id
                                group by rpj_product.brand_id,rpj_product.category_id");
    return $brand;
  }

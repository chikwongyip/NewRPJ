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

  // 根据product ID 获取 产品 单个
  function getProductSingle($id)
  {
    $modelProductSingle = new \Think\Model();
    $productSingle = $modelProductSingle->query("select * from rpj_product
                                inner join rpj_procategory on
                                  rpj_product.category_id = rpj_procategory.category_id
                                inner join rpj_brand on
                                  rpj_product.brand_id    = rpj_brand.brand_id
                                where rpj_product.product_id = $id");
    return $productSingle;
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

  function getProductPic()
  {
    $modelProductPicture = new \Think\Model();
    $productPicture = $modelProductPicture->query("select rpj_product_pic.pic_id,
                                                          rpj_product_pic.product_id,
                                                          rpj_product_pic.product_pic,
                                                          rpj_product.product_name
                                                  from rpj_product_pic
                                                  inner join rpj_product on rpj_product_pic.product_id = rpj_product.product_id");
    return $productPicture;
  }

<?php
namespace Admin\Controller;
use Think\Controller;
class ProdattController extends Controller{
  public function prodatt_list(){
    $modelAtt = M('Rpj_prod_att');
    $productAtt = $modelAtt
                ->join('rpj_product ON rpj_product.product_id = rpj_prod_att.product_id')
                ->select();
    // var_dump($model);
    var_dump($productAtt);
    $this->display();
  }
}

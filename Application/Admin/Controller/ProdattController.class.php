<?php
namespace Admin\Controller;
use Think\Controller;
class ProdattController extends Controller{
  public function prodatt_list(){
    $modelAtt = M('Rpj_prod_att');
    $productAtt = $modelAtt
                ->join('rpj_product ON rpj_product.product_id = rpj_prod_att.product_id')
                ->select();
    $this->assign('productAtt',$productAtt);
    $this->display();
  }

  public function prodatt_add(){
    $modelProduct = M('Rpj_product');
    $product = $modelProduct->select();
    $modelProdatt = M('Rpj_prod_att');
    if (IS_POST) {
      //处理text
      $modelProdatt->product_id = $_POST["product_id"];
      $modelProdatt->name = $_POST["name"];
      //处理文件
      $upload = new \Think\Upload();
      $upload->maxSize = 3145728;
      $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
      $upload->rootPath  =     './Application/Upload/prodatt/'; // 设置附件上传根目录
      $upload->savePath  =     ''; // 设置附件上传（子）目录
      $info = $upload->uploadOne($_FILES['url']);
      if(!$info){
          $this->error($upload->getError());
      }else{
         $modelProdatt->url = '/Application/Upload/prodatt/'.$info['savepath'].$info['savename'];
      }
      if ($modelProdatt->product_id != null) {
          $modelProduct->add();
      }
      //$modelProduct->add();
    }
    $this->assign('product',$product);
    $this->display();
  }
}

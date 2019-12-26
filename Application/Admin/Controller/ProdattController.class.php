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
      $upload->rootPath  =     './Upload/prodatt/'; // 设置附件上传根目录
      $upload->savePath  =     ''; // 设置附件上传（子）目录
      $info = $upload->uploadOne($_FILES['url']);
      if(!$info){
          $this->error($upload->getError());
      }else{
         $modelProdatt->url = '/Upload/prodatt/'.$info['savepath'].$info['savename'];
      }

      $modelProdatt->add();
    }
    $this->assign('product',$product);
    $this->display();
  }

  public function prodatt_edit($att_id){
    $model = M('Rpj_prod_att');
    $prodAtt = $model
                  ->join('rpj_product on rpj_product.product_id = rpj_prod_att.product_id')
                  ->find($att_id);
    $this->assign('prodAtt',$prodAtt);
    $this->display();
  }

  public function prodatt_submit(){
    $model = M('Rpj_prod_att');

    if(IS_POST){
      $model->find($_POST["att_id"]);
      if ($_POST["name"] != null) {
          $model->name = $_POST["name"];
          $model->save();
          echo "更新成功";
      }else{
          echo "更新失败";
      }

      $this->display('prodatt_edit');
    }
  }

  public function prodatt_del($att_id){
    $model = M('Rpj_prod_att');
    $model->delete($att_id);
    $productAtt = $model
                    ->join('rpj_product on rpj_product.product_id = rpj_prod_att.product_id')
                    ->select();
    $this->assign('productAtt',$productAtt);
    $this->display('prodatt_list');
  }
}

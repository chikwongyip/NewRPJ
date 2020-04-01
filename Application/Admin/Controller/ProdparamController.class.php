<?php
namespace Admin\Controller;
use Think\Controller;
class ProdparamController extends Controller
{
  public function prodparam_add()
  {
    $paramModel = M('Rpj_prod_param');
    $productModel = M('Rpj_product');
    $product=$productMode->select();
    if(IS_POST)
    {
      $product_id = $_POST["product_id"];
      if (!is_null($product_id))
      {
        $paramModel->product_id = $_POST["product_id"];
        $paramModel->param_name = $_POST["param_name"];
        $paramModel->param_desc = $_POST["param_desc"];
        $paramModel->add();
      }
    }
    $this->assign('product',$product);
    $this->display();
  }

  public function prodparam_edit($param_id)
  {
    $param = getParamListWithKey($param_id);
    $this->assign('param',$param);
    $this->display();
  }

  public function prodparam_submit()
  {
    if (IS_POST)
    {
      $paramModel = M('Rpj_prod_param');
      $paramModel->param_id = $_POST['param_id'];
      $paramModel->param_name = $_POST['param_name'];
      $paramModel->param_desc = $_POST['param_desc'];
      $paramModel->save();
    }
    $this->display('prodparam_edit');
  }

  public function prodparam_list()
  {
    $paramList = getParamList();
    $this->assign('paramList',$paramList);
    $this->display();
  }

  public function prodparam_del($param_id)
  {
    $paramModel = M('Rpj_prod_param');
    $paramModel->delete($param_id);
    $paramList = getParamList();
    $this->assign('paramList',$paramList);
    $this->display('prodparam_list');
  }
}

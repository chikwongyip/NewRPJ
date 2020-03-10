<?php
namespace Admin\Controller;
use Think\Controller;

class BrandController extends Controller
{
  public function brand_add()
  {
    $model = M('Rpj_brand');
    if(IS_POST)
    {
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
        $upload->rootPath  =     './Upload/brand/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $info = $upload->uploadOne($_FILES['brand_image']);
        if(!$info)
        {
            $this->error($upload->getError());
        }else
        {
            $model->brand_name  = $_POST["brand_name"];
            $model->brand_image = '/Upload/brand/'.$info['savepath'].$info['savename'];
            $model->add();
            $this->display();
        }
    }else
    {
        $this->display();
    }
  }

  public function brand_edit($brand_id)
  {
    $model = M('Rpj_brand');
    $item = $model->find($brand_id);
    $this->assign('item',$item);
    $this->display();

  }

  public function brand_list()
  {
    $model = M('Rpj_brand');
    $brand = $model->select();
    $this->assign('brand_list',$brand);
    $this->display();
  }

  public function brand_del($brand_id)
  {
    $model = M('Rpj_brand');
    $model->delete($brand_id);
    $attachement = $model->select();
    $this->assign('brand_list',$brand);
    $this->success('修改成功','',0);
  }

  public function brand_submit()
  {
    $model = M('Rpj_brand');

    if(IS_POST){
      $id = $_POST["brand_id"];
      $model->find($id);
      if ($_POST["brand_id"] != null)
      {
          $model->brand_name = $_POST["brand_name"];
          $model->save();
      }
       $this->display('brand_edit');
    }
  }
}

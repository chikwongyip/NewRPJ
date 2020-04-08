<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller
{
  public function category_list()
  {
    $model = M('Rpj_procategory');
    $category = $model->select();
    $this->assign('category',$category);
    $this->display();
  }

  public function category_add()
  {
    $model = M('Rpj_procategory');
    if (IS_POST) {
      $upload = new \Think\Upload();
      $upload->maxSize = 3145728;
      $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
      $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
      $upload->savePath  =     ''; // 设置附件上传（子）目录
      $info = $upload->uploadOne($_FILES['category_image']);
      if(!$info)
      {
          $this->error($upload->getError());
      }else
      {
        $model->category_image = '/Upload/'.$info['savepath'].$info['savename'];

      }
      if ($_POST['category_name'] !=null) {
        $model->category_name = $_POST['category_name'];
        $model->add();
      }
    }
    $this->display();
  }

  public function category_edit($category_id)
  {
    $model = M('Rpj_procategory');
    $item = $model->find($category_id);
    $this->assign('item',$item);
    $this->display();
  }

  public function category_submit()
  {
    $model = M('Rpj_procategory');
    if(IS_POST){

      $id = $_POST["category_id"];
      $model->find($id);
      $model->category_name = $_POST["category_name"];
      $upload = new \Think\Upload();
      $upload->maxSize = 3145728;
      $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
      $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
      $upload->savePath  =     ''; // 设置附件上传（子）目录
      $info = $upload->uploadOne($_FILES['category_image']);
      if(!$info)
      {
          // $this->error($upload->getError());
      }else
      {
        $model->category_image = '/Upload/'.$info['savepath'].$info['savename'];

      }
      $model->save();
      $this->display('category_edit');
    }
  }

  public function category_del($category_id)
  {
    $model = M('Rpj_procategory');
    $model->delete($category_id);
    $category = $model->select();
    $this->assign('category',$category);
    $this->display('category_list');
  }
}

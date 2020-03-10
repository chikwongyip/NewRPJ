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
      $model->category_name = $_POST['category_name'];
      $model->add();
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

      if ($_POST["category_name"] != null)
      {
          $model->category_name = $_POST["category_name"];
          $model->save();
          echo "更新成功";
      }else
      {
          echo "更新失败";
      }
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

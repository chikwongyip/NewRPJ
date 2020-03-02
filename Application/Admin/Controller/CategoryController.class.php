<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller
{
  public function category_list(){
    $model = M('Rpj_procategory');
    $category = $model->select();
    $this->assign('category',$category);
    $this->display();
  }

  public function category_add(){
    $this->display();
  }

  public function category_edit(){
    $this->display();
  }
}

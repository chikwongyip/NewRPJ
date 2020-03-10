<?php
namespace Admin\Controller;
use Think\Controller;
class AppfieldController extends Controller
{
  public function appfield_add()
  {
    if(IS_POST)
    {
      $app_name = $_POST["app_name"];
      if (!is_null($app_name))
      {
            $appModel = M('Rpj_appfield');
            $appModel->app_name = $app_name;
            $appModel->add();
      }
    }
    $this->display();
  }

  public function appfield_edit($app_id)
  {
    $appModel = M('Rpj_appfield');
    $appList = $appModel->find($app_id);
    $this->assign('appList',$appList);
    $this->display();
  }

  public function appfield_submit()
  {
    if (IS_POST)
    {
      $appModel = M('Rpj_appfield');
      $app_id = $_POST["app_id"];
      if (!is_null($app_id))
      {
        $appList=$appModel->find($app_id);
        $appModel->app_name = $_POST["app_name"];
        $appModel->save();

      }
    }
    $this->display('appfield_edit');
  }

  public function appfield_list()
  {
    $appModel = M('Rpj_appfield');

    $appList = $appModel->select();
    $this->assign('appList',$appList);
    $this->display();
  }

  public function appfield_del($app_id)
  {
    $appModel = M('Rpj_appfield');
    $appModel->delete($app_id);
    $appList = $appModel->select();
    $this->assign('appList',$appList);
    $this->display('appfield_list');
  }
}

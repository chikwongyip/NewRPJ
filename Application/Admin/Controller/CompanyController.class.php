<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends Controller{

    public function company_edit()
    {
      $model = M('Rpj_company');
      if (!IS_POST)
      {
        $company = $model->where('id=1')->select();
        $this->assign('company',$company);
        $this->display();
      }

      if (IS_POST)
      {
        if($_POST["name"] !=null)
        {
          $model->name = $_POST['name'];
        }
        if($_POST["icp"] !=null)
        {
          $model->icp = $_POST['icp'];
        }

        if($_POST["tel"] !=null)
        {
          $model->tel = $_POST['tel'];
        }

        if($_POST["address"] !=null)
        {
          $model->address = $_POST['address'];
        }

        if($_POST["description"] !=null)
        {
          $model->description= $_POST['description'];
        }

        if($_POST["email"] !=null)
        {
          $model->email = $_POST['email'];
        }

        if($_FILES['picture']['name'] !=null)
        {
          $upload = new \Think\Upload();
          $upload->maxSize = 3145728;
          $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
          $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
          $upload->savePath  =     ''; // 设置附件上传（子）目录
          $info = $upload->uploadOne($_FILES['picture']);
          if(!$info)
          {
              $this->error($upload->getError());
          }else
          {
              //$model->logo = '/Upload/'.$info['savepath'].$info['savename'];
              $imagePath = './Public/Upload/'.$info['savepath'].$info['savename'];
              $image = new \Think\Image();
              $image->open($imagePath);
              $image->thumb(213,33)->save('./Public/Upload/'.$info['savepath'].$info['savename']);
              $model->logo = '/Upload/'.$info['savepath'].$info['savename'];

          }
        }

        if($_FILES['background']['name'] !=null)
        {
          $upload = new \Think\Upload();
          $upload->maxSize = 3145728;
          $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
          $upload->rootPath  =     './Public/Upload/'; // 设置附件上传根目录
          $upload->savePath  =     ''; // 设置附件上传（子）目录
          $info = $upload->uploadOne($_FILES['background']);
          if(!$info)
          {
              $this->error($upload->getError());
          }else
          {
              $model->background = '/Upload/'.$info['savepath'].$info['savename'];
          }
        }
        $model->where('id=1')->save();
        $company = $model->where('id=1')->select();
        $this->assign('company',$company);
        $this->display();
    }
  }
}

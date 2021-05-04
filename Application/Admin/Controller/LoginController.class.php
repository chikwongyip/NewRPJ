<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function login()
    {
      if(IS_POST)
      {
        $userModel = M('Rpj_user');
        $username = I('post.username');
        $pwd = I('post.password');
        $userInfo = $userModel->where(array('username'=>$username))->find();
        if(!$userInfo)
        {
          $this->error('用户名错误','',1);
        }
        if($userInfo['password'] !== $pwd)
        {
          $this->error('密码错误','',1);
        }else{
          cookie('username',$userInfo['username']);
          $this->success('登陆成功',U('admin/index/index'),0);
        }
      }
      $this->display();
    }
}

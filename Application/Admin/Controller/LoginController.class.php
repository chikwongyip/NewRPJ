<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }

    // public function addUser(){
    //     $rpjUser = D('rpj_user');
    //     var_dump($rpjUser);
    //     $rpjUser->username = 'admin';
    //     $rpjUser->password = '123';
    //     $rpjUser->add();
    // }
}

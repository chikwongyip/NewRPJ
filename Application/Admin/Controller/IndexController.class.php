<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $url = U('Admin/Introduce/introduce');
        //echo(var_dump($url)) ;
        $this->assign('url',$url);
        $this->display();
    }
}

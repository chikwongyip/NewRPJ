<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
        $model = M('Rpj_company');
        $company = $model->find(1);
        $this->assign('company',$company);

        $this->display();
    }
}

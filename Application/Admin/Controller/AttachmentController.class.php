<?php
namespace Admin\Controller;
use Think\Controller;
class AttachmentController extends Controller {
    public function attachment_edit(){
        $model = M('Rpj_attachment');
        if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $info = $upload->uploadOne($_FILES['url']);
            if(!$info){
                $this->error($upload->getError());
            }else{
                
                $model->name = $_GET('name');
                $model->url = $info['url']['savepath'].$info['url']['savename'];
                $model->add();
            }    
        }else {
            $model->name = '1111112';
            $model->url = 'dasdasda';
            $model->add();
            $this->display();
        }
    } 
    public function attachment_list(){
        if(IS_POST){
   
        }else {
            $this->display();
        }
        
    }


}
<?php
namespace Admin\Controller;
use Think\Controller;
class AttachmentController extends Controller {
    public function attachment_edit(){
        $model = M('Rpj_attachment');
        if(IS_POST){
            $model->name = '1111112';
            $model->url = 'dasdasda';
            $model->add();
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

            $this->display();
        }
    }
    //附件查询
    public function attachment_list(){
      $model = M('Rpj_attachment');
      $attachement = $model->select();
      $this->assign('attach',$attachement);
      $this->display();

    }

    //删除附件

    public function attachment_del($id){
      $model = M('Rpj_attachment');
      $model->delete($id);
      $attachement = $model->select();
      $this->assign('attach',$attachement);
      $this->display('Attachment_list');
      //attachment_list();

    }

}

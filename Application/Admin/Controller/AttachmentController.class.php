<?php
namespace Admin\Controller;
use Think\Controller;
class AttachmentController extends Controller {
    public function attachment_add(){
        $model = M('Rpj_attachment');
        if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
            $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $info = $upload->uploadOne($_FILES['url']);
            if(!$info){
                $this->error($upload->getError());
            }else{
                $model->name = $_POST["name"];
                $model->url = 'Upload/'.$info['savepath'].$info['savename'];
                $model->add();
                $this->display();
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
    }

    public function attachment_edit($id){
      $model = M('Rpj_attachment');
      $item = $model->where("id = $id")->select();
      $this->assign('item',$item);
      $this->display();
    }

}

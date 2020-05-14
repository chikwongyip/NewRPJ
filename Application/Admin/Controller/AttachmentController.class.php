<?php
//附件上传模块
namespace Admin\Controller;
use Think\Controller;
class AttachmentController extends Controller
{
    public function attachment_add()
    {
        $model = M('Rpj_attachment');
        $brandModel = M('Rpj_brand');
        $categoryModel = M('rpj_procategory');
        $brand = $brandModel->select();
        $category=$categoryModel->select();
        $this->assign('brand',$brand);
        $this->assign('category',$category);
        if(IS_POST)
        {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
            $upload->rootPath  =      './Public/Upload/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $info = $upload->uploadOne($_FILES['url']);
            if(!$info)
            {
                $this->error($upload->getError());
            }else
            {
                $model->name = $_POST["name"];
                $model->brand_id=$_POST["brand_id"];
                $model->category_id=$_POST["category_id"];
                $model->url = '/Upload/'.$info['savepath'].$info['savename'];
                $model->add();
                $this->display();
            }
        }else
        {

            $this->display();
        }
    }
    //附件查询
    public function attachment_list()
    {
      $model = M('Rpj_attachment');

      $attachement = $model
                      ->join('rpj_procategory on rpj_procategory.category_id = rpj_attachment.category_id')
                      ->join('rpj_brand on rpj_brand.brand_id = rpj_attachment.brand_id')
                      ->select();

      $this->assign('attach',$attachement);

      $this->display();
    }

    //删除附件

    public function attachment_del($id)
    {
      $model = M('Rpj_attachment');
      $model->delete($id);
      $attachement = $model
                      ->join('rpj_procategory on rpj_procategory.category_id = rpj_attachment.category_id')
                      ->join('rpj_brand on rpj_brand.brand_id = rpj_attachment.brand_id')
                      ->select();
      $this->assign('attach',$attachement);
      $this->display('Attachment_list');
    }

    public function attachment_edit($id)
    {
      $model = M('Rpj_attachment');
      $brandModel = M('Rpj_brand');
      $categoryModel = M('rpj_procategory');
      $brand = $brandModel->select();
      $category=$categoryModel->select();
      $this->assign('brand',$brand);
      $this->assign('category',$category);
      $item = $model->find($id);
      $this->assign('item',$item);
      $this->display();
    }

    public function attachment_submit()
    {
      $model = M('Rpj_attachment');

      if(IS_POST)
      {
        $id = $_POST["id"];
        $model->find($id);
        if ($_POST["name"] != null)
        {
            $model->name = $_POST["name"];
            $model->brand_id = $_POST["brand_id"];
            $model->category_id=$_POST["category_id"];
            $model->save();
            echo "更新成功";
        }else
        {
            echo "更新失败";
        }
        $this->display('Attachment_edit');
      }
    }

}

<?php
//附件上传模块
namespace Admin\Controller;
use Think\Controller;
class ProductpicController extends Controller
{
    public function productpic_add()
    {
        $model = M('Rpj_product_pic');
        if(IS_POST)
        {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
            $upload->rootPath  =     './Application/Upload/attach/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $info = $upload->uploadOne($_FILES['url']);
            if(!$info)
            {
                $this->error($upload->getError());
            }else
            {
                $model->name = $_POST["name"];
                $model->url = '/Application/Upload/attach/'.$info['savepath'].$info['savename'];
                $model->add();
                $this->display();
            }
        }else
        {

            $this->display();
        }
    }
    //附件查询
    public function productpic_list()
    {
      $product_pic = getProductPic();
      $this->assign('product_pic',$product_pic);
      $this->display();
    }

    //删除附件

    public function productpic_del($id)
    {
      $model = M('Rpj_attachment');
      $model->delete($id);
      $attachement = $model->select();
      $this->assign('attach',$attachement);
      $this->display('Attachment_list');
    }

    public function Productpic_edit($id)
    {
      $model = M('Rpj_attachment');
      $item = $model->find($id);
      $this->assign('item',$item);
      $this->display();
    }

    public function productpic_submit()
    {
      $model = M('Rpj_attachment');

      if(IS_POST)
      {
        $id = $_POST["id"];
        $model->find($id);
        if ($_POST["name"] != null)
        {
            $model->name = $_POST["name"];
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

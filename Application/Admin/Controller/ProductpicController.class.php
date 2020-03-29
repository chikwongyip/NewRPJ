<?php
//附件上传模块
namespace Admin\Controller;
use Think\Controller;
class ProductpicController extends Controller
{
    public function productpic_add()
    {

        $model = M('Rpj_product_pic');
        $modelProduct = M('Rpj_product');
        $product = $modelProduct->select();
        $this->assign('product',$product);
        if(IS_POST)
        {
            //需要制作缩略图
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg','pdf');// 设置附件上传类型
            $upload->rootPath  =      './Public/Upload/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $info = $upload->uploadOne($_FILES['product_pic']);

            if(!$info)
            {
                $this->error($upload->getError());
            }else
            {
                $model->product_id = $_POST["product_id"];
                $model->product_pic = '/Upload/'.$info['savepath'].$info['savename'];
                if ($_POST["is_active"]!=null) {
                  $model->is_active = 'X';
                }
                $img_path = './Public/Upload/'.$info['savepath'].$info['savename'];

                $image = new \Think\Image();
                $image->open($img_path);

                $image->thumb(125,125)->save('./Public/Upload/thumb/thumb_'.$info['savename']);
                $model->product_thumb = '/Upload/thumb/thumb_'.$info['savename'];
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

    public function productpic_del($pic_id)
    {
      $model = M('Rpj_product_pic');
      $model->delete($pic_id);
      $product_pic = getProductPic();
      $this->assign('product_pic',$product_pic);
      $this->display('Productpic_list');
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
      $model = M('Rpj_product_pic');

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

<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function news_add(){
      if (IS_POST) {
        $model = M('Rpj_news');
        $model->news_title = $_POST["news_title"];
        $model->news_content = $_POST["news_content"];
        if ($_POST["is_hot"]=="X") {
          $model->is_hot = "checked";
        }
        $model->date = date("Y-m-d");
        $model->add();
      }
      $this->display();
    }

    public function news_list(){
      $model = M('Rpj_news');
      $news_list = $model->select();
      $this->assign('news_list',$news_list);
      $this->display();
    }

    public function news_edit($news_id){
      $model = M('Rpj_news');
      $news_list = $model->find($news_id);
      $this->assign('news_list',$news_list);
      $this->display();
    }

    public function news_submit(){
      if(IS_POST){
        $model = M('Rpj_news');
        $id = $_POST["news_id"];
        $model->find($id);
        if ($_POST["name"] != null) {
            $model->news_name = $_POST["news_name"];
            $model->news_content = $_POST["news_content"];
            $model->is_hot = $_POST["is_hot"];
            $model->save();
            echo "更新成功";
        }else{
            echo "更新失败";
        }
        $this->display('News_edit');
      }
    }
    public function news_del($news_id){
      $model = M('Rpj_news');
      $model->delete($news_id);
      $news_list = $model->select();
      $this->assign('news_list',$news_list);
      $this->display('News_list');
    }
}

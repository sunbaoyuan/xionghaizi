<?php
namespace Admin\Controller;

use Think\Controller;

class ShareController extends Controller {
   public function lists() {
            //分页
            $sharemodel=M('share');
            import('Org.Util.Page');
            $count=$sharemodel->count();
            $page=new \Think\Page($count,3);
            $nowPage=isset($_GET['p'])?intval($_GET['p']):1;
            $page->setConfig('first','第一页');
            $page->setConfig('prev','前一页');
            $page->setConfig('next','后一页');
            //进行分页数据查询，注意limit方法的参数要使用Page类的属性
            $sharelist=$sharemodel->order('shareid desc')->page($nowPage.',4')->select();
            /*$user['attention]'=*/
            $show=$page->show();
            $this->assign('page',$show);
            $this->assign('sharelist', $sharelist);  //传值到模板
            $this->display();
        }

       //
    public function lookshare(){
        $id=$_GET['id'];
        if ($id == '') {
            exit("bad param!");
        }

        $data = M("share")->where("shareid=$id")->find();
        $this->assign("data", $data);
        $this->display();
    }


       public function delete(){
		//全部删除
        $id = $_GET['shareid'];
        // dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("Share")->delete($value);
            }  
            // $this->success("删除成功！");
            $this->redirect('lists',0);
        } 
        //单个删除
        else{
            if(M("Share")->delete($id)){
                // $this->success("删除成功！");
                $this->redirect('lists',0);
            }
        }       
    }

}
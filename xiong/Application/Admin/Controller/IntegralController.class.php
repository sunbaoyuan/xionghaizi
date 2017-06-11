<?php
namespace Admin\Controller;

use Think\Controller;

class IntegralController extends Controller {
   public function lists() {
            //分页
            $integralmodel=M('integral');
            import('Org.Util.Page');
            $count=$integralmodel->count();
            $page=new \Think\Page($count,3);
            $nowPage=isset($_GET['p'])?intval($_GET['p']):1;
            $page->setConfig('first','第一页');
            $page->setConfig('prev','前一页');
            $page->setConfig('next','后一页');
            //进行分页数据查询，注意limit方法的参数要使用Page类的属性
            $integrallist=$integralmodel->order('integralid desc')->page($nowPage.',4')->select();
            /*$user['attention]'=*/
            $show=$page->show();
            $this->assign('page',$show);
            $this->assign('integrallist', $integrallist);  //传值到模板
            $this->display();
        }

       //
    public function lookintegral(){
        $id=$_GET['id'];
        if ($id == '') {
            exit("bad param!");
        }

        $data = M("integral")->where("integralid=$id")->find();
        $this->assign("data", $data);
        $this->display();
    }


       public function delete(){
		//全部删除
        $id = $_GET['integralid'];
        // dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("Integral")->delete($value);
            }  
            // $this->success("删除成功！");
            $this->redirect('lists',0);
        } 
        //单个删除
        else{
            if(M("Integral")->delete($id)){
                // $this->success("删除成功！");
                $this->redirect('lists',0);
            }
        }       
    }
}
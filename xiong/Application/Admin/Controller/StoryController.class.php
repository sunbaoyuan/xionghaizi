<?php
namespace Admin\Controller;

use Think\Controller;

class StoryController extends Controller {
    public function lists(){
		//分页
            $storymodel=M('story');
            import('Org.Util.Page');
            $count=$storymodel->count();
            $page=new \Think\Page($count,3);
            $nowPage=isset($_GET['p'])?intval($_GET['p']):1;
            $page->setConfig('first','第一页');
            $page->setConfig('prev','前一页');
            $page->setConfig('next','后一页');
            //进行分页数据查询，注意limit方法的参数要使用Page类的属性
            $story=$storymodel->order('storyid desc')->page($nowPage.',4')->select();
            $show=$page->show();
            $this->assign('page',$show);
            $this->assign('story', $story);  //传值到模板
            $this->display();
	}

    //编辑修改故事
    public function editstory(){
        $storyModel=D("story");
        $id=$_GET['storyid'];
        $story=$storyModel->find($id);
        $this->assign('story',$story);

        $this->display();
    }
    public function update(){
        if (IS_POST) {
            $model=M("Story");
            $model->create();
            if ($model->save()) {
                // $this->success("修改成功",U("BookCategory/bookcategory"));
                $this->redirect('Story/lists',0);
            }
            else{
                $this->error($model->getError());
            }
        }   
    }

    //添加故事
    public function doAdd(){
        if (!IS_POST) {
            exit("bad request请求");
        }
        $storyModel=M('Story');
        $story=$storyModel->create();
        if($storyModel->add($data)){
            /*$this->success('添加成功',U("Story/lists"));*/
            $this->redirect('Story/lists',0);
        }else{
            $this->error('数据添加失败');
        }
    }

	//删除故事
	public function delete(){
		//全部删除
        $id = $_GET['storyid'];
        // dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("Story")->delete($value);
            }  
            // $this->success("删除成功！");
            $this->redirect('lists',0);
        } 
        //单个删除
        else{
            if(M("Story")->delete($id)){
                // $this->success("删除成功！");
                $this->redirect('lists',0);
            }
        }       
    }

}
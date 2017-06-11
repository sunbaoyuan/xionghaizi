<?php
namespace Admin\Controller;

use Think\Controller;

class StudyController extends Controller {
   public function lists(){
		//分页
            $study=M('Study');
            import('Org.Util.Page');
            $count=$study->count();
            $page=new \Think\Page($count,3);
            $nowPage=isset($_GET['p'])?intval($_GET['p']):1;
            $page->setConfig('first','第一页');
            $page->setConfig('prev','前一页');
            $page->setConfig('next','后一页');
            //进行分页数据查询，注意limit方法的参数要使用Page类的属性
           /* $challenge=$challengemodel->order('challengeid desc')->page($nowPage.',4')->select();*/
            $studylist=$study->join('studycategories ON study.scid = studycategories.scid')
		    ->order('study.addtime desc')->page($nowPage.',4')->select();
            $show=$page->show();
            $this->assign('page',$show);
            $this->assign('studylist', $studylist);  //传值到模板
            $this->display();
	}


	public function addstudy(){
		$tags=M('Studycategories');
		$taglist=$tags->join('study ON studycategories.scid = study.scid')
		->order('pid asc')->group('typescname')->select();
		$this->assign('tags',$taglist);

		$this->display();
	}
	//添加
	public function doAdd(){
		if (!IS_POST) {
			exit("bad request请求");
		}
		$studyModel=M('Study');
		$study=$studyModel->create();
		if($studyModel->add($data)){
			$this->redirect('Study/lists',0);
		}else{
			$this->error('数据添加失败');
		}
	}



	//编辑修改
	public function editstudy(){
		$studyModel=M("Study");
		$id=I('studyid');
		$taglist=$studyModel
		->join('studycategories ON study.scid = studycategories.scid')
		->select();
		$study=$studyModel->find($id);
		
		$this->assign('data',$taglist);
		$this->assign('study',$study);

		$this->display();
	}
	public function update(){
		if (IS_POST) {
			$model=M("study");
			$id=I('scid');
			$data=$model->create();
			dump($data);
			if ($model->where("scid=".$id)->save($data)) {
				/*$this -> success("数据更新成功",U("Study/lists"));*/
				$this->redirect('Study/lists',0);
			}
			else{
				$this->error($model->getError());
			}
		}	
	}


	//删除题目
	public function delete(){
		//全部删除
        $id = $_GET['studyid'];
        // dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("Study")->delete($value);
            }  
            // $this->success("删除成功！");
            $this->redirect('lists',0);
        } 
        //单个删除
        else{
            if(M("Study")->delete($id)){
                // $this->success("删除成功！");
                $this->redirect('lists',0);
            }
        }       
    }

}
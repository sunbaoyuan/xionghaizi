<?php
namespace Admin\Controller;

use Think\Controller;

class ChallengeController extends Controller {
   public function lists(){
		//分页
            $challenge=M('Challenge');
            import('Org.Util.Page');
            $count=$challenge->count();
            $page=new \Think\Page($count,3);
            $nowPage=isset($_GET['p'])?intval($_GET['p']):1;
            $page->setConfig('first','第一页');
            $page->setConfig('prev','前一页');
            $page->setConfig('next','后一页');
            //进行分页数据查询，注意limit方法的参数要使用Page类的属性
           /* $challenge=$challengemodel->order('challengeid desc')->page($nowPage.',4')->select();*/
            $challengelist=$challenge->join('challengecategories ON challenge.ccid = challengecategories.ccid')
		    ->order('challenge.addtime desc')->page($nowPage.',4')->select();
            $show=$page->show();
            $this->assign('page',$show);
            $this->assign('challengelist', $challengelist);  //传值到模板
            $this->display();
	}


	public function addchallenge(){
		$tags=M('challengecategories');
		$taglist=$tags->join('challenge ON challengecategories.ccid = challenge.ccid')
		->order('pid asc')->group('typeccname')->select();
		$this->assign('tags',$taglist);

		$this->display();
	}
	//添加图书
	public function doAdd(){
		if (!IS_POST) {
			exit("bad request请求");
		}
		$challengeModel=M('Challenge');
		$challenge=$challengeModel->create();
		if($challengeModel->add($data)){
			$this->redirect('Challenge/lists',0);
		}else{
			$this->error('数据添加失败');
		}
	}

	//编辑修改
	/*public function editchallenge(){
        $challengeModel=D("challenge");
        $id=$_GET['challengeid'];
        $challenge=$challengeModel->find($id);
        $this->assign('challenge',$challenge);

        $this->display();
    }*/
	public function editchallenge(){
		$challengeModel=M("Challenge");
		// $id=$_GET['challengeId'];
		$id=I('challengeId');
		$taglist=$challengeModel
		->join('challengecategories ON challenge.ccid = challengecategories.ccid')
		->select();
		$challenge=$challengeModel->find($id);
		
		$this->assign('data',$taglist);
		$this->assign('challenge',$challenge);

		$this->display();
	}
	public function update(){
		if (IS_POST) {
			$model=M("challenge");
			// $id=$_GET['challengeId'];
			$id=I('ccid');
			$data=$model->create();
			dump($data);
			if ($model->where("ccid=".$id)->save($data)) {
				$this -> success("数据更新成功",U("challenge/lists"));
			}
			else{
				$this->error($model->getError());
			}
		}	
	}







	//删除题目
	public function delete(){
		//全部删除
        $id = $_GET['challengeid'];
        // dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("Challenge")->delete($value);
            }  
            // $this->success("删除成功！");
            $this->redirect('lists',0);
        } 
        //单个删除
        else{
            if(M("Challenge")->delete($id)){
                // $this->success("删除成功！");
                $this->redirect('lists',0);
            }
        }       
    }

}
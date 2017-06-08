<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	//普通用户注册
    public function personal_register(){
    	$this->display();
    }
    
    //普通用户登录
    public function personallogin(){
        $this->display();
    }

        
    //退出
    function logout() {
        $_SESSION['username']="";
        $this->redirect('Index/index',0);
        /* $this->success("退出成功",U("Index/index"));*/
    }

    //普通用户——判断是否可以登录
    public function checkUserId(){
        if(!IS_POST)
        {
            exit("bad request!");
        }
        else {
            $userModel = M('users');
            $condition=array(
                'username' => I("post.username"),
                'pass' => I("post.pass")
            );
            $result=$userModel->where($condition)->count();
            $result2=$userModel->where($condition)->select();
            
            if ($result>0) {
                session("username",I("post.username"));
                session("userid",$result2[0]['id']);
                    
                $this->redirect('Login/index',0);
            }
            else{
                // $this->error("用户名或密码不正确");
                echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
            }
        }
    }

        
    //普通用户——判断是否符合注册要求
    public function userAdd(){
        if (!IS_POST) {
        	exit("bad request!");
        }
        $userModel = M("users");
        $data = $userModel->create();
        if (!$data) {  
            $this->error($userModel->getError());
        }
        $username=$_POST['username'];
        $map['username'] =$username;
        $checkRepeat=$userModel->where($map)->select();
        if($checkRepeat)
        {
            // $this->error('用户名已存在');
            echo "<script>alert('用户名已存在');history.go(-1);</script>";
        }

        $data['userimage']="../Public/uploads/userimage/2017-05-22/1.jpg";
        // $data['jointime']=time();
        if ($userModel->add($data)) { //写入数据库
                $this->redirect('login',0);
            }
            else {
                // $this->error("注册失败");
                echo "<script>alert('注册失败');history.go(-1);</script>";
            }
    }
}
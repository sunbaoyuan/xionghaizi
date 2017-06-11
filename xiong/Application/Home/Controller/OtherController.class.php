<?php
namespace Home\Controller;
use Think\Controller;
class OtherController extends Controller {

    public function mine(){


    $this -> assign("first",$g);
    $this -> assign("list",$list);
    $this->display();
    }

}
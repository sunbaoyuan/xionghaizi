<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min-1.css">

<script src="/xionghaizi/Public/front/js/jquery-1.11.3.min.js"></script>
<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<style>
.ui-bar-f
{
background:rgba(144,238,144,0.5);
}
.quit{float: right;}
a:link{text-decoration:none; }
.word{font-size: 13px}
</style>

<body>

<div data-role="page" id="pageone">
	  <div data-role="header" data-theme="f" >
  		<h1>设置</h1>
  		<a data-ajax="false" href="/xionghaizi/index.php/Home/Other/mine" style="border-radius:10px">返回</a>
  	</div>

  	<div data-role="content">
      <ul data-role="listview" data-inset="true">
        <li><a href="#page1">系统消息</a></li>
      </ul>
      <ul data-role="listview" data-inset="true">
        <li><a href="#page2">关于熊孩子</a></li>
        <li><a href="#page3" data-rel="popup"  data-position-to="window">退出</a></li>
      </ul>

      <div data-role="popup" id="page3" class="ui-content">
        <h3>账号管理</h3>
        <p>你确定要退出此账号么？</p><br/>
        <span class="quit"><a href="/xionghaizi/index.php/Home/Other/settings">取消</a>&nbsp;&nbsp;<a href="/xionghaizi/index.php/Home/Login/login" rel="external">确定</a></span><br/>
      </div>

      <ul data-role="listview" data-inset="true">
        <li><a href="#page4">帮助与反馈</a></li>
        <li><a href="#page5">版本 <span style="float:right">1.0.1</span></a></li>
      </ul>
    </div>
</div>
<div data-role="page" id="page1">
  <div data-role="header" data-theme="f">
    <a href="#pageone">返回</a>
    <h1>系统消息</h1>
  </div>
  <div data-role="content">
    <p>暂无消息</p>
  </div>
</div>


<div data-role="page" id="page2">
  <div data-role="header" data-theme="f" data-position="fixed">
    <a href="#pageone">返回</a>
    <h1>关于熊孩子</h1>
  </div>
  <div data-role="content">
      <div class="logo">
        <div><p style="text-align:center"><img src="images/head.jpg"  alt="logo" /></p></div>
        <p style="text-align:center" >熊孩子</p>
      </div>
  </div>
  <ul data-role="listview" data-inset="true">
      <li data-role="list-divider" style="white-space:pre-wrap;">简介：《熊孩子》旨在让每个孩子都沉浸在学习的乐趣中，让他们既能在游戏中体会到乐趣，又能学习到知识。
      </li>
      <li data-role="list-divider">开发者团队：蚂蚁团队</li>
      <li data-role="list-divider" style="white-space:pre-wrap;">开发者成员：孙宝圆  高家豪  王宁  曹文奇  赵文涛
      </li>
  </ul>
</div>

<div data-role="page" id="page4">
  <div data-role="header" data-theme="f" data-position="fixed">
    <a href="#pageone">返回</a>
    <h1>帮助与反馈</h1>
  </div>
  <div data-role="content">
    <ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="搜索">
      <p class="word">热点问题</p>
      <li><a href="#">登陆出现问题？</a></li>
      <li><a href="#">出现闪退怎么办？</a></li>
      <li><a href="#">登陆不上去怎么办？</a></li>
      <li><a href="#">积分不对怎么办？</a></li>
      <li><a href="#">学习内容怎么样？</a></li>
      <li><a href="#">积分清零了怎么办？</a></li>
      <li><a href="#">不更新版本可以么？</a></li>
      <li><a href="#">使用过程中出现卡顿现象怎么办？</a></li>
    </ul>   
  </div>
</div>

  

<div data-role="page" id="page5">
  <div data-role="header" data-theme="f" data-position="fixed">
    <a href="#pageone">返回</a>
    <h1>版本</h1>
  </div>
  <div data-role="content">
    <p>已经是最新版本</p>
  </div>
</div>


</body>
</html>
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
.ui-bar-b{background-color: #EE0000;border: 0px}
</style>

<body>

<div data-role="page" id="pageone">
	<div data-role="header" data-theme="f" >
  		<h1>积分排行榜</h1>
  </div>
  
  <div data-role="content">
    <div class="ui-grid-b">
      <div class="ui-block-a">
        <div class="ui-bar ui-bar-b h60">排名</div>
      </div>
      <div class="ui-block-b">
        <div class="ui-bar ui-bar-b h60">昵称</div>
      </div>
      <div class="ui-block-c">
        <div class="ui-bar ui-bar-b h60">积分</div>
      </div>
    </div>    

    <div class="ui-grid-b">
      <div class="ui-block-a">
        <div class="ui-bar ui-bar-c h60">1</div>
      </div>
      <div class="ui-block-b">
        <div class="ui-bar ui-bar-c h60">我的昵称</div>
      </div>
      <div class="ui-block-c">
        <div class="ui-bar ui-bar-c h60">900</div>
      </div>
    </div>

  </div>


    <div data-role="footer"data-position="fixed" data-fullscreen="true">
  		<div data-role="navbar" >
   			<ul>
   			<li><a  href="/xionghaizi/index.php/Home/Login/index" rel="external" data-icon="home">首页</a></li>
   			<li><a  href="/xionghaizi/index.php/Home/Other/xiaoxi" rel="external" data-icon="mail">消息</a></li>
   			<li><a  href="#" data-icon="star">积分榜</a></li>
   			<li><a  href="/xionghaizi/index.php/Home/Other/mine" rel="external" data-icon="user">我的</a></li>
   			</ul>
   		</div>
   	</div>
</div>

</body>
</html>
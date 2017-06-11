<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min-1.css">
<link rel="stylesheet" href="/xionghaizi/Public/front/css/mine.css">
<script src="/xionghaizi/Public/front/js/jquery-1.11.3.min.js"></script>
<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

<div data-role="page" id="pageone">
	<div data-role="header" data-theme="f" >
		<a data-ajax="false" href="/xionghaizi/index.php/Home/Other/settings" style="border-radius:10px">设置</a>
  		<h1>熊孩子</h1>
  		<a data-ajax="false" href="/xionghaizi/index.php/Home/Other/edit" style="border-radius:10px">编辑</a>
  	</div>

  	<div data-role="content">
  		<div class="imgtest">
  			<figure>
  	 			<div><img src="/xionghaizi/Public/front/images/head.jpg"  alt="我的头像" /></p></div>
         		<p style="text-align:center" >我的昵称</p>
    		</figure>
    	</div>

    	<div class="content">
    		<ul data-role="listview" data-inset="true">
    			<li>昵称：<?php echo ($list["username"]); ?></li>
    			<li>签名：今天很开心</li>
    			<li>性别：男</li>
        		<li>生日：2000/02/02</li>
        		<li>学校：熊孩子学校</li>
        		<li>积分：900</li>
    		</ul>
    	</div>
    </div>

    <div data-role="footer"data-position="fixed" data-fullscreen="true">
  		<div data-role="navbar" >
   			<ul>
   			<li><a  href="/xionghaizi/index.php/Home/Login/index" rel="external" data-icon="home">首页</a></li>
   			<li><a  href="/xionghaizi/index.php/Home/Other/xiaoxi" rel="external" data-icon="mail">消息</a></li>
   			<li><a  href="/xionghaizi/index.php/Home/Other/integral" rel="external" data-icon="star">积分榜</a></li>
   			<li><a  href="#" data-icon="user">我的</a></li>
   			</ul>
   		</div>
   	</div>
</div>

</body>
</html>
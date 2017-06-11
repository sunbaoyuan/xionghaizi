<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
        <meta charset="utf-8">
        
		<title>首页</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="/xionghaizi/Public/front/css/index.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    	
	</head>
	
	<body>
		<div data-role="page" id="pageone" >
	        <div data-role="header" id="col">
	            <h1>熊孩子</h1>
	            
	        </div>

	        <div data-role="content" id="cont">
	        	<div id="text">
	            	<p>小朋友</p>
	            </div>
	            <div id="text1">
	            	<p>准备好了吗？</p>
	            </div>
	            <a href="/xionghaizi/index.php/Home/Challenge/challenge" rel="external">
	            	<div id="one">
		            	<p>挑</p>
		            	<p>战</p>
	            	</div>
	            </a>
	            <a href="/xionghaizi/index.php/Home/Study/study" rel="external">
	            	<div id="two">
		            	<p>学</p>
		            	<p>习</p>
	            	</div>
	            </a>
	            <a href="/xionghaizi/index.php/Home/Story/story" rel="external">
	            	<div id="three">
		            	<p>小故事</p>
	            	</div>
	            </a>
	            
	        </div>

	        <div data-role="footer" data-position="fixed" data-fullscreen="true">
	            <div data-role="navbar">
					<ul>
				    <li><a href="#" data-role="button" data-icon="home" data-iconpos="notext" class="ui-btn-active">首页</a></li>
				    <li><a href="/xionghaizi/index.php/Home/Other/xiaoxi" rel="external" data-role="button" data-icon="mail" data-iconpos="notext">消息</a></li>
					<li><a href="/xionghaizi/index.php/Home/Integral/integral" rel="external" data-role="button" data-icon="star" data-iconpos="notext">积分榜</a></li>
					<li><a href="/xionghaizi/index.php/Home/Other/mine" rel="external" data-role="button" data-icon="user" data-iconpos="notext">我的</a></li>
					</ul>
				</div>
	        </div>
	    </div> 
	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
        <meta charset="utf-8">
        
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.css"/>
    	<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.min.css">
        <link rel="stylesheet" href="/xionghaizi/Public/front/css/login.css">
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div data-role="page" id="pageone">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1>登&nbsp;&nbsp;录</h1>
	            
	        </div>
	        
	        <form action="/xionghaizi/index.php/Home/Login/checkUserId" method="post" data-ajax="false" enctype="multipart/form-data">	
	        <div data-role="content" id="cont">
	            <div id="img">
	            	<img src="/xionghaizi/Public/front/images/xiong.jpg" width="120" height="120" style="border-radius:100px">
	            </div>

	            <div id="text">
	            <input data-role="none" type="text" id="username" name="username" placeholder="&nbsp;&nbsp;请输入账号" style="background-color:transparent;border:none;margin-left:9%"/>
	            </div>
	            <div id="text1">
	            <input data-role="none" type="password" id="pass" name="pass" placeholder="&nbsp;&nbsp;请输入密码" style="background-color:transparent;border:none;margin-left:9%"/>
	            </div>
	            <div style="margin-left:15%;margin-top:1%;width:30%;float:left">
	            	<input  type="checkbox" id="checkbox" >
	            	<p style="font-size:14px ;margin-left:15%;margin-top:0%;font-weight:normal">&nbsp&nbsp记住密码</p>
	            </div>
	            <div style="float:left;margin-left:22%;margin-top:2%">
	            	<a href="/xionghaizi/index.php/Home/Login/regist" rel="external" style="font-weight:normal">立即注册</a>
	            </div>
	            <br/>
	            <br/>
	            <br/>
	            <button rel="external" data-role="button" type="submit" style="margin-top:-5%;width:70%;margin-left:15%;border-radius:100px;background:rgba(0,0,0,0.5);color:white;font-size:18px">登&nbsp;录</button>
	        </div>
	        </form>

	        
	    </div> 
	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
        <meta charset="utf-8">
        
		<title>注册</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.css"/>
    	<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.min.css">
        <link rel="stylesheet" href="/xionghaizi/Public/front/css/regist.css">
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div data-role="page" id="pageone">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1>注&nbsp;&nbsp;册</h1>
	            
	        </div>

	        <form action="/xionghaizi/index.php/Home/Login/userAdd" data-ajax="false" method="post" enctype="multipart/form-data">	
	        <div data-role="content" id="cont">
	            <div id="img">
	            	<img src="/xionghaizi/Public/front/images/xiong.jpg" width="120" height="120" style="border-radius:100px">
	            </div>

	            <div id="text">
	            <input data-role="none" type="text" id="username"  name="username" placeholder="&nbsp;&nbsp;请输入账号" style="background-color:transparent;border:none;margin-left:9%" onblur="userblur()"/><span id="usererror" style="font-size:10px;font-weight:bold" ></span>
	            </div>
	            <div id="text1">
	            <input data-role="none" type="password" id="password" name="password" placeholder="&nbsp;&nbsp;设置密码" style="background-color:transparent;border:none;margin-left:9%" onblur="pwdblur()"/><span id="pwderror" style="font-size:10px;font-weight:bold"></span>
	            </div>
                 <div id="text2">
                <input data-role="none" type="password" id="repsd"   name="pass" placeholder="&nbsp;&nbsp;确认密码" style="background-color:transparent;border:none;margin-left:9%" onblur="repwdblur()"/><span id="repwderror" style="font-size:10px;font-weight:bold;"></span>
                </div>
	            <div style="float:right;margin-right:15%;margin-top:2%">
	            	<a href="/xionghaizi/index.php/Home/Login/login" rel="external" style="font-weight:normal">返回登录</a>
	            </div>
	            <br/>
	            <br/>
	            <br/>
	            <button rel="external" data-role="button" style="margin-top:-5%;width:70%;margin-left:15%;border-radius:100px;background:rgba(0,0,0,0.5);color:white;font-size:18px" type="submit" id="submit">注&nbsp;册</button>
	        </div>
	        </form>

	        
	    </div> 
	</body>
	<script type="text/javascript">
		function userblur(){
			var username=document.getElementById("username").value;
			if(username==""){
				document.getElementById("usererror").innerHTML="用户名不能为空";
				document.getElementById("usererror").style.color="red";
				document.getElementById("submit").disabled="disabled";
			}
			else{
				document.getElementById("usererror").innerHTML="用户名可以使用";
				document.getElementById("usererror").style.color="green";
				document.getElementById("submit").disabled="";
			}
		}
		function pwdblur(){
			var password=document.getElementById("password").value;
			if(password==""){
				document.getElementById("pwderror").innerHTML="密码不能为空";
				document.getElementById("pwderror").style.color="red";
				document.getElementById("submit").disabled="disabled";
			}
			else{
				document.getElementById("pwderror").innerHTML="密码可以使用";
				document.getElementById("pwderror").style.color="green";
				document.getElementById("submit").disabled="";
			}
		}
		function repwdblur(){
			var password=document.getElementById("password").value;
			var repassword=document.getElementById("repsd").value;
			if(repassword!=password||repassword==""){
				document.getElementById("repwderror").innerHTML="两次密码不一致";
				document.getElementById("repwderror").style.color="red";
				document.getElementById("submit").disabled="disabled";
			}
			else{
				document.getElementById("repwderror").innerHTML="输入一致";
				document.getElementById("repwderror").style.color="green";
				document.getElementById("submit").disabled="";
			}
		}
	</script>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="utf-8">
		
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/challenge.css" />
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div data-role="page" id="pageone">
	        <div data-role="header" id="col" >
	            <h1 style="color:white">一起来挑战吧</h1>
	            <a href="/xionghaizi/index.php/Home/Login/index" data-role="button" rel="external">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	            
	        <a href="/xionghaizi/index.php/Home/Challenge/gushi_guanka" rel="external" ><div class="gushi"><div class="div">古诗</div></div></a>

	        <a href="/xionghaizi/index.php/Home/Challenge/shuxue_guanka" rel="external" ><div class="shuxue"><div class="div">数学</div></div></a>

	        <a href="/xionghaizi/index.php/Home/Challenge/yingyu_guanka" rel="external" ><div class="yingyu"><div class="div">英语</div></div></a>

	        <a href="/xionghaizi/index.php/Home/Challenge/chengyu_guanka" rel="external" ><div class="chengyu"><div class="div">成语</div></div></a>
	        </div>

	        
	    </div> 
	</body>
</html>
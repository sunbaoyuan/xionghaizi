<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
        <meta charset="utf-8">
        
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="/xionghaizi/Public/front/css/guanka.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div data-role="page" id="pageone">
	        <div data-role="header" id="col" >
	            <h1>成语闯关要开始啦</h1>
	            <a href="/xionghaizi/index.php/Home/Challenge/challenge" data-role="button" rel="external">返回</a>
	        </div>

	        <div data-role="content" id="cont">
	            
	        	<div id="seven"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a7" rel="external">第七关</a></div>
	        	<div id="six"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a6" rel="external">第六关</a></div>
	        	<div id="five"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a5" rel="external">第五关</a></div>
	        	<div id="four"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a4" rel="external">第四关</a></div>
	        	<div id="three"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a3" rel="external">第三关</a></div>
	        	<div id="two"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a2" rel="external" >第二关</a></div>
	        	<div id="one"><a href="/xionghaizi/index.php/Home/Challenge/chengyu_1" id="a1" rel="external">第一关</a></div>
	        </div>

	        
	    </div> 
        
	</body>
    <script type="text/javascript">
    	window.onload=function(){
    			 document.getElementById("a7").removeAttribute('href');
    			 document.getElementById("a6").removeAttribute('href');
    			 document.getElementById("a5").removeAttribute('href');
    			 document.getElementById("a4").removeAttribute('href');
    			 document.getElementById("a3").removeAttribute('href');
    			 document.getElementById("a2").removeAttribute('href');
    		 	 var a = location.search;
    		 	 alert(a);
    		 	 if(a==""||a=="?0"||a=="?20"||a=="?40"){
    		 	 	document.getElementById("a2").removeAttribute('href');
    		 	 }
    		 	 else{
    		 	 	document.getElementById("a2").setAttribute('href','/xionghaizi/index.php/Home/Challenge/chengyu_1');
    		 	 }
			 	
			 }
    </script>
</html>
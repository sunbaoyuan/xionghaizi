<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="utf-8">
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min-1.css" />

    	<link rel="stylesheet" href="/xionghaizi/Public/front/css/study_gushi.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div data-role="page" id="pageone"> 

	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:black">学古诗</h1>
	            <a href="/xionghaizi/index.php/Home/Study/study" data-role="button" data-ajax="false">返回</a>
	        </div>

	        <div data-role="content">
	        	

	        	<div id="story">
	        		
	        		<ul  data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="搜索">
				  		<li>
				    		<p>
				    		<a href="#one">《春晓》. . . . . . . . . . . . . . .</a></p>
					  	<li>
					    	<p>
				    		<a href="#two" >《静夜思》. . . . . .  . . . . . . . .</a></p>
					    </li>
					  	<li>
					  		<p>
				    		<a href="#three" >《登黄鹤楼》. . . . . . . . . . . . . </a></p>
					  	</li>
					  	<li>
				    		<p>
				    		<a href="#four" >《江雪》. . . . . . . . . . . . . . . </a></p>
					  	<li>
					    	<p>
				    		<a href="#five" >《登乐游原》. . . . . . . . . . . . .</a></p>
					    </li>
					  	<li>
					  		<p>
				    		<a href="#six" >《弹琴》. . . . . . . . . . . . . . .  </a></p>
					  	</li>
					  	<li>
				    		<p>
				    		<a href="#seven" >《八阵图》. . . . . . . . . . . . . . </a></p>
					  	<li>
					    	<p>
				    		<a href="#eight" >《草》. . . . . . . . . . . . . . . .</a></p>
					    </li>
					  	<li>
					  		<p>
				    		<a href="#nine" >《枫桥夜泊》. . . . . . . . . . . . . </a></p>
					  	</li>
					  	<li>
				    		<p>
				    		<a href="#ten">《出塞》. . . . . . . . . . . . . . . </a></p>

					  	
					</ul>

	        	</div>
	        </div>
	    </div> 


		<div data-role="page" id="one" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a1">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="width:100%">
	        		<a href="#two" data-role="button" data-inline="true" style="border-radius:100px;width:50%;margin-left:22%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        

	        
	    	</div>
	    </div>


	    <div data-role="page" id="two" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result1" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a2">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#one" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#three" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        

	        
	    	</div>
	    </div>


	    <div data-role="page" id="three" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result2" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a3">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#two" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#four" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		       

	        
	    	</div>
	    </div>

	    <div data-role="page" id="four" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	           <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result3" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a4">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#three" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#five" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        
	    	</div>
	    </div>

	    <div data-role="page" id="five" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result4" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a5">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#four" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#six" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        
	    	</div>
	    </div>

	    <div data-role="page" id="six" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result5" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a6">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#five" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#seven" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        
	    	</div>
	    </div>

	    <div data-role="page" id="seven" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result6" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a7">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#six" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#eight" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        
	    	</div>
	    </div>

	    <div data-role="page" id="eight" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result7" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a8">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#seven" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#nine" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		        
	    	</div>
	    </div>

	    <div data-role="page" id="nine" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result8" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a9">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#eight" data-role="button" data-inline="true" style="border-radius:100px;width:20%;margin-left:21%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        		<a href="#ten" data-role="button" data-inline="true" style="border-radius:100px;width:20%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">下一首</a>
	        	</div>


		       
	    	</div>
	    </div>

	    <div data-role="page" id="ten" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">学古诗</h1>
	            <a href="#pageone" data-role="button" onclick="myrefresh()">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="Result9" class="content">
	        		<h2 class="h2">《春晓》     .</h2>
	        		<h5 class="h5" id="a10">作者：孟浩然     .</h5>
	        		<p><span class="a">春 眠 不 觉 晓，</span></p>
	        		<p><span class="a">处 处 闻 啼 鸟。</span></p>
	        		<p><span class="a">夜 来 风 雨 声，</span></p>
	        		<span class="a">花 落 知 多 少。</span>
	        	</div>
	        	<div style="margin-top:1%;width:100%">
	        		<a href="#nine" data-role="button" data-inline="true" style="border-radius:100px;width:50%;margin-left:22%;background:rgba(255,255,255,0.3);" onclick="myrefresh()">上一首</a>
	        	</div>


		        <script src="/xionghaizi/Public/front/js/jQuery/jQuery-2.1.4.min.js"></script>
	            <script src="/xionghaizi/Public/front/js/speech/jQuery.speech.min.js"></script>
	            <script>
	            	$('#Result').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result1').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result2').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result3').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result4').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result5').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result6').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	$('#Result7').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	            	 $('#Result8').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
	                $('#Result9').speech({
	                    "speech": true,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 0,
	                    "sWidth": 16, //链接按钮的宽度			
						"sHeight": 13, //链接按钮的高度		
	                    "bg": "/xionghaizi/Public/front/images/speech.png"
	                });
					
					function myrefresh(){
						window.location.reload();
					}
	            </script>
	    	</div>
	    </div>

	</body>
</html>
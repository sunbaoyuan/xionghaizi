<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="utf-8">
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/study_one.css" />
		<script src="/xionghaizi/Public/front/js/jquery.min.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    	</style>
	</head>
	<body>
		<div data-role="page" id="pageone">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">识动物</h1>
	            <a href="#" data-role="button" onclick="javascript:history.back(-1);">返回</a>
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<!-- <p style="text-align:center;opacity:0.0" id="read">小朋友知道下面是什么小动物吗？(点图片我来告诉你)</p> -->
	        	<div id="a">
		            <div id="Result" style="display:block"><img src="/xionghaizi/Public/front/images/mao.jpg"><span id="aaa">猫</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		            <div id="Result1" style="display:none"><img src="/xionghaizi/Public/front/images/gou.jpg"><span id="aaa">狗</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		           	<div id="Result2" style="display:none"><img src="/xionghaizi/Public/front/images/baozi.gif"><span id="aaa">豹子</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		           	<div id="Result3" style="display:none"><img src="/xionghaizi/Public/front/images/shizi.gif"><span id="aaa">狮子</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		           	<div id="Result4" style="display:none"><img src="/xionghaizi/Public/front/images/laohu.jpg"><span id="aaa">老虎</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	            </div>

	            

	            <div style="width:260px;margin-left:23%;margin-top:2%">
					
					<a href="javascript:;" style="float:left;margin-top:4%" id="btn-pre"><img src="/xionghaizi/Public/front/images/mfrl.gif" style="width:100%"></a>
					<div style="width:200px;overflow-x:hidden;float:left" id="flow"> 
					    <div style="width:500px;" id="lunbo">       
					        <div style="width:100px;float:left;text-align:center" id="one"><li onclick="select(this)"><img src="/xionghaizi/Public/front/images/mao.jpg" style="width:100%"></li></div>        
					        <div style="width:100px;float:left;text-align:center" id="two"><li onclick="select(this)"><img src="/xionghaizi/Public/front/images/gou.jpg" style="width:100%"></li></div>            
					        <div style="width:100px;float:left;text-align:center" id="three"><li onclick="select(this)"><img src="/xionghaizi/Public/front/images/baozi.gif" style="width:100%"></li></div>        
					        <div style="width:100px;float:left;text-align:center" id="four"><li onclick="select(this)"><img src="/xionghaizi/Public/front/images/shizi.gif" style="width:100%"></li></div>        
					        <div style="width:100px;float:left;text-align:center" id="five"><li onclick="select(this)"><img src="/xionghaizi/Public/front/images/laohu.jpg" style="width:100%"></li></div>
					        
					    </div>
					</div>
					<a href="javascript:;" style="float:right;margin-top:4%" id="btn-next"><img src="/xionghaizi/Public/front/images/mfrr.gif" style="width:100%"></a>
				</div>
	            
	            <script src="/xionghaizi/Public/front/js/speech/jQuery.speech.min.js"></script>
	            <script>
	            	
	            	$("#btn-pre").click(function(){
						$("#flow").animate({
							'scrollLeft':"+=-100px"
						},1000);
					});
					$("#btn-next").click(function(){
						$("#flow").animate({
							'scrollLeft':"+=100px"
						},1000);
					});
	                var one=document.getElementById("one");
	                var two=document.getElementById("two");
	                var three=document.getElementById("three");
	                var four=document.getElementById("four");
	                var five=document.getElementById("five");
	                var Result=document.getElementById("Result");
	                var Result1=document.getElementById("Result1");
	                var Result2=document.getElementById("Result2");
	                var Result3=document.getElementById("Result3");
	                var Result4=document.getElementById("Result4");
	                one.onclick=function(){
	                	Result.style.display="block";
	                	Result1.style.display="none";
	                	Result2.style.display="none";
	                	Result3.style.display="none";
	                	Result4.style.display="none";
	                	$('#Result').speech({
	                    "speech": false,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 1,
	     				// "sWidth": 150, //链接按钮的宽度			
						// "sHeight": 150, //链接按钮的高度		
	                });
	                }
	                 two.onclick=function(){
	                	Result.style.display="none";
	                	Result1.style.display="block";
	                	Result2.style.display="none";
	                	Result3.style.display="none";
	                	Result4.style.display="none";
	                	$('#Result1').speech({
	                    "speech": false,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 1,
	     				// "sWidth": 150, //链接按钮的宽度			
						// "sHeight": 150, //链接按钮的高度		
	                }); 
	                }
	                three.onclick=function(){
	                	Result.style.display="none";
	                	Result1.style.display="none";
	                	Result2.style.display="block";
	                	Result3.style.display="none";
	                	Result4.style.display="none";
	                	$('#Result2').speech({
	                    "speech": false,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 1,
	     				// "sWidth": 150, //链接按钮的宽度			
						// "sHeight": 150, //链接按钮的高度		
	                });
	                }
	                four.onclick=function(){
	                	Result.style.display="none";
	                	Result1.style.display="none";
	                	Result2.style.display="none";
	                	Result3.style.display="block";
	                	Result4.style.display="none";
	                	$('#Result3').speech({
	                    "speech": false,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 1,
	     				// "sWidth": 150, //链接按钮的宽度			
						// "sHeight": 150, //链接按钮的高度		
	                });
	                }
	                five.onclick=function(){
	                	Result.style.display="none";
	                	Result1.style.display="none";
	                	Result2.style.display="none";
	                	Result3.style.display="none";
	                	Result4.style.display="block";
	                	$('#Result4').speech({
	                    "speech": false,//点击播放
	                    //"speech": false,自动播放
	                    "speed": 1,
	     				// "sWidth": 150, //链接按钮的宽度			
						// "sHeight": 150, //链接按钮的高度		
	                });
	                }
	            </script>
	        </div>

	        
	    </div> 
	</body>
</html>
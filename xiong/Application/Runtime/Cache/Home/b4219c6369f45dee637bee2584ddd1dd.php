<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min-1.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    	<style type="text/css">
    		#col{
    			/*background-color: #99FF99;*/
                background:rgba(144,238,144,0.5);
    		}
    		.bg{
    			background-image: url(/xionghaizi/Public/front/images/center.jpg);
    			background-size: cover;
    		}
    		form label{
    			border:1px solid black;
    		}
    	</style>

	</head>
	<body>
		<div data-role="page" id="one" class="bg" >
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">第一关</h1>
	            <a href="/xionghaizi/index.php/Home/Challenge/gushi_guanka" data-role="button" rel="external">返回</a>
	        </div>
	        <div data-role="content" id="cont">
	            
	        	<p style="font-size:25px">1._______________，花落知多少。</p>
	        	<p style="margin-left:40%">&nbsp;------唐 孟浩然 《春晓》</p>

	        	<div style="margin-top:10%">
	        		<form action="" method="get"> 
					<label><input name="one" type="radio" value="A" />A.春眠不觉晓</label> 
					<label><input name="one" type="radio" value="B" />B.处处闻啼鸟</label> 
					<label><input name="one" type="radio" value="C" />C.夜来风雨声</label> 
					<label><input name="one" type="radio" value="D" />D.离离原上草</label>  
					</form> 
	        	</div>
	        	<div style="margin-top:30%">
	        		<a href="#two" data-role="button" style="border-radius:100px;background:rgba(255,255,255,0.5);" onclick="GetData1()">下一题</a>
	        	</div>
	        </div>

	        
	    </div> 


	    <div data-role="page" id="two" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">第一关</h1>
	        </div>
	        <div data-role="content" id="cont">
	            
	        	<p style="font-size:25px">2._______________，花落知多少。</p>
	        	<p style="margin-left:40%">&nbsp;------唐 孟浩然 《春晓》</p>

	        	<div style="margin-top:10%">
	        		<form action="" method="get"> 
					<label><input name="two" type="radio" value="A" />A.春眠不觉晓</label> 
					<label><input name="two" type="radio" value="B" />B.处处闻啼鸟</label> 
					<label><input name="two" type="radio" value="C" />C.夜来风雨声</label> 
					<label><input name="two" type="radio" value="D" />D.离离原上草</label> 
					</form> 
	        	</div>
	        	<div style="margin-top:30%">
	        		<a href="#one" data-role="button" data-inline="true" style="border-radius:100px;width:37%;margin-left:1%;background:rgba(255,255,255,0.3);" onclick="SetData1()">上一题</a>
	        		<a href="#three" data-role="button" data-inline="true" style="border-radius:100px;width:37%;background:rgba(255,255,255,0.5);" onclick="GetData2()">下一题</a>
	        	</div>
	        </div>
	    </div>

	    <div data-role="page" id="three" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">第一关</h1>
	        </div>
	        <div data-role="content" id="cont">
	            
	        	<p style="font-size:25px">3._______________，花落知多少。</p>
	        	<p style="margin-left:40%">&nbsp;------唐 孟浩然 《春晓》</p>

	        	<div style="margin-top:10%">
	        		<form action="" method="get"> 
					<label><input name="three" type="radio" value="A" />A.春眠不觉晓</label> 
					<label><input name="three" type="radio" value="B" />B.处处闻啼鸟</label> 
					<label><input name="three" type="radio" value="C" />C.夜来风雨声</label> 
					<label><input name="three" type="radio" value="D" />D.离离原上草</label> 
					</form> 
	        	</div>
	        	<div style="margin-top:30%">
	        		<a href="#two" data-role="button" data-inline="true" style="border-radius:100px;width:37%;margin-left:1%;background:rgba(255,255,255,0.3);" onclick="SetData2()">上一题</a>
	        		<a href="#four" data-role="button" data-inline="true" style="border-radius:100px;width:37%;background:rgba(255,255,255,0.5);" onclick="GetData3()">下一题</a>
	        	</div>
	        </div>
	    </div>

	    <div data-role="page" id="four" class="bg">
	        <div data-role="header" id="col" data-position="fixed">
	            <h1 style="color:white">第一关</h1>
	        </div>
	        <div data-role="content" id="cont">
	            
	        	<p style="font-size:25px">4._______________，花落知多少。</p>
	        	<p style="margin-left:40%">&nbsp;------唐 孟浩然 《春晓》</p>

	        	<div style="margin-top:10%">
	        		<form action="" method="get"> 
					<label><input name="four" type="radio" value="A" />A.春眠不觉晓</label> 
					<label><input name="four" type="radio" value="B" />B.处处闻啼鸟</label> 
					<label><input name="four" type="radio" value="C" />C.夜来风雨声</label> 
					<label><input name="four" type="radio" value="D" />D.离离原上草</label> 
					</form> 
	        	</div>
	        	<div style="margin-top:30%">
	        		<a href="#three" data-role="button" data-inline="true" style="border-radius:100px;width:37%;margin-left:1%;background:rgba(255,255,255,0.3);" onclick="SetData3()">上一题</a>
	        		<a href="#five" data-role="button" data-inline="true" style="border-radius:100px;width:37%;background:rgba(255,255,255,0.5);" onclick="GetData4()">下一题</a>
	        	</div>
	        </div>
	    </div>

	    <div data-role="page" id="five" class="bg">
	        <div data-role="header" id="col" data-position="fixed"> 
	            <h1 style="color:white">第一关</h1>
	        </div>
	        <div data-role="content" id="cont">
	            
	        	<p style="font-size:25px">5._______________，花落知多少。</p>
	        	<p style="margin-left:40%">&nbsp;------唐 孟浩然 《春晓》</p>

	        	<div style="margin-top:10%">
	        		<form action="" method="get"> 
					<label><input name="five" type="radio" value="A" />春眠不觉晓</label> 
					<label><input name="five" type="radio" value="B" />处处闻啼鸟</label> 
					<label><input name="five" type="radio" value="C" />夜来风雨声</label> 
					<label><input name="five" type="radio" value="D" />离离原上草</label>  
					</form> 
	        	</div>
	        	<div style="margin-top:30%">
	        		<a href="#four" data-role="button" data-inline="true" style="border-radius:100px;width:37%;margin-left:1%;background:rgba(255,255,255,0.3);" onclick="SetData4()">上一题</a>
	        		<a href="#six" data-role="button" data-inline="true" style="border-radius:100px;width:37%;background:rgba(255,255,255,0.5);" onclick="GetData5()">提交</a>
	        	</div>
	        </div>	        
	    </div> 


	    <div data-role="page" id="six" class="bg">
	    	<div data-role="header" id="col" data-position="fixed">
	    		<a  rel="external" data-role="button" onclick="getgrade()">返回</a>
	            <h1 style="color:white">最终得分</h1>
	            <a  href="javascript:;" rel="external" data-role="button" id="fenxiang" onclick="pageName()">分享</a>
	        </div>
	        <div data-role="content">
	        	<div>
	        		<p style="text-align:center;font-size:30px">您的分数是为：</p>
	        		<p id="aaa" style="text-align:center;font-size:50px"></p>
	        	</div>
	        </div>
	    </div>


	    <script type="text/javascript">
	    	function pageName()  
		     {  
		         var a = location.href;  
		        var b = a.split("/");  
		        var c = b.slice(b.length-1, b.length).toString(String).split("."); 
		        var name= c.slice(0, 1);
		        window.location.href="/xionghaizi/index.php/Home/Other/xiaoxi.html?"+name;
		     }  
		     function getgrade(){
	    		var a=document.getElementById("aaa").innerHTML;
	    		
	    		// alert(a);
	    		window.location.href="/xionghaizi/index.php/Home/Challenge/gushi_guanka.html?"+a;
	    	}
	    	count=0;
			function GetData1()
			{
			 var radios = document.getElementsByName("one");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked==true)
			     {
			         if(radios[i].value=="C"){
			         	count=count+20;
			         }

			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}


			

			function GetData2()
			{
			 var radios = document.getElementsByName("two");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked)
			     {
			         if(radios[i].value=="C"){
			         	count=count+20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}
			function SetData1()
			{
			 var radios = document.getElementsByName("one");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked==true)
			     {
			         if(radios[i].value=="C"){
			         	count=count-20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}

			function GetData3()
			{
			 var radios = document.getElementsByName("three");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked)
			     {
			         if(radios[i].value=="C"){
			         	count=count+20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}
			function SetData2()
			{
			 var radios = document.getElementsByName("two");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked==true)
			     {
			         if(radios[i].value=="C"){
			         	count=count-20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}
			function GetData4()
			{
			 var radios = document.getElementsByName("four");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked)
			     {
			         if(radios[i].value=="C"){
			         	count=count+20;
			         }
			         // alert(count);
			     }
			    if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}
			function SetData3()
			{
			 var radios = document.getElementsByName("three");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked==true)
			     {
			         if(radios[i].value=="C"){
			         	count=count-20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}
			function GetData5()
			{
			 var radios = document.getElementsByName("five");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked)
			     {
			         if(radios[i].value=="C"){
			         	count=count+20;

			         }
			         // alert(count);
			         
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			         document.getElementById("aaa").innerHTML=count;
			  }   
			}
			function SetData4()
			{
			 var radios = document.getElementsByName("four");
			 for(i=0;i<radios.length;i++)
			 {
			     if(radios[i].checked==true)
			     {
			         if(radios[i].value=="C"){
			         	count=count-20;
			         }
			         // alert(count);
			     }
			     if(radios[i].value==""){
			         	count=count+0;
			         }
			  }   
			}

	    </script>
	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="utf-8">
	
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/xiaoxi.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    	<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.css"/>
    	<link rel="stylesheet" href="/xionghaizi/Public/front/css/amazeui.min.css">
    	
    	<script type="text/javascript">
    		 window.onload=function(){
    		 	 var url = location.search;
    		 	 if(url=="?gushi_1"){
    		 	 	addli();
    		 	 }
    		 	 else if(url=="?chengyu_1"){
    		 	 	addli();
    		 	 }
    		 	 else if(url=="?shuxue_1"){
    		 	 	addli();
    		 	 }
    		 	 else if(url=="?yingyu_1"){
    		 	 	addli();
    		 	 }
			 	
			 }
			 function addli(){
			 	var one=document.getElementById("lione");
			 	var li=document.createElement("li");
			 	li.className="list0";
			 	var html='<div class="head">'+'<img src="/xionghaizi/Public/front/images/1.jpg" alt=""/>'+'</div>'
			 	+'<div class="content">'
			 	+'<p class="text">'+'<span class="name">Andy：</span>'+'哈哈哈哈哈，我在XX关获得了XX分，快来挑战我吧'+'</p>'
			 	+'<div class="comment-list">'
			 	+'<div class="comment" user="self">'
			 	+'</div>'
			 	+'</div>'
			 	+'<div class="hf">'
			 	+'<textarea type="text" class="hf-text" autocomplete="off" >评论…</textarea>'
			 	+'<button class="hf-btn" data-role="none">回复</button>'
			 	+'</div>'
			 	+'</div>';
			 	li.innerHTML=html;
			 	document.getElementById("pn").insertBefore(li,one);

			 }
    	</script>
	</head>
	<body>
		<div data-role="page" id="pageone" >
	        <div data-role="header" id="col" >
	            <h1>熊孩子</h1>
	            
	        </div>
	        	
	        <div data-role="content" id="cont">
	        	<div id="img">
	        		<!-- <div id="text">
		            <p style="color:#3399CC">动&nbsp&nbsp&nbsp态</p>
		       		</div> -->
	        	</div>
	        	
	            <div id="content1">
	       		<ul id="pn">
				    <li class="list0" id="lione">
				       
				       <div class="head"><img src="/xionghaizi/Public/front/images/1.jpg" alt=""/></div>
				       <div class="content">
				       <p class="text"><span class="name">Andy：</span>哈哈哈哈哈，我在XX关获得了XX分，快来挑战我吧</p> 

				       <!-- <div class="good"><span class="date">02-14 23:01</span><a class="dzan" href="javascript:;">赞</a></div> -->
				       <!-- <div class="people" total="2980">2980人觉得很赞</div> -->
				       <div class="comment-list">
				       <div class="comment" user="self">
				        <div class="comment-left"><img src="/xionghaizi/Public/front/images/1.jpg" alt=""/></div>
				        <div class="comment-right">
				        <div class="comment-text"><span class="user">老王：</span>太棒了！</div>
				        <div class="comment-date">05-15 16:00
				        <!-- <a class="comment-zan" href="javascript:;" total="23" my="1">23 取消赞</a> -->
				        <!-- <a class="comment-dele" href="javascript:;">回复</a> -->
				        </div>
				        </div>
				       </div>
				       
				       </div>
				       <div class="hf">
				       <textarea type="text" class="hf-text" autocomplete="off" >评论…</textarea>
				       <button class="hf-btn" data-role="none">回复</button>
				       <!-- <span class="hf-nub">0/100</span> -->
				       </div>
				       </div>

				    </li>
				    
				    
				    <li class="list0">
				       
				       <div class="head"><img src="/xionghaizi/Public/front/images/1.jpg" alt=""/></div>
				       <div class="content">
				       <p class="text"><span class="name">Andy：</span>哈哈哈哈哈，我在XX关获得了XX分，快来挑战我吧</p> 

				       
				       <div class="comment-list">
				       <div class="comment" user="self">
				        
				       </div>
				       
				       </div>
				       <div class="hf">
				       <textarea type="text" class="hf-text" autocomplete="off" >评论…</textarea>
				       <button class="hf-btn" data-role="none">回复</button>
				       <!-- <span class="hf-nub">0/100</span> -->
				       </div>
				       </div>
				    </li>

		  		</ul>
		  		</div>
	        </div>

	        <div data-role="footer" data-position="fixed" data-fullscreen="true">
	            <div data-role="navbar">
					<ul>
				    <li><a href="/xionghaizi/index.php/Home/Login/index" rel="external" data-role="button" data-icon="home" data-iconpos="notext" >首页</a></li>
				    <li><a href="#" rel="external" data-role="button" data-icon="grid" data-iconpos="notext" class="ui-btn-active">消息</a></li>
					<li><a href="/xionghaizi/index.php/Home/Other/integral" rel="external" data-role="button" data-icon="search" data-iconpos="notext">积分榜</a></li>
					<li><a href="/xionghaizi/index.php/Home/Other/mine" rel="external" data-role="button" data-icon="search" data-iconpos="notext">我的</a></li>
					</ul>
				</div>
	        </div>
	    </div> 
	</body>
	<script type="text/javascript">
    		//在页面加载完后立即执行多个函数。
			 function addloadEvent(func){
			 var oldonload=window.onload;
			 if(typeof window.onload !="function"){
			  window.onload=func;
			 }
			 else{
			  window.onload=function(){
			  if(oldonload){
			   oldonload(); 
			  }
			  func();
			  }
			 }
			 }
			 addloadEvent(b);
			 function b(){
			 var pn=document.getElementById("pn");
			 var lists=pn.children;
			 //删除当前节点
			 function remove(node){
			 node.parentNode.removeChild(node);
			 }

			 //回复评论
			 function reply(box){
			 //获取评论框
			 var textarea=box.getElementsByTagName("textarea")[0];
			 //获取包含所有评论的容器
			 var comment=box.getElementsByClassName("comment-list")[0];
			 //创建新的评论div
			 var div=document.createElement("div");
			 //赋类名
			 div.className="comment";
			 //设置属性
			 div.setAttribute("user","self");
			 //获取每条评论的innerHTML结构，每次只替换textarea的输入内容和 当前发送时间
			 var html='<div class="comment-left">'+'<img src="/xionghaizi/Public/front/images/1.jpg" alt=""/>'+'</div>'+
			  '<div class="comment-right">'+
			  '<div class="comment-text"><span>我：</span>'+textarea.value+'</div>'+
			  '<div class="comment-date">'+
			  getTime()+
			  
			  '<a class="comment-dele" href="javascript:;">删除</a>'+
			  '</div>'+
			  '</div>';
			 //插入到新建的评论div
			 div.innerHTML=html;
			 //把新评论插入到评论列表
			 comment.appendChild(div);
			 //评论后初始化textarea输入框
			 textarea.value="评论…";
			 textarea.parentNode.className="hf";
			 }
			 //获取当前时间回复评论时调用
			 function getTime(){
			 var t=new Date();
			 var y=t.getFullYear();
			 var m=t.getMonth()+1;
			 var d=t.getDate();
			 var h=t.getHours();
			 var mi=t.getMinutes();
			 m=m<10?"0"+m:m;
			 d=d<10?"0"+d:d;
			 h=h<10?"0"+h:h;
			 mi=mi<10?"0"+mi:mi;
			 return y+"-"+m+"-"+d+""+h+":"+mi;
			 }

			 //操作回复
			 function operateReply(el){
			 //每条评论
			 var comment=el.parentNode.parentNode.parentNode;
			 //整个状态
			 var box=comment.parentNode.parentNode.parentNode;
			 //评论框
			 var textarea=box.getElementsByTagName("textarea")[0];
			 //名字
			 var user=comment.getElementsByClassName("user")[0];
			 //点击的innerHTML
			 var txt=el.innerHTML;
			 //判断当前点击的是否为回复
			 if(txt=="回复"){
			 //评论框触发焦点事件 也就是变高
			 textarea.onfocus();
			 //内容变为回复+当前人的名字
			 textarea.value="回复 "+user.innerHTML;
			 //调用键盘事件
			 textarea.onkeyup();
			 }else{
			 //否则就是删除节点
			 remove(comment);
			 }
			 }
			 //遍历所有状态消息
			 for(var i=0;i<lists.length;i++){
			 //全部事件代理
			 lists[i].onclick=function(e){
			 //获取当前点击事件
			 var e=e||window.event;
			 var el=e.srcElement;
			 if(!el){
			 el=e.target;//兼容火狐
			 }
			 //判断点击的类名
			 switch(el.className){
			 //关闭整个状态
			 case "close":
			 remove(el.parentNode);
			 break;
			 //上面的点赞
			 case "dzan":
			 praisebox(el.parentNode.parentNode.parentNode,el);
			 break;
			 //回复评论
			 case "hf-btn hf-btn-on":
			 reply(el.parentNode.parentNode.parentNode);
			 break;
			 //每条评论中点赞
			 case "comment-zan":
			 praiseReply(el);
			 break;
			 case "comment-dele":
			 operateReply(el);
			 break;
			 }
			 }
			 var textarea=lists[i].getElementsByClassName("hf-text")[0];
			 // //焦点事件
			 textarea.onfocus=function(){
			 this.parentNode.className='hf hf-on';
			 this.value = this.value == '评论…' ? '' : this.value;
			 }
			 //失焦事件
			 textarea.onblur=function(){
			 if(this.value==''){
			 this.parentNode.className='hf';
			 this.value ='评论…'; 
			 } 
			 }
			 //键盘事件
			 textarea.onkeyup=function(){
			 var len=this.value.length;
			 var textParentNode=this.parentNode;
			 var textBtn=textParentNode.children[1];
			 var textNub=textParentNode.children[2];
			 if(len==0 /*|| len>100*/){
			 textBtn.className="hf-btn";
			 }else{
			 textBtn.className="hf-btn hf-btn-on";
			 /*this.style.color="#333"; */ 
			 }
			 // textNub.innerHTML=len+"/100";
			 }
			 }
			 //遍历结束
			 } 

    	</script>

</html>
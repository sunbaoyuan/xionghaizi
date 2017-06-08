<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
        <meta charset="utf-8">
        
		<title>挑战</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="/xionghaizi/Public/front/css/jquery.mobile-1.4.5.min-1.css" />
    	<script src="/xionghaizi/Public/front/js/jquery-2.2.2.js"></script>
    	<script src="/xionghaizi/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
        
    	<style type="text/css">
    		#col{
    			background:rgba(144,238,144,1.0);
    		}
    		#Result h1{
                text-align: center;
                margin-top: 1%;
            }
            #Result p{
                text-indent: 35px;
            }
    	</style>

	</head>
	<body>
		<div data-role="page" id="one">
	        <div data-role="header" id="col">
	            <h1>听小故事</h1>
	            <a href="javascript:history.go(-1);" data-role="button">返回</a>
	        </div>

	        <div data-role="content" id="Result">
	            <h1>小蝌蚪找妈妈     .</h1>
                <p>暖和的春天来了。池塘里的冰融化了。青蛙妈妈睡了一个冬天，也醒来了。她从泥洞里爬出来，扑通一声跳进池塘里，在水草上生下了很多黑黑的圆圆的卵。春风轻轻地吹过，太阳光照着。池塘里的水越来越暖和了。青蛙妈妈下的卵慢慢地都活动起来，变成一群大脑袋长尾巴的蝌蚪，他们在水里游来游去，非常快乐。有一天，鸭妈妈带着她的孩子到池塘中来游水。小蝌蚪看见小鸭子跟着妈妈在水里划来划去，就想起自己的妈妈来了。</p>

                <p>小蝌蚪你问我，我问你，可是谁也不知道。
                “我们的妈妈在哪里呢？”</p>
                <p>他们一起游到鸭妈妈身边，问鸭妈妈：
                “鸭妈妈，鸭妈妈，您看见过我们的妈妈吗？请您告诉我们，我们的妈妈是什么样的
                呀？”
                鸭妈妈回答说：“看见过。你们的妈妈头顶上有两只大眼睛，嘴巴又阔又大。你们自己
                去找吧。”
                “谢谢您，鸭妈妈！”小蝌蚪高高兴兴地向前游去。</p>
                <p>一条大鱼游过来了。小蝌蚪看见头顶上有两只大眼睛，嘴巴又阔又大，他们想一定是妈
                妈来了，追上去喊妈妈：“妈妈！妈妈！”
                大鱼笑着说：“我不是你们的妈妈。我是小鱼的妈妈。你们的妈妈有四条腿，到前面去
                找吧。”
                “谢谢您啦！鱼妈妈！”小蝌蚪再向前游去。</p>
                <p>一只大乌龟游过来了。小蝌蚪看见大乌龟有四条腿：心里想，这回真的是妈妈来了，就
                追上去喊：“妈妈！妈妈！”
                大乌龟笑着说：“我不是你们的妈妈。我是小乌龟的妈妈。你们的妈妈肚皮是白的，到
                前面去找吧。”
                “谢谢您啦！乌龟妈妈！”小蝌蚪再向前游去。
                </p>
	        </div>
            <script src="/xionghaizi/Public/front/js/jQuery/jQuery-2.1.4.min.js"></script>
            <script src="/xionghaizi/Public/front/js/speech/jQuery.speech.min.js"></script>
            <script>
                $('#Result').speech({
                    "speech": false,//点击播放
                    //"speech": false,自动播放
                    "speed": 1,
                    "bg": "/xionghaizi/Public/front/images/speech.png"
                });
            </script>
	        
	    </div> 
	</body>

</html>
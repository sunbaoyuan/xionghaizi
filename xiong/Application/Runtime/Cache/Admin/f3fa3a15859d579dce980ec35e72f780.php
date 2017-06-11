<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>熊孩子后台管理系统-首页</title>

<link href="/xionghaizi/Public/end/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/xionghaizi/Public/end/js/jquery.min.js"></script>
<script type="text/javascript" src="/xionghaizi/Public/end/js/global.js"></script>

<script type="text/javascript" src="/xionghaizi/Public/end/js/jquery.tab.js"></script>
<script type="text/javascript" src="/xionghaizi/Public/end/js/jquery.autotextarea.js"></script>
</head>
<style type="text/css">
    @media screen and (max-width: 1024px) {
      .tableBasic th ,td,th input{
        font-size: 10px;
      }
      .menu ul li a em{
        font-size: 8px;
      }
    }
</style>

<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="/xionghaizi/Public/end/images/logo.jpg" alt="logo" height="60"></a></div>
  <div class="nav">
   <ul>熊孩子后台管理系统</p>
   </ul>
   <ul class="navRight">
    <li class="noRight"><a href="/xionghaizi/admin.php/Admin/editmanager">您好，admin</a>
     
    </li>
    <li class="noRight"><a href="/xionghaizi/admin.php/Admin/login">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> 
<div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="/xionghaizi/admin.php/Index/index.html"><em style="text-align:center;">首页</em></a></li>
 </ul>

<ul>
  <li><a href="/xionghaizi/admin.php/Admin/manager.html"><em style="text-align:center;">管理员管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/User/lists.html"><em style="text-align:center;">用户管理</em></a></li>
 </ul>
<ul>
  <li><a href="/xionghaizi/admin.php/Story/lists.html"><em style="text-align:center;">故事管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/Challenge/lists.html"><em style="text-align:center;">挑战管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/Study/lists.html"><em style="text-align:center;">学习管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/Comment/lists.html"><em style="text-align:center;">评论管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/Share/lists.html"><em style="text-align:center;">分享管理</em></a></li>
 </ul>
 <ul>
  <li><a href="/xionghaizi/admin.php/Integral/lists.html"><em style="text-align:center;">积分管理</em></a></li>
 </ul>
</div>
</div>


<div id="dcMain"> <!-- 当前位置 -->
<div id="urHere"><a href="/xionghaizi/admin.php/Index/index.html">首页</a><b>></b><strong>挑战管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/xionghaizi/admin.php/Challenge/lists" class="actionBtn">返回列表</a>编辑题目</h3>

    <form action="/xionghaizi/admin.php/Challenge/update" method="post">

    <input type="hidden" name="challengeid" value="<?php echo ($challenge["challengeid"]); ?>">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td align="center">挑战类型</td>
       <td>
        <select name="ccid" value="challenge.ccid">
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><option value="<?php echo ($t["ccid"]); ?>">- <?php echo ($t["typeccname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>     
      </tr>
      <tr>
          <td align="center">题目</td>
          <td>
            <input type="text" name="challengename" size="40" class="inpMain" value="<?php echo ($challenge["challengename"]); ?>" />
          </td>
        </tr>
      <tr>
       <td align="center">内容</td>
       <td>
        <textarea name="challengecontent" cols="60" rows="4" class="textArea"><?php echo ($challenge["challengecontent"]); ?></textarea>
       </td>
      </tr>
      <tr>
       <td align="center">答案</td>
       <td>
        <textarea name="challengeanswer" cols="60" rows="4" class="textArea"><?php echo ($challenge["challengeanswer"]); ?></textarea>
      </td>
      </tr>
      <tr>
       <td align="center">修改时间</td>
       <td>
        <input type="text" name="addtime" value="<?php echo date('Y-m-d H:i:s');?>" size="5" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="25bfda40" />
        <input type="hidden" name="cat_id" value="" />
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
                 
 </div>

 <div class="clear"></div>

<div class="clear"></div> </div>

</body>
</html>

 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   熊孩子后台管理系统
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>

</body>
</html>
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
  <div id="urHere">熊孩子系统首页</div>  
  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
    <p style="font-size:20px">欢迎来到熊孩子后台管理系统<p><br/>
    <p name="viewcount">登陆次数：<?php echo ($admincount["logintimes"]); ?><p><br/>
    <p>上次登陆时间：<?php echo date('Y年m月d日 H:i:s');?><p>
    <div class="indexBox">
      <div class="boxTitle">服务器信息</div>
      <ul>
        <table border="0" cellspacing="0" cellpadding="7" class="tableBasic">
          <tr>
            <td valign="top">服务器计算机名</td>
            <td valign="top"> <?php echo $_SERVER['SERVER_TYPE'];?></td>
          </tr>
         <!--  <tr>
            <td valign="top">服务器IP地址</td>
            <td valign="top"><?php echo $_SERVER['HTTP_CLIENT_IP'];?></td>
          </tr> -->
          <tr>
            <td valign="top">服务器域名/IP</td>
            <td valign="top"><?php echo $_SERVER['SERVER_NAME'];?></td>
          </tr>
          <tr>
            <td valign="top">服务器端口</td>
            <td valign="top"><?php echo $_SERVER['SERVER_PORT'];?></td>
          </tr>
          <tr>
            <td valign="top">服务器IIS版本</td>
            <td valign="top"><?php echo $_SERVER['SERVER_ADDR'];?></td>
          </tr>
          <tr>
            <td valign="top">服务器操作系统</td>
            <td valign="top"><?php echo PHP_OS;?></td>
          </tr>
          <tr>
            <td valign="top">运行环境</td>
            <td valign="top"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
          </tr>
          <tr>
            <td valign="top">上传附件限制</td>
            <td valign="top"><?php echo get_cfg_var("upload_max_filesize");?></td>
          </tr>
           <tr>
            <td valign="top">服务器脚本超过时间</td>
            <td valign="top"><?php echo get_cfg_var('max_execution_time');?></td>
          </tr>
          <tr>
            <td valign="top">服务器语言种类</td>
            <td valign="top"><?php echo get_cfg_var('max_execution_lang');?></td>
          </tr>
        </table>
      </ul>
      <div class="clear"></div>
    </div><!-- indexbox over -->
  </div>
</div><!-- dcmain over -->


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
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
<div id="urHere"><a href="/xionghaizi/admin.php/Index/index.html">首页</a><b>></b><strong>用户管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/xionghaizi/admin.php/User/lists" class="actionBtn">返回列表</a>编辑用户</h3>
    
    <form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="center">用户名</td>
       <td>
        <input type="text" name="username" value="<?php echo ($data["username"]); ?>" size="80" class="inpMain" />
       </td>
      </tr>

       <tr>
        <td align="center">头像</td>
        <td><img src="/xionghaizi/Public/<?php echo ($data["userimage"]); ?>" /></td>
        </tr>
      <tr>
       <td align="center">签名</td>
       <td>
        <input type="text" name="sign" value="<?php echo ($data["sign"]); ?>" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="center">性别</td>
       <td>
        <input type="text" name="sex" value="<?php echo ($data["sex"]); ?>" size="40" class="inpMain" />
       </td>
      </tr>
     <tr>
       <td align="center">生日</td>
       <td>
        <input type="text" name="birthday" value="<?php echo ($data["birthday"]); ?>" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="center">学校</td>
       <td>
        <input type="text" name="school" value="<?php echo ($data["school"]); ?>" size="40" class="inpMain" />
       </td>
      </tr> 
      <tr>
       <td align="center">积分</td>
       <td>
        <input type="text" name="integral" value="<?php echo ($data["integral"]); ?>" size="40" class="inpMain" />
       </td>
      </tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="21307217" />
        <input type="hidden" name="id" value="">
        <input name="submit" class="btn" type="hidden"/>
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
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


 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">
    <a href="/xionghaizi/admin.php/Index/index.html">首页</a>
    <b>></b><strong>管理员管理</strong> </div>   
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>网站管理员</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
     <th><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="60" align="center">ID</th>
      <th align="center">管理员名称</th>
      <th align="center">手机号</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">操作</th>
     </tr>
    <?php if(is_array($manager)): $i = 0; $__LIST__ = array_slice($manager,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><tr>
      <td align="center"><input type="checkbox" name="managerId[]" value="<?php echo ($m["adminid"]); ?>" /></td>
      <td align="center"><?php echo ($m["adminid"]); ?></td>
      <td align="center"><?php echo ($m["adminname"]); ?></td>
      <td align="center"><?php echo ($m["admintelephone"]); ?></td>
      <td align="center"><?php echo ($m["jointime"]); ?></td>
      <td align="center"><?php echo date('Y-m-d H:i:s');?></td>
      <td align="center"><a href="/xionghaizi/admin.php/Admin/editmanager/managerId/<?php echo ($m["adminid"]); ?>">编辑</a>
      </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
                      
 </div>

 <div class="clear"></div>

<div class="pager">
        总计 5 个记录，共 1 页，当前第 1 页 |
    <a href="book.html">第一页</a> 上一页 下一页 <a href="book.html">最末页</a>  
    </div>                       
  </div>



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
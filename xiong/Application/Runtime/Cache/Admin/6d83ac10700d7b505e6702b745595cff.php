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
<div id="urHere"><a href="/xionghaizi/admin.php/Index/index.html">首页</a><b>></b><strong>挑战管理</strong> </div>   
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/xionghaizi/admin.php/Challenge/addchallenge" class="actionBtn add">添加题目</a>题目列表</h3>
    <div id="list">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="" align="center">ID</th>
        <th align="center">类型</th>
        <th width="" align="center">题目</th>
        <th width="" align="center">内容</th>
        <th width="" align="center">答案</th>
        <th width="" align="center">添加日期</th>
        <th width="" align="center">操作</th>
      </tr>

      <?php if(is_array($challengelist)): $i = 0; $__LIST__ = $challengelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td align="center"><input type="checkbox" name="challengeid[]" value="<?php echo ($vo["challengeid"]); ?>" class="checkbox"/></td>
        <td align="center"><?php echo ($vo["challengeid"]); ?></td>
        <td align="center"><?php echo ($vo["typeccname"]); ?></td>
        <td align="center"><?php echo ($vo["challengename"]); ?></td>
        <td align="center"><?php echo ($vo["challengecontent"]); ?></td>
        <td align="center"><?php echo ($vo["challengeanswer"]); ?></td>
        <td align="center"><?php echo ($vo["addtime"]); ?></td>
        <td align="center">
        <a href="/xionghaizi/admin.php/Challenge/editchallenge/challengeid/<?php echo ($vo["challengeid"]); ?>">编辑</a> | <a href="/xionghaizi/admin.php/Challenge/delete/challengeid/<?php echo ($vo["challengeid"]); ?>">删除</a>
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">
    <?php echo ($page); ?>
    </div>               
    </div>
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
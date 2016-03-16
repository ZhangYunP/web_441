<?php /* Smarty version Smarty-3.1.16, created on 2015-12-20 10:56:09
         compiled from ".\tpl\index\staff.html" */ ?>
<?php /*%%SmartyHeaderCode:24091566ce8232f3ff4-36790716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33db9d20303446699648bb883f83bad1744e639f' => 
    array (
      0 => '.\\tpl\\index\\staff.html',
      1 => 1450608963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24091566ce8232f3ff4-36790716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_566ce82345eb34_45556778',
  'variables' => 
  array (
    'people' => 0,
    'staff' => 0,
    'col1' => 0,
    'col' => 0,
    'col2' => 0,
    'col3' => 0,
    'col4' => 0,
    'col11' => 0,
    'col22' => 0,
    'col33' => 0,
    'col44' => 0,
    'pagestr' => 0,
    'pagestr2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ce82345eb34_45556778')) {function content_566ce82345eb34_45556778($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
<title>员工展示</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./img/css/staff.css">
<link rel="stylesheet" href="./img/util/iconfont/iconfont.css">
<link rel="stylesheet" href="./img/css/nav.css">

</head>

<body class="dowebok">
<div id="navbox" class="navbox">
			<div id="navbar" class="navbar">
				<ul id="mynav" class="mynav clearfix">
					<li class="navimg fl"><img src="./img/images/logo.png" alt="logo" width="20" height="20" class="navlogo"></li>
					<li class="navtitle fl"><a href="./admin.php" >首页<span class="moveline"></span></a></li>
					<li class="navsearchbox fl">
						<form class="search-form" action="" method="get">
							<span class="searchimg" id="searchimg"><img src="./img/images/search.png" alt="search"></span>
	 						<input type="text" class="searchtext" name="q" id='searchtext' autocomplete="off"/>
	 						<input type="submit" class="searchbutton" value="搜索" id='searchbutton'/>
	 					</form>
	 				</li>
	 				<li class="classmenu fl" id="classmenu">
	 					<a href="javascript:void(0)" class="classname" id="classname">选择分类<i class="iconfont icon-sanjiao"></i></a>
	 					<ul class="nosub">
	 						<li class="keji">科技部</li>
	 						<li class="yeya">液压分公司</li>
	 					</ul>
	 				</li>
	 				<?php if ($_smarty_tpl->tpl_vars['people']->value==''&&$_smarty_tpl->tpl_vars['staff']->value=='') {?>
	 				<li class="navlogin fr"><a href="./tpl/reglogin/login.html">登录&nbsp;<i class="iconfont icon-user1"></i><span class="moveline"></span></a></li>
	 				<?php } elseif ($_smarty_tpl->tpl_vars['people']->value!='') {?>
	 				<li class="navlogin fr"><a href="./admin.php?controller=home&method=mainp"><?php echo $_smarty_tpl->tpl_vars['people']->value;?>
&nbsp;<i class="iconfont icon-user1"></i><span class="moveline"></span></a></li>
					<?php } elseif ($_smarty_tpl->tpl_vars['staff']->value!='') {?>
					<li class="navlogin fr"><a href="./admin.php?controller=home&method=mainst"><?php echo $_smarty_tpl->tpl_vars['staff']->value;?>
&nbsp;<i class="iconfont icon-user1"></i><span class="moveline"></span></a></li>
					<?php }?>
				</ul>
			</div>
		</div>
		<div class="list">
		<div class="kejibox">
			<ul class="warpbox">
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter top" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	</ul>
	<ul class="warpbox">	
		<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter bottom" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	
	</ul>
	<ul class="warpbox">
		<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter top" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	</ul>
	<ul class="warpbox">
		<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter bottom" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	
	</ul>
		</div>
	<div class="yeyabox" style="display:none">

		<ul class="warpbox">
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col11']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter top" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
		
	</ul>
	<ul class="warpbox">	
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col22']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter bottom" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	
	</ul>
	<ul class="warpbox">
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col33']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter top" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	
	</ul>
	<ul class="warpbox">
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['col44']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
		<li data-scroll-reveal="enter bottom" class="innerbox"><div class="revalbox"><span class="font">
			<img src=<?php echo $_smarty_tpl->tpl_vars['col']->value['images'];?>
 alt="">
		</span><span class="back"><span class="title">人物介绍</span><span class="name"><i class="iconfont "></i><?php echo $_smarty_tpl->tpl_vars['col']->value['name'];?>
</span><span class="contentbox"><span class="remark"><?php echo $_smarty_tpl->tpl_vars['col']->value['content'];?>
</span></span></span></div></li>
		<?php } ?>
	</ul>
	</div>
	</div>
</div>
<div class="pagestr" data-scroll-reveal="enter right, move 60px,over 1s, wait 0.3s"><?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>
</div>
<div class="pagestr2" style="display:none"><?php echo $_smarty_tpl->tpl_vars['pagestr2']->value;?>
</div>
<script src="./img/js/scrollReveal.js"></script> 
<script src="./img/js/jquery-2.1.4.min.js"></script> 
<script src="./img/js/staff.js"></script> 

</body>
</html><?php }} ?>

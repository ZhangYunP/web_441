<?php /* Smarty version Smarty-3.1.16, created on 2015-12-13 08:40:41
         compiled from ".\tpl\reglogin\message.html" */ ?>
<?php /*%%SmartyHeaderCode:26304566d2f09ac7d94-55791192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e86bfa0745641f85efca9a12301b0078db35e58d' => 
    array (
      0 => '.\\tpl\\reglogin\\message.html',
      1 => 1449456277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26304566d2f09ac7d94-55791192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_566d2f09b34072_59834631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d2f09b34072_59834631')) {function content_566d2f09b34072_59834631($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提示</title>
	<link rel="stylesheet" type="text/css" href="./img/css/reg.css" >
	<link rel="stylesheet" type="text/css" href="./img/css/nav.css" media="screen and (min-width:1080px)">
	<link rel="stylesheet" type="text/css" href="./img/css/navresponse.css" media="screen and (max-width:1080px)">
	<link rel="stylesheet" type="text/css" href="./img/util/iconfont/iconfont.css">
	
</head>
<body>
	<div id="navbox" class="navbox">
			<div id="navbar" class="navbar">
				<ul id="mynav" class="mynav clearfix">
					<li class="navimg fl"><img src="./img/images/logo.png" alt="logo" width="20" height="20" class="navlogo"></li>
	 				<li class="navlogin fr"><a href="./tpl/reglogin/help.html">帮助&nbsp;<i class="iconfont icon-help"></i><span class="moveline"></span></a></li>
				</ul>
			</div>
		</div>
		<div id="alertmes" class="alertmes">
			<span class="mesinfo"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</span>
			<p class="timeword"><span id="time">4</span>秒钟后自动跳转，如果未能跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="link">请点击该链接跳转</a></p>	
		</div>
		<script>
		delayurl();
		function delayurl(){
			var delay=document.getElementById('time').innerHTML;
			var t=setTimeout("delayurl()",1000);
			
			if(delay>0){
				delay--;
				document.getElementById('time').innerHTML=delay;
			}else{
				clearTimeout(t);
				var url=document.getElementById('link').href;
				window.location.href=url;
			}
		} 
		</script>
</body>
</html><?php }} ?>

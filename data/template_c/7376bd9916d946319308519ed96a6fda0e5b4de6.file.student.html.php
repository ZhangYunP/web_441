<?php /* Smarty version Smarty-3.1.16, created on 2015-12-24 05:41:23
         compiled from ".\tpl\staff\student.html" */ ?>
<?php /*%%SmartyHeaderCode:5248566ce8c2325d40-03593190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7376bd9916d946319308519ed96a6fda0e5b4de6' => 
    array (
      0 => '.\\tpl\\staff\\student.html',
      1 => 1450935681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5248566ce8c2325d40-03593190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_566ce8c24176c9_12159387',
  'variables' => 
  array (
    'staff' => 0,
    'tname' => 0,
    'turl' => 0,
    'tid' => 0,
    'tlove' => 0,
    'sname' => 0,
    'surl' => 0,
    'sid' => 0,
    'slove' => 0,
    'commentinfo' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ce8c24176c9_12159387')) {function content_566ce8c24176c9_12159387($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>星级师徒</title>
	<link rel="stylesheet" href="./img/css/nav.css">	
	<link rel="stylesheet" href="./img/css/comment.css">	
	<link rel="stylesheet" href="./img/css/student.css">	
	<link rel="stylesheet" href="./img/css/adipoli.css">	
	<link rel="stylesheet" type="text/css" href="./img/util/iconfont/iconfont.css">

</head>
<body>
	<div id="navbox" class="navbox">
			<div id="navbar" class="navbar">
				<ul id="mynav" class="mynav clearfix">
					<li class="navimg fl"><img src="./img/images/logo.png" alt="logo" width="20" height="20" class="navlogo"></li>
					<li class="navtitle fl"><a href="./admin.php" >首页<span class="moveline"></span></a></li>
					<li class="navsearchbox fl">
						<form class="search-form" action="" method="get">
							<span class="searchimg" id="searchimg"><img src="./img/images/search.png" alt="search"></span>
	 						<input type="text" class="searchtext" name="q" autocomplete="off"/>
	 						<input type="submit" class="searchbutton" value="搜索" />
	 					</form>
	 				</li>
	 				<li class="navlogin fr"><a href="./admin.php?controller=home&method=mainst"><i class="iconfont icon-user1"></i>你好，<?php echo $_smarty_tpl->tpl_vars['staff']->value;?>
<span class="moveline"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="navbar2" id="navbar2">
			<li class="home"><a class="chinese" href="javascript:void(0)">师徒集合</a><a class="english" href="javascript:void(0)">aggregate</a></li>
			<li class="goodteacher"><a class="chinese" href="javascript:void(0)">优秀师傅</a><a class="english" href="javascript:void(0)">good teacher</a></li>
			<li class="goodstudent" id="goodstudent"><a href="javascript:void(0)" class="chinese">最佳新人</a><a href="javascript:void(0)" class="english">good student</a></li>
		</div>
		<div class="mainbox aggregatecontent" >
			<div class="staffinfo ">
				<h1>科技部<span></span></h1>
				<div class="stbox">
					<div class="keji ">
					<div class="st1">
					<div class="teacher fl">
						<i class="iconfont icon-shi"></i>
						<img src="./img/images/staff/1.jpg" alt="" class="row4">
						<span></span>
						<p class="stp">张云，介绍</p>
					</div>
					<div class="student fl">
						<img src="./img/images/staff/2.jpg" alt="" class="row4">
						<span></span>
						<p class="stp">小米，介绍</p>
					</div>
				</div>				
				
					</div>

				</div>
			</div>
			<div class="staffinfo ">
				<h1>液压分公司<span></span></h1>
				<div class="stbox">
					<div class="yeya">
					<div class="st1">
					<div class="teacher fl">
						<i class="iconfont icon-shi"></i>
						<img src="./img/images/staff/1.jpg" alt="" class="row4">
						<span></span>
						<p class="stp">张云，介绍</p>
					</div>
					<div class="student fl">
						<img src="./img/images/staff/2.jpg" alt="" class="row4">
						<span></span>
						<p class="stp">小米，介绍</p>
					</div>
				</div>
				
					</div>

				</div>
			</div>
		</div>
		<div class="mainbox teachercontent" style="display:none;">
			<div class="one">
			<div class="first">
				<img src="./img/images/sidai.png" alt="">
				<div class="year">
					<span></span>
					<p>2014-2015</p>
					<span></span>
				</div>	
			</div>
				<div class="rank">
			<div class="rankcontent">
				<p class="name"><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
</p>
				<span class="peopleimg"><img src="<?php echo $_smarty_tpl->tpl_vars['turl']->value;?>
" alt=""></span>
				<span class="starimg"><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""></span>
			</div>
			<div class="zan">
				<a href="javascript:void(0)" rel="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" title="赞"><img src="./img/images/favorites.png" alt=""></a>
				<p><span><?php echo $_smarty_tpl->tpl_vars['tlove']->value;?>
</span>个人觉得很赞</p>
			</div>
			</div>
			<div class="wordbox">
				<p>所带徒弟：<span>xxx</span></p>
				<p>徒弟评价：<span>xxx</span></p>
				</div>
			</div>
		
			</div>
		<div class="mainbox studentcontent" style="display:none">
			<div class="one">
			<div class="first">
				<img src="./img/images/sidai.png" alt="">
				<div class="year">
					<span></span>
					<p>2014-2015</p>
					<span></span>
				</div>	
			</div>
				<div class="rank">
					<div class="rankcontent">
				<p class="name"><?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
</p>
				<span class="peopleimg"><img src="<?php echo $_smarty_tpl->tpl_vars['surl']->value;?>
" alt=""></span>
				<span class="starimg"><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""><img src="./img/images/star.png" alt=""></span>
			</div>
			<div class="zan">
				<a href="javascript:void(0)" rel="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
" title="赞"><img src="./img/images/favorites.png" alt=""></a>
				<p><span><?php echo $_smarty_tpl->tpl_vars['slove']->value;?>
</span>个人觉得很赞</p>
			</div>
			</div>
			<div class="wordbox">
				<p>师傅评价：<span>xxx</span></p>
				<p>领导评价：<span>xxx</span></p>
				<p>自我评价：<span>xxx</span></p>
			</div>
			</div>
			
		</div>
		<div class="danmu" title="弹幕">
			<span><i class="iconfont icon-danmuguan"></i></span>
		</div>

		<div  class="display clearfix" id="list">
		<p class="ctitle">评论</p>
		<p class="ctotal">共<span></span>条</p>
		  <div class="box clearfix">
		<div class="comment-list">
					<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
					 <?php if ($_smarty_tpl->tpl_vars['comment']->value['nickname']==$_smarty_tpl->tpl_vars['staff']->value) {?>
                       <div class="comment-box clearfix" user="self" id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
>                             
                                <?php } else { ?>
					<div class="comment-box clearfix" user="other" id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
>                                
								<?php }?>
                        <img class="myhead" src=<?php echo $_smarty_tpl->tpl_vars['comment']->value['images'];?>
 alt=""/>
                        <div class="comment-content">
                            <p class="comment-text"><span class="user"><?php echo $_smarty_tpl->tpl_vars['comment']->value['nickname'];?>
：</span><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
。</p>
                            <p class="comment-time">
                                <?php echo $_smarty_tpl->tpl_vars['comment']->value['ctime'];?>

                                <?php if ($_smarty_tpl->tpl_vars['comment']->value['nickname']==$_smarty_tpl->tpl_vars['staff']->value) {?>
                                  <a href="javascript:;" class="comment-operate">删除</a>                               
                                <?php } else { ?>
                                <a href="javascript:;" class="comment-operate">回复</a>
                                <?php }?>
                            </p>
                        </div>
                    </div>
					<?php } ?>
                   
                </div>                              
                <div class="text-box">
                    <textarea class="comment" autocomplete="off">评论…</textarea>
                    <button class="btn ">回 复</button>
                    <span class="word"><span class="length">0</span>/140</span>
                </div>
	</div>
</div>
		</div>
		<div class="footbox" id="footbox">
			<div class="copyright" id="copyright">
				<span><em>©</em>2015 九江中船仪表有限责任公司 </span>
			</div>
		</div>

		<script type="text/javascript" src="./img/js/jquery-2.1.4.min.js"></script>
		<script src="./img/js/jquery.adipoli.min.js"></script>
		<script type="text/javascript" src="./img/js/student.js"></script>
		<script src="./img/js/comment.js"></script>
</body>
</html><?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2015-12-28 07:52:53
         compiled from ".\tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31672566ce8275b0300-80538183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50adf62d2b234bb6b4d5a29d334eb4158958bfdf' => 
    array (
      0 => '.\\tpl\\index\\index.html',
      1 => 1451289171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31672566ce8275b0300-80538183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_566ce8276a7f62_84657203',
  'variables' => 
  array (
    'people' => 0,
    'staff' => 0,
    'birinfo' => 0,
    'bir' => 0,
    'time' => 0,
    'week' => 0,
    'weeke' => 0,
    'newslist' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ce8276a7f62_84657203')) {function content_566ce8276a7f62_84657203($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>首页</title>
		<link rel="stylesheet" type="text/css" href="./img/util/iconfont/iconfont.css">
		<link rel="stylesheet" type="text/css" href="./img/css/index.css">
		<link rel="stylesheet" type="text/css" href="./img/css/carousel.css">
		<link rel="stylesheet" type="text/css" href="./img/css/sidebox.css">
		<link rel="stylesheet" type="text/css" href="./img/css/colorbox.css">
		
</head>
<body style="overflow:visibility">
<div class="page">
	<div class="bnav" id="bnav">
		<ul class="zc_bnavbar">
				<?php if ($_smarty_tpl->tpl_vars['people']->value!=''&&$_smarty_tpl->tpl_vars['staff']->value=='') {?>
			<li class='login' id='logout'><a href='./admin.php?controller=index&method=logout'>退出登录</a></li>
				<li class='reg' id='hello'><a href="./admin.php?controller=home&method=mainp">你好，<?php echo $_smarty_tpl->tpl_vars['people']->value;?>
</a></li>
				<?php } elseif ($_smarty_tpl->tpl_vars['people']->value==''&&$_smarty_tpl->tpl_vars['staff']->value!='') {?>
				<li class='login' id='logsout'><a href='./admin.php?controller=staff&method=logout'>退出登录</a></li>
				<li class='reg' id='shello'><a href="./admin.php?controller=home&method=mainst">你好，<?php echo $_smarty_tpl->tpl_vars['staff']->value;?>
</a></li>
				<?php } elseif ($_smarty_tpl->tpl_vars['people']->value==''&&$_smarty_tpl->tpl_vars['staff']->value=='') {?>
			<li class="phone" id="phone"><a href="./tpl/index/stafflogin.html"><i class="iconfont icon-user1"></i>员工通道</a></li>
				<li class="login" id="login"><a href="./tpl/reglogin/login.html">登录</a></li>
				<li class="reg" id="reg"><a href="./tpl/reglogin/reg.html">注册</a></li>
			<?php }?>		
			
		</ul>
	</div>
	<div class="wnav" id="wnav">
	<ul class="zc_wnavbar">
		<li class="logoimg"><div class="navlogo"><img src="./img/images/ybclogo.png" alt="..."></div></li>
		<li class="indexpage"><a href="./admin.php">首页</a></li>
		<li class="comin"><a id="introducelink" href="./admin.php?controller=index&method=comintroduce">公司简介<span class="moveline"></span></a></li>
		<li class="stst"><a href="./admin.php?controller=staff&method=staffintroduce&page=1">员工风采<span class="moveline"></span></a></li>
		<?php if ($_smarty_tpl->tpl_vars['staff']->value=='') {?>
		<li class="zpbox"><a id="requirelink" href="#require">招聘需求<span class="moveline"></span></a></li>
		<li class="rsbox"><a href="./admin.php?controller=index&method=checkresume" >提交简历<span class="moveline"></span></a></li>
		<?php } else { ?>
		<li class="zpbox"><a href="./admin.php?controller=staff&method=teacher" >星级师徒<span class="moveline"></span></a></li>
		<li class="rsbox"><a href="./admin.php?controller=staff&method=advise" >提交建议<span class="moveline"></span></a></li>
		<?php }?>
	</ul>	
	</div>
	<div class="toutiao">
		<ul class="clearfix">
			<li class="fl company">四四一</li>
			<li class="fl flag"><div class="redword">头条</div><span class="line1"></span><img src="./img/images/speaker.png" alt="" class="speaker"></li>
			<?php if ($_smarty_tpl->tpl_vars['staff']->value=='') {?>
			<li class="tmes fl"><span>今天是个好日子！</span><span>大家快出去晒晒太阳！</span></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['birinfo']->value!='') {?>
			<li class="tmes fl">
			<?php  $_smarty_tpl->tpl_vars['bir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['birinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bir']->key => $_smarty_tpl->tpl_vars['bir']->value) {
$_smarty_tpl->tpl_vars['bir']->_loop = true;
?>
			<span><?php echo $_smarty_tpl->tpl_vars['bir']->value['name'];?>
今日过生日</span>
			<?php } ?>
			</li>
			<?php }?>
		</ul>
	</div>
	<div class="relace_box">
			<div class="content" >
		<form id="searchForm" class="searchForm" name="searchForm" action="" method="post">
        <input type="text" id="search_input" class="search_input ui-autocomplete-input" tabindex="1" maxlength="64" autocomplete="off" value="" placeholder="请输入搜索内容" style="color: rgb(153, 153, 153);">
        <input type="submit" id="search_button" class="search_button" value="搜&nbsp;索" >
    </form>
	</div>
	<div class="timeshow">
		<ul>
			<li class="today">今日<span>TODAY</span></li>
			<li class="date"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</li>
			<li class="week"><?php echo $_smarty_tpl->tpl_vars['week']->value;?>
<span><?php echo $_smarty_tpl->tpl_vars['weeke']->value;?>
</span></li>
		</ul>

	</div>
	<dl class="hotsearch">
	<?php if ($_smarty_tpl->tpl_vars['staff']->value=='') {?>
		<dt>急需：</dt>
		
		<dd><a href="./admin.php?controller=index&method=checkresume">机电结构设计工程师</a></dd>
		<dd><a href="./admin.php?controller=index&method=checkresume">电气线路工程师</a></dd>
		<dd><a href="./admin.php?controller=index&method=checkresume">软件工程师</a></dd>
		<dd><a href="./admin.php?controller=index&method=checkresume">销售员</a></dd>
		<dd><a href="./admin.php?controller=index&method=checkresume">外贸业务员</a></dd>
		<?php }?>
	</dl>
	<div class="J_Poster poster-main" data-setting='{
                                                                                    "width":1000,
                                                                                    "height":270,
                                                                                    "posterWidth":640,
                                                                                    "posterHeight":270,
                                                                                    "scale":0.8,
                                                                                    "autoPlay":true,
                                                                                    "delay":2000,
                                                                                    "speed":300
																					}'>
	<div class="poster-btn poster-prev-btn"></div>
    <ul class="poster-list">
    	<li class="poster-item"><a href="#"><img src="./img/images/1.jpg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="./img/images/2.jpg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="./img/images/3.jpg" width="100%" height="100%"></a></li>
    </ul>
    <div class="poster-btn poster-next-btn"></div>
</div>
<div class="adv">
	<span></span>
	<p>你还未登录，点击&nbsp;<a href="./tpl/reglogin/reg.html">注册</a>/<a href="./tpl/reglogin/login.html">登录</a></p>
	<ul class="clearfix">
		<li class="otherlogin fl">第三方登录</li>
		<li class="fl"><img src="./img/images/tencent.png" alt="qq"></li>
		<li class="fl"><img src="./img/images/weibo.png" alt="weibo"></li>
		<li class="fl"><img src="./img/images/weixin.png" alt="weixin"></li>
	</ul>
</div>
	
				<div class="news" id="news">
					<ul class="lastnew" id="lastnew">
						<li class="a zc_after"><a href="javascript:void(0)">招聘动态</a></li>
						<li class="b"><a href="javascript:void(0)">往昔消息</a></li>
					</ul>
				</div>
				<div class="newscontent" id="newscontent">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
			<li class="item<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
>" id="item<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
			<div class="newstitle" ><h3><a href="./ajaxcheck.php?action=getnews&item=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="pjaxnews"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h3>						
			</div>
			<div class="newsbody" >
			<div class="timebox" >
				<div class="yearbox"><span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['news']->value['time'];?>
<?php $_tmp1=ob_get_clean();?><?php echo substr($_tmp1,0,4);?>
</span></div>
				<div class="monthbox"><span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['news']->value['time'];?>
<?php $_tmp2=ob_get_clean();?><?php echo substr($_tmp2,5,2);?>
</span></div>
			</div>
			<div class="kindof">
				<p>关键字：</p>
				<span title="关键字"><?php echo $_smarty_tpl->tpl_vars['news']->value['type'];?>
</span>
			</div>
				<div class="newsimg fl">
				<img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
" alt="新闻" width="80px" height="80px">
				</div>
				<div class="newsp fl">
				<p><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
<?php $_tmp3=ob_get_clean();?><?php echo mb_substr($_tmp3,0,180);?>
...</p>
				</div>
				
			</div>
		</li>
		<?php } ?>

	</ul>
</div>
<div class="lastcontent" id="lastcontent" style="display:none">
	<ul>
		<li class="item1" id="item1">
			<div class="lasttitle" id="lasttitle1"><h3><a href="#">“海装舰技部陆高工莅临我司指导工作</a></h3>			
			</div>
			<div class="lastbody" id="lastbody1">
			<div class="timebox" id="timebox">
				<div class="yearbox"><span>2015</span></div>
				<div class="monthbox"><span>11</span></div>
			</div>
			<div class="kindof">
				<p>关键字：</p>
				<span title="关键字">其他</span>
			</div>
				<div class="newsimg fl"><img src="./img/images/news/7.jpg" alt="" width="80px" height="80px"></div>
			<div class="newsp fl">
				<p>10月10日，海装舰技部陆鸿武高工莅临我司，与公司高层进行了座谈并参观了公司重点产品生产车间。
				【在座谈中，公司总经理欧阳金桂就公司发展历程和主要产品生产、应用及新品研发情况向陆高工作了详细汇报。陆高工对公司在新品开发及重点产品生产交付和保障服务中所付出的努力和作出的贡献给予了肯定和赞许，同时对公司在加强国内外先进技术的学习...</p>
			</div>
				
			</div>
		</li>
		<li class="item2" id="item2">
			<div class="lasttitle" id="lasttitle2"><h3><a href="#">“海装舰技部陆高工莅临我司指导工作</a></h3>						
			</div>
			<div class="lastbody" id="lastbody2">
			<div class="timebox" id="timebox">
				<div class="yearbox"><span>2015</span></div>
				<div class="monthbox"><span>11</span></div>
			</div>
			<div class="kindof">
				<p>关键字：</p>
				<span title="关键字">其他</span>
			</div>
			<div class="newsimg fl"><img src="./img/images/news/7.jpg" alt="" width="80px" height="80px"></div>
			<div class="newsp fl">
				<p>10月10日，海装舰技部陆鸿武高工莅临我司，与公司高层进行了座谈并参观了公司重点产品生产车间。
				【在座谈中，公司总经理欧阳金桂就公司发展历程和主要产品生产、应用及新品研发情况向陆高工作了详细汇报。陆高工对公司在新品开发及重点产品生产交付和保障服务中所付出的努力和作出的贡献给予了肯定和赞许，同时对公司在加强国内外先进技术的学习与探索...</p>
			</div>
			</div>
		</li>
		<li class="item3" id="item3">
			<div class="lasttitle" id="lasttitle3"><h3><a href="#">“海装舰技部陆高工莅临我司指导工作</a></h3>						
			</div>
			<div class="lastbody" id="lastbody3">
			<div class="timebox" id="timebox">
				<div class="yearbox"><span>2015</span></div>
				<div class="monthbox"><span>11</span></div>
			</div>
			<div class="kindof">
				<p>关键字：</p>
				<span title="关键字">其他</span>
			</div>
				<div class="newsimg fl"><img src="./img/images/news/7.jpg" alt="" width="80px" height="80px"></div>
			<div class="newsp fl">
				<p>10月10日，海装舰技部陆鸿武高工莅临我司，与公司高层进行了座谈并参观了公司重点产品生产车间。
				【在座谈中，公司总经理欧阳金桂就公司发展历程和主要产品生产、应用及新品研发情况向陆高工作了详细汇报。陆高工对公司在新品开发及重点产品生产交付和保障服务中所付出的努力和作出的贡献给予了肯定和赞许，同时对公司在加强国内外先进技术的学习与探索...</p>
			</div>
			</div>
		</li>
	</ul>
</div>


<div class="side" style="display:none">
	<ul>
		<li><a href="./tpl/index/contactme.html" target="_blank"><div class="sidebox"><img src="./img/images/side_icon01.png">联系我们</div></a></li>
		<li><a href="./tpl/index/bdmap.html" target="_blank"><div class="sidebox"><img src="./img/images/side_icon02.png">公司地址</div></a></li>
		<li style="border:none;"><a href="javascript:goTop();"><div class="sidebox"><img src="./img/images/side_icon05.png">返回顶部</div></a></li>
	</ul>
</div>
	</div>

<div class="linkbox" id="linkbox">
	<dl>
        <dt>友情链接</dt>
        <dd>
                                                    <a href="http://www.cnjsic.com" target="_blank">九江中船仪表官方网站</a> <span>|</span>                                <a href="http://http://www.csic.com.cn" target="_blank">中国船舶重工集团公司</a> <span>|</span>                                <a href="http://www.csic710.com.cn/" target="_blank">中船重工第七一0研究所</a> <span>|</span>                                <a href="http://www.nudt.edu.cn/" target="_blank">国防科技大学</a> <span>|</span>                                <a href="http://www.hrbeu.edu.cn" target="_blank">哈尔滨工程大学</a> <span>|</span>                                <a href="http://www.hjgcdx.cn/" target="_blank">海军工程大学</a> <span>|</span>                                                                                              <a href="http://www.pxto.com.cn" target="_blank">培训网</a>                                           <a href="http://www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">更多</a>
        </dd>
    </dl>
</div>
<div class="wrapper">
        <div class="inner_wrapper">
            <a href="#" target="_blank" rel="nofollow">版本更新</a>
            <a href="#" target="_blank" rel="nofollow">帮助中心</a>
            <a href="./tpl/index/contactme.html" target="_blank" rel="nofollow">联系我们</a>
            <span class="tel">服务热线：<em>0792-8269317 (8:00 -17:30)</em></span>
        </div>
        <div class="copyright">
            <span><em>©</em>2015 九江中船仪表有限责任公司 </span>
        </div>
    </div>
    <div style='display:none;'>
		<div id='require' style='padding:10px; background:#fff;'>
			<h2>招聘职位：	机电结构设计工程师</h2>
			<hr />
			<p>具体要求：	
1、陀螺、罗经、液压、光纤、光学等相关专业本科以上毕业

2、具有良好的沟通、协调能力。

3、无不良诚信记录。

4、有一年以上导航、液压产品设计开发工作经验。

5、待遇：面试合格后，试用3-6个月，待遇面议，试用期结束考核合格的，转为正式员工，待遇上调，缴纳各项社会保险；非本地户籍人员可安排两人一间单身公寓住宿。

面试须知：

面试时，请携带本人身份证、毕业证及个人简历等材料；面试时间另行约定。
</p>
<br>
<h2>招聘职位：	电气线路工程师</h2>
			<hr />
			<p>具体要求：	
1、电气工程等相关专业硕士以上毕业

2、具有良好的沟通、协调能力。

3、无不良征信记录。

4、有一年以上电气产品设计开发工作经验。

5、待遇：面试合格后，试用3-6个月，待遇面议，试用期结束考核合格的，转为正式员工，待遇上调，缴纳各项社会保险；非本地户籍人员可安排两人一间单身公寓住宿。

面试须知：

面试时，请携带本人身份证、毕业证及个人简历等材料；面试时间另行约定。
</p>
<br>
<h2>招聘职位：	软件工程师</h2>
			<hr />
			<p>具体要求：	
1、 本科专业为电气自动化专业，研究生专业为计算机等相关专业毕业。

2、 熟悉linex系统及其系统下图形界面和控制软编程，对工业用嵌入式软件或系统感兴趣，熟悉ARM体系结构下的软硬件环境。

3、 有一年以上产品嵌入式软件开发经验。

4、 具有良好的沟通、协调能力及服务意识。

5、 无不良征信记录。

6、 待遇：面试合格后，试用3-6个月，待遇面议；试用期结束考核合格的，转为正式员工，待遇上调（基础工资+业务提成），缴纳各项社会保险；非本地户籍人员可安排两人一间单身公寓住宿。

面试须知：

面试时，请携带本人身份证、毕业证及个人简历等材料；面试时间另行约定。
</p>
<br>
<h2>招聘职位：	销售员	</h2>
			<hr />
			<p>具体要求：	
1、机、电等相关专业毕业。

2、熟悉市场营销规则。

3、具有良好的沟通、协调能力及服务意识。

4、无不良征信记录。

5、有一年以上从事销售工作经验。

6、待遇：面试合格后，试用3个月，待遇面议；试用期结束考核合格的，转为正式员工，待遇上调（基础工资+业务提成），缴纳各项社会保险；非本地户籍人员可安排两人一间单身公寓住宿。
</p>
<br>
<h2>招聘职位：	外贸业务员</h2>
			<hr />
			<p>	
1、国际贸易、商务英语等相关专业本科毕业，英语水平为CET六级；有较好的英语读写能力，掌握基本商务对话。

2、熟悉国际贸易相关法律及业务流程。

3、具有良好的沟通、协调能力及服务意识。

4、无不良征信记录。

5、有一年以上从事外贸工作经验者。

6、待遇：面试合格后，试用3个月，待遇面议；试用期结束考核合格的，转为正式员工，待遇上调（基础工资+业务提成），缴纳各项社会保险；非本地户籍人员可安排两人一间单身公寓住宿。

面试须知：

面试时，请携带本人身份证、毕业证、CET证及个人简历等材料；面试时间另行约定。
</p>
			
			<hr />
			<p>有才你就来!我们随时欢迎你的加入！</p>
		</div>
	</div>
</div>
<script id="tempChoList" type="text/template">
<ul class="fix">
    <li class="ntitle">$title$</li>
	<li class="ntime">日期：$time$</li>
    <li class="back"><a href="admin.php" class="nbtn">返回</a></li>
	<li class="ncontent"><p>$content$</p></li>
</ul>
</script>
	
<script src="./img/js/jquery-2.1.4.min.js"></script>
<script src="./img/js/carousel.js"></script>
<script src="./img/js/jquery.colorbox-min.js"></script>
<script src="./img/js/pjax.js"></script>
<script src="./img/js/index.js"></script>
</body>
</html><?php }} ?>

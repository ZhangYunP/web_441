<?php /* Smarty version Smarty-3.1.16, created on 2015-12-24 08:59:42
         compiled from ".\tpl\index\introduce.html" */ ?>
<?php /*%%SmartyHeaderCode:26524567a878dd0bab3-48466657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed0feaa37917414cedfcad55ecd865dd7a77e59' => 
    array (
      0 => '.\\tpl\\index\\introduce.html',
      1 => 1450947579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26524567a878dd0bab3-48466657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_567a878dd74ae2_86858037',
  'variables' => 
  array (
    'people' => 0,
    'staff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567a878dd74ae2_86858037')) {function content_567a878dd74ae2_86858037($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>介绍</title>
  <link href="./img/css/video-js.css" rel="stylesheet" type="text/css">
	<link href="./img/css/introduce.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./img/util/iconfont/iconfont.css">
  <link rel="stylesheet" href="./img/css/nav.css">
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
              <input type="text" class="searchtext" name="q" id='searchtext' autocomplete="off"/>
              <input type="submit" class="searchbutton" value="搜索" id='searchbutton'/>
            </form>
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
	<div class="maincontain">
  <div class="history">
    <div class="history-date">
      <ul>
        <h2 class="first">
          <a href="#nogo">背景简介</a><img src="./img/images/ybclogo.png" alt="四四一介绍" />
          <a class="more-history" href="">来源九江中船仪表有限公司</a>
        </h2>
        <li class="green">
          <h3>20世纪50年代末</h3>
          <dl>
          <span class="cart1"></span>
            <dt>四四一厂(九江仪表厂)是由国家兴建的专业生产舰船导航仪器仪表的重点军工企业。
</dt>
          </dl>
        </li>
        <li class="green">
          <h3>01.01<span>2006</span></h3>
          <dl>
          <span class="cart1"></span>
            <dt>九江中船仪表有限责任公司（四四一厂）由原国防科工委批准组建。
</dt>
          </dl>
        </li>
        <li>
          <h3>04.01<span>2009</span></h3>
          <dl>
          <span class="cart1"></span>
            <dt>公司改制为国有控股的股份制有限责任公司。<span>新的起点，新的开始 </span></dt>
            <A href="http://www.cnjsic.com" target="_blank">http://www.cnjsic.com</A>
          </dl>
        </li>
        <li>
          <h3>视频资料</h3>
          <dl class="videobox">
            <dt><div class="video-js-box">
    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="400" height="300"
      data-setup="{}">
      <source src="./img/images/aima.mp4" type='video/mp4' />
      <source src="./img/images/aima.webm" type='video/webm' />
    </video>
   
  </div></dt>
          </dl>
        </li>
        <li>
          <h3>地理位置</h3>
          <dl>
          <span class="cart1"></span>
            <dt>本公司位于江西省九江市，北邻长江，南依庐山，紧靠京九、武九、合九、铜九铁路和昌九、九景高速公路，交通便利。
</dt>
          </dl>
        </li>
        <li >
          <h3>研发能力</h3>
          <dl>
          <span class="cart1"></span>
            <dt>公司是具有集机、电、液一体的产品开发、设计能力和铸、焊、热处理、电镀、油漆、表面处理、精密机加工、电子装配等综合加工制造能力的大二型企业。拥有先进的数控机床和各种加工、试验、计量检测设备。公司还建立了一套行之有效的质量管理体系，先后通过了GB/T19001-2008和GJB9001B-2009质量管理体系三方换版审核以及海军质量管理体系认定审核，取得了国家二级保密单位资格证书和军工系统安全生产标准化二级单位资格证书。公司计量室为国防三级计量站，拥有计量标准11项
</dt>
          </dl>
        </li>
      </ul>
    </div>
    
    <div class="history-date">
      <ul>
        <h2 class="date02"><a href="#nogo">产品种类</a></h2>
        <li class="green">
          <h3>导航仪器仪表</h3>
          <dl>
          <span class="cart1"></span>
            <dt>包括操舵仪系列、陀螺罗经系列、陀螺稳定平台系列等。</dt>
          </dl>
        </li>
        <li class="green">
          <h3>精密液压元件及系统</h3>
          <dl>
          <span class="cart1"></span>
            <dt>包括CDY型电液伺服阀、CSDY型射流管电液伺服阀、CBDY型复合比例流量阀、H/YXQ-006液压舵机、YK系列液压伺服控制装置和BDY9型系列电液自动控制执行机构等。</dt>
          </dl>
        </li>
        <li>
          <h3>环保系列产品</h3>
          <dl>
          <span class="cart1"></span>
            <dt>包括含油污水监测仪表及装置、CY-2型油份浓度计、OCD1型隔爆油份浓度计、悬浮物分离器等。<span>高安全性，测量精度好</span></dt>
          </dl>
        </li>
        <li>
          <h3><span>精密电工计量仪器、仪表</span></h3>
          <dl>
          <span class="cart1"></span>
            <dt>包括多功能标准表系列、便携式电能表校验装置、三相指示仪表检验台、多表位校验台、数字式检测仪表、电源产品等。<span>性能卓越，价格实惠</span></dt>
          </dl>
        </li>
        
      </ul>
    </div>
    
    <div class="history-date">
      <ul>
        <h2 class="date02"><a href="#nogo">获得荣誉</a></h2>
        <li class="green">
          <h3>2010</h3>
          <dl>
          <span class="cart1"></span>
            <dt>国家重大技术改进成果一等奖</dt>
          </dl>
        </li>
        <li>
          <h3>2010</h3>
          <dl>
          <span class="cart1"></span>
            <dt>国家/国防科学技术进步与重要科研成果二等奖</dt>
          </dl>
        </li>
        <li>
          <h3><span>2010</span></h3>
          <dl>
          <span class="cart1"></span>
            <dt>国家科学技术进步三等奖</dt>
            <br><br><br><br>
          </dl>
        </li>
      </ul>
    </div>
  </div>

  <script src="./img/js/jquery-2.1.4.min.js"></script> 
  <script src="./img/js/video.js"></script>
  <script src="./img/js/introduce.js"></script>
  
</body>
</html><?php }} ?>

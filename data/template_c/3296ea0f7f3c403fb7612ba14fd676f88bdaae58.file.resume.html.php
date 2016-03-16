<?php /* Smarty version Smarty-3.1.16, created on 2015-12-22 08:02:10
         compiled from ".\tpl\index\resume.html" */ ?>
<?php /*%%SmartyHeaderCode:44315674ab035d0996-67494333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3296ea0f7f3c403fb7612ba14fd676f88bdaae58' => 
    array (
      0 => '.\\tpl\\index\\resume.html',
      1 => 1450771280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44315674ab035d0996-67494333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5674ab0362c159_37466755',
  'variables' => 
  array (
    'resume' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'provinces' => 0,
    'cites' => 0,
    'provinces1' => 0,
    'mycites' => 0,
    'sex' => 0,
    'st_year' => 0,
    'st_month' => 0,
    'st_day' => 0,
    'colclass' => 0,
    'bsclass' => 0,
    'ssclass' => 0,
    'bkclass' => 0,
    'dzclass' => 0,
    'mymj' => 0,
    'mjrank' => 0,
    'mjclass' => 0,
    'rwd' => 0,
    'myprac' => 0,
    'stf' => 0,
    'stf1' => 0,
    'hm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5674ab0362c159_37466755')) {function content_5674ab0362c159_37466755($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提交简历</title>
	<link rel="stylesheet" href="./img/css/resume.css">	
	<link rel="stylesheet" href="./img/css/nav.css">	
	<link rel="stylesheet" type="text/css" href="./img/util/iconfont/iconfont.css">
	<link rel="stylesheet" type="text/css" href="./img/css/sidebox.css">
</head>
<body>
<iframe src="./tpl/index/uploadfile.html" id="uploadfile" name="uploadfile" frameborder="0"  style=" position:absolute;display:none;z-index:9999;"></iframe>
		<div id="mask" class="mask" style="display:none"></div>
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
	 				<li class="navlogin fr"><a href="./admin.php?controller=index&method=checkresume">我的简历&nbsp;<i class="iconfont icon-user1"></i><span class="moveline"></span></a></li>
					
				</ul>
			</div>
		</div>
		<div class="notice" id="notice">
			<i class="iconfont icon-attentioncircled"></i>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请诚信填写简历，如发现有不真实情况,</p>
			<p>本公司有及时终止劳动合同的权利！</p>
		</div>
	<div id="resume" class="resume ">

		<div class="rename" id="rename">
		<?php if ($_smarty_tpl->tpl_vars['resume']->value=='') {?>
			<span class="myresume">我的简历</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit") {?>
			<span class="myresume">我的简历(预览)</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
			<span class="myresume">我的简历(已上传)</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="all") {?>
			<span class="myresume">我的简历(预览/已上传)</span>
			<?php }?>
			<span class="exline" id="exline"></span>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
		<div class="mr_edit" style="cursor: pointer;display:none;" >
								<i class="iconfont icon-bianji"></i><em>修改</em>
							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
		<div class="mr_edit" style="cursor: pointer;" >
								<i class="iconfont icon-bianji"></i><em>修改</em>
							</div>					
							<?php }?>
				<div class="formbox" id="formbox">
				
			<form action="" method="post"  class="inputform">
				<div class="leftbox clearfix" id="leftbox">
				<div class="user" id="user">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 姓名 </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent1">
								<input type="text" class="username cominput" id="username" name="username" placeholder="请输入姓名">
					<span class="iconimg"><i class="iconfont icon-user"></i></span>
							</div>
					<div class="inner1" style="display:none">
						<span class="innername" id="innername"></span>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent1" style="display:none">
								<input type="text" class="username cominput" id="username" name="username" placeholder="请输入姓名">
					<span class="iconimg"><i class="iconfont icon-user"></i></span>
							</div>
					<div class="inner1" style="display:block">
						<span class="innername" id="innername"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
					</div>
					<?php }?>

				</div>
				<div class="email" id="email">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 邮箱  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent2">
								<input type="text" class="emailer cominput" id="emailer" name="emailer" placeholder="请输入邮箱">
					<span class="iconimg"><i class="iconfont icon-email"></i></span>
							</div>
					<div class="inner2" style="display:none">
						<span class="inneremail" id="inneremail"></span>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent2" style="display:none">
								<input type="text" class="emailer cominput" id="emailer" name="emailer" placeholder="请输入邮箱">
					<span class="iconimg"><i class="iconfont icon-email"></i></span>
							</div>
					<div class="inner2" style="display:block">
						<span class="inneremail" id="inneremail"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>
					</div>
					<?php }?>
				</div>
				<div class="phone" id="phone">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 手机  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent3">
								<input type="text" class="phonenum cominput" id="phonenum" name="phonenum" placeholder="请输入手机号码">
					<span class="iconimg"><i class="iconfont icon-phone"></i></span>
							</div>
							<div class="inner3" style="display:none">
								<span class="innerphone" id="innerphone"></span>
							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
							<div id="inputcontent3" style="display:none">
								<input type="text" class="phonenum cominput" id="phonenum" name="phonenum" placeholder="请输入手机号码">
					<span class="iconimg"><i class="iconfont icon-phone"></i></span>
							</div>
							<div class="inner3" style="display:block">
								<span class="innerphone" id="innerphone"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span>
							</div>
							<?php }?>
					
				</div>
				<div class="nativeplace" id="nativeplace" >
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 籍贯  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent4">
								<input type="text" class="cominput provinces " id="provinces" name="provinces" placeholder="请输入所在省份"><span>省</span>&nbsp;&nbsp;
					<input type="text" class="cominput cites" id="cites" name="cites" placeholder="请输入所在城市"><span>市</span>
							</div>
							<div class="inner4" style="display:none">
								<span class="innernative" id="innernative"></span>

							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
							<div id="inputcontent4" style="display:none">
								<input type="text" class="cominput provinces " id="provinces" name="provinces" placeholder="请输入所在省份"><span>省</span>&nbsp;&nbsp;
					<input type="text" class="cominput cites" id="cites" name="cites" placeholder="请输入所在城市"><span>市</span>
							</div>
							<div class="inner4" style="display:block">
								<span class="innernative" id="innernative"><?php echo $_smarty_tpl->tpl_vars['provinces']->value;?>
省<?php echo $_smarty_tpl->tpl_vars['cites']->value;?>
市</span>

							</div>
							<?php }?>

									</div>
				<div class="myplace" id="myplace" >
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 所在地  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent5">
								<input type="text" class="cominput provinces" id="provinces1" name="provinces1" placeholder="请输入所在省份"><span>省</span>&nbsp;&nbsp;
					<input type="text" class="cominput cites " id="cites1" name="mycites" placeholder="请输入所在城市"><span>市</span>
							</div>
						<div class="inner5" style="display:none">
							<span class="innerplace" id="innerplace"></span>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent5" style="display:none">
								<input type="text" class="cominput provinces" id="provinces1" name="provinces1" placeholder="请输入所在省份"><span>省</span>&nbsp;&nbsp;
					<input type="text" class="cominput cites " id="cites1" name="mycites" placeholder="请输入所在城市"><span>市</span>
							</div>
						<div class="inner5" style="display:block">
							<span class="innerplace" id="innerplace"><?php echo $_smarty_tpl->tpl_vars['provinces1']->value;?>
省<?php echo $_smarty_tpl->tpl_vars['mycites']->value;?>
市</span>
						</div>
							<?php }?>

					
				</div>
				<div class="sex" id="sex">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 性别  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
					<div class="sexselect" id="sexselect">
					<div class="clearfix mr_sex">
			   	 				<span class="mr_man fl "><i class="iconfont icon-p-man"></i><em>男</em></span>						
								<span class="mr_women fl active"><i class="iconfont icon-nv"></i><em>女</em></span>
			   	 			</div>
					</div>
					<div class="inner" style="display:none">
						<span class="innersex" id="innersex"></span>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div class="sexselect" id="sexselect" style="display:none">
					<div class="clearfix mr_sex">
			   	 				<span class="mr_man fl "><i class="iconfont icon-p-man"></i><em>男</em></span>						
								<span class="mr_women fl active"><i class="iconfont icon-nv"></i><em>女</em></span>
			   	 			</div>
					</div>
					<div class="inner comstyle" style="display:block">
						<span class="innersex" id="innersex"><?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</span>
					</div>
							<?php }?>

				</div>
				<div class="age" id="age">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 出生日期  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
					<div id="inputcontent6">
						<select name="st_year" id="st_year" >
						<option value="">------</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
					</select>&nbsp;<span>年</span>&nbsp;
					<select name="st_month" id="st_month" >
						<option value="">------</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>&nbsp;<span>月</span>&nbsp;
					<select name="st_day" id="st_day" >
						<option value="">------</option>
					</select>&nbsp;<span>日</span>&nbsp;
					</div>
					<div class="inner6" style="display:none">
							<span id="innerage" class="innerage"></span>

					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent6" style="display:none">
						<select name="st_year" id="st_year" >
						<option value="">------</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
					</select>&nbsp;<span>年</span>&nbsp;
					<select name="st_month" id="st_month" >
						<option value="">------</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>&nbsp;<span>月</span>&nbsp;
					<select name="st_day" id="st_day" >
						<option value="">------</option>
					</select>&nbsp;<span>日</span>&nbsp;
					</div>
					<div class="inner6" style="display:block">
							<span id="innerage" class="innerage"><?php echo $_smarty_tpl->tpl_vars['st_year']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['st_month']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['st_day']->value;?>
</span>

					</div>
							<?php }?>

								</div>
				<div class="collageclass" id="collageclass">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 学历  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent7">
								<select name="colclass" id="ycol" >
						<option value="">------</option>
						<option value="博士">博士</option>
						<option value="硕士">硕士</option>
						<option value="本科">本科</option>
						<option value="大专">大专</option>
						<option value="prime">其他</option>
					</select>
					</div>	
					<div class="inner7" style="display:none">
					<span id="innercollageclass" class="innercollageclass"></span>
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent7" style="display:none">
								<select name="colclass" id="ycol" >
						<option value="">------</option>
						<option value="博士">博士</option>
						<option value="硕士">硕士</option>
						<option value="本科">本科</option>
						<option value="大专">大专</option>
						<option value="prime">其他</option>
					</select>
					</div>	
					<div class="inner7" style="display:block">
						<span id="innercollageclass" class="innercollageclass"><?php echo $_smarty_tpl->tpl_vars['colclass']->value;?>
</span>
				</div>
							<?php }?>
							</div>
				<div class="collage" id="collage">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 教育经历  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
					<div id="inputcontent8" class="defineclass">
					<div  class="comcol bs" style="display:none">
						<span>博士</span>&nbsp;<input type="text" class="cclass cominput" id="bsclass" name="bsclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol ss" style="display:none">
						<span>硕士</span>&nbsp;<input type="text" class="bclass cominput" id="ssclass" name="ssclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div class="comcol bk">
					<span>本科</span>&nbsp;<input type="text" class="colname cominput" id="bkclass" name="bkclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol dz" style="display:none">
						<span>大专</span>&nbsp;<input type="text" class="cclass cominput" id="dzclass" name="dzclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol qt" style="display:none">
						<span>其他</span>&nbsp;<input type="text" class="aclass cominput" id="qtclass" name="gzclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					</div>
					<div class="inner8" style="display:none">
						<span class="innercollage" id="innercollage"></span>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent8" class="defineclass" style="display:none">
					<div  class="comcol bs" style="display:none">
						<span>博士</span>&nbsp;<input type="text" class="cclass cominput" id="bsclass" name="bsclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol ss" style="display:none">
						<span>硕士</span>&nbsp;<input type="text" class="bclass cominput" id="ssclass" name="ssclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div class="comcol bk">
					<span>本科</span>&nbsp;<input type="text" class="colname cominput" id="bkclass" name="bkclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol dz" style="display:none">
						<span>大专</span>&nbsp;<input type="text" class="cclass cominput" id="dzclass" name="dzclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					<div  class="comcol qt" style="display:none">
						<span>其他</span>&nbsp;<input type="text" class="aclass cominput" id="qtclass" name="gzclass" placeholder="请输入毕业院校">
					<span class="iconimg"><i class="iconfont icon-iconfontshouye1"></i></span>
					</div>
					</div>
					<div class="inner8" style="display:block">
						<span class="innercollage" id="innercollage">
							<?php if ($_smarty_tpl->tpl_vars['bsclass']->value!='') {?>
							博士：<?php echo $_smarty_tpl->tpl_vars['bsclass']->value;?>
<br>
							硕士：<?php echo $_smarty_tpl->tpl_vars['ssclass']->value;?>
<br>
							本科：<?php echo $_smarty_tpl->tpl_vars['bkclass']->value;?>
<br>
							<?php } elseif ($_smarty_tpl->tpl_vars['bsclass']->value==''&&$_smarty_tpl->tpl_vars['ssclass']->value!='') {?>
							硕士：<?php echo $_smarty_tpl->tpl_vars['ssclass']->value;?>
<br>
							本科：<?php echo $_smarty_tpl->tpl_vars['bkclass']->value;?>
<br>
							<?php } elseif ($_smarty_tpl->tpl_vars['ssclass']->value==''&&$_smarty_tpl->tpl_vars['bsclass']->value==''&&$_smarty_tpl->tpl_vars['bkclass']->value!='') {?>
							本科：<?php echo $_smarty_tpl->tpl_vars['bkclass']->value;?>
<br>
							<?php } elseif ($_smarty_tpl->tpl_vars['dzclass']->value!='') {?>
							大专：<?php echo $_smarty_tpl->tpl_vars['dzclass']->value;?>

							<?php }?>
						</span>
					</div>
							<?php }?>

				</div>

				
				<div class="major" id="marjor">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 专业  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent9">
								<input type="text" name="mymj" class="mymj cominput" id="mymj" placeholder="请输入所学专业">
					<span class="iconimg"><i class="iconfont icon-xuelijiaoyu"></i></span>
							</div>
					<div class="inner9" style="display:none">
						<span class="innermj" id="innermj"></span>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent9" style="display:none">
								<input type="text" name="mymj" class="mymj cominput" id="mymj" placeholder="请输入所学专业">
					<span class="iconimg"><i class="iconfont icon-xuelijiaoyu"></i></span>
							</div>
					<div class="inner9" style="display:block">
						<span class="innermj" id="innermj"><?php echo $_smarty_tpl->tpl_vars['mymj']->value;?>
</span>
					</div>
							<?php }?>

				</div>
				<div class="rank" id="rank">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 专业排名  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent10">
								<select name="mjrank" id="mjrank">
						<option value="">------</option>
						<option value="15">前15%</option>
						<option value="30">前30%</option>
						<option value="45">前45%</option>
						<option value="100">其他</option>
					</select>
							</div>
					<div class="inner10" style="display:none">
						<span class="innerrank" id="innerrank"></span>
					</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
							<div id="inputcontent10" style="display:none">
								<select name="mjrank" id="mjrank">
						<option value="">------</option>
						<option value="15">前15%</option>
						<option value="30">前30%</option>
						<option value="45">前45%</option>
						<option value="100">其他</option>
					</select>
							</div>
					<div class="inner10" style="display:block">
						<span class="innerrank" id="innerrank"><?php echo $_smarty_tpl->tpl_vars['mjrank']->value;?>
%</span>
					</div>
							<?php }?>

				</div>
				<div class="majorclass" id="majorclass">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 主要的专业课  </span><span class="mr_title_r"></span>
							</div>							
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent11">
								<textarea name="mjclass" id="mjclass" cols="65" rows="6" style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
						<div class="inner11" style="display:none">
							<span class="innemjclass" id="innemjclass"></span>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent11" style="display:none">
								<textarea name="mjclass" id="mjclass" cols="65" rows="6" style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
						<div class="inner11" style="display:block">
							<span class="innemjclass" id="innemjclass"><?php echo $_smarty_tpl->tpl_vars['mjclass']->value;?>
</span>
						</div>
							<?php }?>

				</div>
					<div class="reward clearfix" id="reward">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 在校期间获得奖励  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent12">
								<div class="mr_head_r" style="cursor: pointer;">
								<i class="iconfont icon-add"></i><em>添加</em>
							</div>
					<textarea name="rwd" id="rwd" cols="65" rows="3" placeholder="1." style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
							<div class="inner12" style="display:none">
								<span class="innerrwd" id="innerrwd"></span>
							</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
					<div id="inputcontent12" style="display:none">
								<div class="mr_head_r" style="cursor: pointer;">
								<i class="iconfont icon-add"></i><em>添加</em>
							</div>
					<textarea name="rwd" id="rwd" cols="65" rows="3" placeholder="1." style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
							<div class="inner12" style="display:block">
								<span class="innerrwd" id="innerrwd"><?php echo $_smarty_tpl->tpl_vars['rwd']->value;?>
</span>
							</div>
							<?php }?>

				</div>
				<div class="practice clearfix" id="practice">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 实习/工作经历  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent13">
								<div class="mr_head_r" style="cursor: pointer;">
								<i class="iconfont icon-add"></i><em>添加</em>
							</div>
					<textarea name="myprac" id="myprac" cols="65" rows="3" placeholder="1." style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
							<div class="inner13" style="display:none">
								<span class="innerprac" id="innerprac"></span>
							</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent13" style="display:none">
								<div class="mr_head_r" style="cursor: pointer;">
								<i class="iconfont icon-add"></i><em>添加</em>
							</div>
					<textarea name="myprac" id="myprac" cols="65" rows="3" placeholder="1." style="resize:none;padding-left:14px;line-height:16px;"></textarea>
							</div>
							<div class="inner13" style="display:block">
								<span class="innerprac" id="innerprac"><?php echo $_smarty_tpl->tpl_vars['myprac']->value;?>
</span>
							</div>
							<?php }?>

								</div>
					<div class="hopestf" >
						<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 期望的职位  </span><span class="mr_title_r"></span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent14" >
								<select name="stf" id="stf" >
						<option value="">------</option>
						<option value="机械类">机械类</option>
						<option value="电子类">电子类</option>
						<option value="软件类">软件类</option>
						<option value="销售/外贸类">销售/外贸类</option>
						<option value="财务类">财务类</option>
					</select>&nbsp;
					<select name="stf1" id="stf1">
						<option value="">------</option>
					</select>
							</div>
					<div class="inner14" style="display:none">
							<span id="innerstf" class="innerstf"></span>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent14" style="display:none">
								<select name="stf" id="stf" >
						<option value="">------</option>
						<option value="机械类">机械类</option>
						<option value="电子类">电子类</option>
						<option value="软件类">软件类</option>
						<option value="销售/外贸类">销售/外贸类</option>
						<option value="财务类">财务类</option>
					</select>&nbsp;
					<select name="stf1" id="stf1">
						<option value="">------</option>
					</select>
							</div>
					<div class="inner14" style="display:block">
							<span id="innerstf" class="innerstf"><?php echo $_smarty_tpl->tpl_vars['stf']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['stf1']->value;?>
</span>
					</div>
							<?php }?>

					</div>
					<div class="hopemoney" id="hopemoney">
					<div class="mr_title">
								<span class="mr_title_l"></span><span class="mr_title_c"> 期望薪资  </span><span class="mr_title_r"></span>
							</div>
														<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
							<div id="inputcontent15">
								<select name="hm" id="hm">
								<option value="">------</option>
							<option value="1000-2000">1000-2000</option>
							<option value="2000-3000">2000-3000</option>
							<option value="3000-4000">3000-4000</option>
							<option value="4000-5000">4000-5000</option>
							<option value="5000以上">5000以上</option>
						</select>
							</div>
						<div class="inner15" style="display:none">
							<span class="innermoney" id="innermoney"></span>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
						<div id="inputcontent15" style="display:none">
								<select name="hm" id="hm">
								<option value="">------</option>
							<option value="1000-2000">1000-2000</option>
							<option value="2000-3000">2000-3000</option>
							<option value="3000-4000">3000-4000</option>
							<option value="4000-5000">4000-5000</option>
							<option value="5000以上">5000以上</option>
						</select>
							</div>
						<div class="inner15" style="display:block">
							<span class="innermoney" id="innermoney"><?php echo $_smarty_tpl->tpl_vars['hm']->value;?>
</span>
						</div>
							<?php }?>

					</div>
				
				</div>
				<div class="sbmbtn" id="sbmbtn">
					<input type="button" value="提交" class="submit" style="display:none">
				</div>
					
					
			</form>
			<?php if ($_smarty_tpl->tpl_vars['resume']->value==''||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
			<a href="javascript:void(0)" class="save" id="save"><i class="iconfont icon-gou"></i>保存</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all") {?>
			<a href="javascript:void(0)" class="save" id="save" style="display:none"><i class="iconfont icon-gou"></i>保存</a>
			<?php }?>
		</div>
	</div>
	<div class="rightbox" id="rightbox">
		<div class="mr_upload">
	         <i class="iconfont icon-xiao11"></i><a class="inline cboxElement" href="javascript:void(0)" target="uploadfile" title="上传附件简历">我要上传附件简历</a>
        </div>
	</div>
	<div class="rightbox" id="rightbox1">
		<div class="mr_compelet">
	         <em id="percent">0%</em>&nbsp;&nbsp;<i class="iconfont icon-jianli17"></i><a class="inline cboxElement" href="#" title="简历完整度">简历的完整程度</a>
        </div>
	</div>
	<div class="process">
		<div class="solidline" id="solidline"></div>
	</div>
	<div class="side" style="display:none">
	<ul>
		<li><a href="./tpl/index/contactme.html" target="_blank"><div class="sidebox"><img src="./img/images/side_icon01.png">联系我们</div></a></li>
		<li><a href="./tpl/index/bdmap.html" target="_blank"><div class="sidebox"><img src="./img/images/side_icon02.png">公司地址</div></a></li>
		<li style="border:none;"><a href="javascript:goTop();"><div class="sidebox"><img src="./img/images/side_icon05.png">返回顶部</div></a></li>
	</ul>
	
</div>

<?php if ($_smarty_tpl->tpl_vars['resume']->value=='') {?>
<div class="submitbox" style="display:none">
				<div class="contbox ">
			<div class="editbox">
				<a href="./admin.php?controller=index&method=deleteform">
				<div class="before-line1 line" style="display: block; width: 0px; height:2px;right: 85px;
				top:0px; overflow: hidden;"></div>
				        <div class="before-line2 line" style="display: block; height: 0px; width:2px;left:0px; overflow: hidden;"></div>
				        <div class="before-line3 line" style="display: block; width: 0px; height:2px;left:0px; top:137px; overflow: hidden;"></div>
				        <div class="after-line1 line" style="display: block; width: 0px; height:2px;left: 85px;top:137px; overflow: hidden;"></div>
				        <div class="after-line2 line" style="display: block; height: 0px;width:2px; bottom: -2px;left:170px; overflow: hidden;"></div>
				        <div class="after-line3 line" style="display: block; width: 0px;height:2px; overflow: hidden;top:0px;right:0px;"></div>
				        <span>
    						<i class="iconfont icon-shanchu bigfont"></i><em>删除</em>
				        </span>
				</a>
				
			</div>
			<div class="downloadbox">
				<a href="./admin.php?controller=index&method=downloadform">
		<div class="before-line1 line" style="display: block; width: 0px; height:2px;right: 85px;
				top:0px; overflow: hidden;"></div>
				        <div class="before-line2 line" style="display: block; height: 0px; width:2px;left:0px; overflow: hidden;"></div>
				        <div class="before-line3 line" style="display: block; width: 0px; height:2px;left:0px; top:137px; overflow: hidden;"></div>
				        <div class="after-line1 line" style="display: block; width: 0px; height:2px;left: 85px;top:137px; overflow: hidden;"></div>
				        <div class="after-line2 line" style="display: block; height: 0px;width:2px; bottom: -2px;left:170px; overflow: hidden;"></div>
				        <div class="after-line3 line" style="display: block; width: 0px;height:2px; overflow: hidden;top:0px;right:0px;"></div>
        <span>
			<i class="iconfont icon-xiazai bigfont"></i><em>下载</em>
        </span>
				</a>
			</div>
		</div>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['resume']->value=="submit"||$_smarty_tpl->tpl_vars['resume']->value=="all"||$_smarty_tpl->tpl_vars['resume']->value=="upload") {?>
	<div class="choicebox" id="choicebox" style="display:none">
	<h1>请选择你要删除的文件</h1>
	<span class="cbtn" id="cboxClose"></span>
	<form action="./admin.php?controller=index&method=deleteform" method="post" class="choiceform">
	
	</form>	
	</div>
	<div id="mask" class="mask" style="display:none"></div>
	<div class="submitbox" style="display:block">
				<div class="contbox ">
			<div class="editbox">
				<a href="javascript:void(0)">
				<div class="before-line1 line" style="display: block; width: 0px; height:2px;right: 85px;
				top:0px; overflow: hidden;"></div>
				        <div class="before-line2 line" style="display: block; height: 0px; width:2px;left:0px; overflow: hidden;"></div>
				        <div class="before-line3 line" style="display: block; width: 0px; height:2px;left:0px; top:137px; overflow: hidden;"></div>
				        <div class="after-line1 line" style="display: block; width: 0px; height:2px;left: 85px;top:137px; overflow: hidden;"></div>
				        <div class="after-line2 line" style="display: block; height: 0px;width:2px; bottom: -2px;left:170px; overflow: hidden;"></div>
				        <div class="after-line3 line" style="display: block; width: 0px;height:2px; overflow: hidden;top:0px;right:0px;"></div>
				        <span>
    						<i class="iconfont icon-shanchu bigfont"></i><em>删除</em>
				        </span>
				</a>
				
			</div>
			<div class="downloadbox">
				<a href="./admin.php?controller=index&method=downloadform">
		<div class="before-line1 line" style="display: block; width: 0px; height:2px;right: 85px;
				top:0px; overflow: hidden;"></div>
				        <div class="before-line2 line" style="display: block; height: 0px; width:2px;left:0px; overflow: hidden;"></div>
				        <div class="before-line3 line" style="display: block; width: 0px; height:2px;left:0px; top:137px; overflow: hidden;"></div>
				        <div class="after-line1 line" style="display: block; width: 0px; height:2px;left: 85px;top:137px; overflow: hidden;"></div>
				        <div class="after-line2 line" style="display: block; height: 0px;width:2px; bottom: -2px;left:170px; overflow: hidden;"></div>
				        <div class="after-line3 line" style="display: block; width: 0px;height:2px; overflow: hidden;top:0px;right:0px;"></div>
        <span>
			<i class="iconfont icon-xiazai bigfont"></i><em>下载</em>
        </span>
				</a>
			</div>
		</div>
	</div>

	
	<?php }?>
<script type="text/javascript" src="./img/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./img/js/alert.js"></script>
		<script type="text/javascript" src="./img/js/resume.js"></script>
		</body>
</html><?php }} ?>

<?php /* Smarty version Smarty-3.1.16, created on 2015-12-21 09:22:20
         compiled from ".\tpl\index\uploadfile.html" */ ?>
<?php /*%%SmartyHeaderCode:138135677af777ca4c5-89275133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ca7a418d331408d4fe6bac9e37a0866b9c54b7' => 
    array (
      0 => '.\\tpl\\index\\uploadfile.html',
      1 => 1450689660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138135677af777ca4c5-89275133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5677af77806378_56117984',
  'variables' => 
  array (
    'success' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5677af77806378_56117984')) {function content_5677af77806378_56117984($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传简历附件</title>
	<link rel="stylesheet" href="./img/css/uploadfile.css">
	<link rel="stylesheet" href="../../img/css/uploadfile.css">
	
</head>
<body >
	<div id="cboxLoadedContent" style="width: 502px; overflow: auto; height: 243px;">
	<?php if ($_smarty_tpl->tpl_vars['success']->value==0) {?>
	<div id="uploadFile" class="popup">
	    <table width="100%">
	    	<tbody>
	    	<tr>
	        	<td align="center">
	                <form action="./admin.php?controller=index&method=uploadform" method="post" enctype="multipart/form-data" id="upform">
	                    	<span class="up_text">选择上传文件</span>
	                        <input type="file" name="file" id="upfile" class="up_input" onchange="handlefile()">
	                        <input type="submit" name="submit" class="subbtn" value="提交">
	                </form>
	            </td>
	        </tr>
	        <tr><div class="filename" id="filename">
	        </div></tr>
	    	<tr>
	        	<td align="left"><span class="notice">支持word、pdf格式文件<br>文件大小需小于2M</span></td>
	        </tr>
	        <tr>
	        	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.doc格式后上传</td>
	        </tr>
	    </tbody></table>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['success']->value==1||$_smarty_tpl->tpl_vars['success']->value==2) {?>
	<div class="mes"><?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
</div>
	<div class="btn">确定</div>
	<?php }?>
	</div>
	<div class="title" id="title"><span>上传简历附件</span><div class="cbtn" id="cboxClose"></div></div>
	<script src="./img/js/jquery-2.1.4.min.js"></script>
	<script src="./img/js/uploadfile.js"></script>
	</body>
</html><?php }} ?>

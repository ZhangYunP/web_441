document.getElementById('cboxClose').onclick=function(){
		parent.window.document.getElementById('uploadfile').style.display="none";
		parent.window.document.getElementById('mask').style.display="none";
	}
	function getfilename(o){
		var pos=o.lastIndexOf('\\');
		return o.substring(pos+1);
	}
	function handlefile(){
	var file=document.getElementById('upfile').value;
	var filename=getfilename(file);
	document.getElementById('filename').innerHTML=filename;
	}
	function callback(msg)     
{     
    $(".popup").css('display','none');     
    $(".mes").css('display','block');     
    $(".btn").css('display','block');     
    $(".mes").html(msg); 

} 
function tip(success){
	$(".tip").css('display','block'); 
	if(success){
		$('<div class="tip">TIPS:我们会及时处理你的事物，现在你可以点击"确定"按钮返回页面，继续其他操作。</div>').appendTo('#cboxLoadedContent');
	}else{
		$('<div class="tip">TIPS:抱歉，请点击"确定"按钮返回页面，再次上传相关文件。</div>').appendTo('#cboxLoadedContent');
	}
	
}

$('.btn').on('click',function(){
	 $(".popup").css('display','block');     
    $(".mes").css('display','none');     
    $(".btn").css('display','none'); 
    $(".tip").css('display','none'); 
	$(window.parent.document).find('#uploadfile').css('display','none');
	$(window.parent.document).find('#mask').css('display','none');
})

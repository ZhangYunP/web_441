if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
		window.scrollReveal = new scrollReveal({reset: true});
	})();
};
var searchtext=document.getElementById('searchtext');
var searchbtn=document.getElementById('searchbutton');
searchtext.onfocus=function(){
    searchbutton.style.border='2px solid #7ecef1';
};
searchtext.onblur=function(){
    searchbutton.style.border='2px solid #cccccc';
};
var flag=true;
$('#classname').on('click',function(){
	$('#classname').html('选择分类'+'<i class="iconfont icon-sanjiao"></i>');
	if(flag){
		$('.nosub').fadeIn();
		$('.classname').css('color','white');
		$('.classname').css('background','#7ecef1');
		flag=false;
	}else{
		$('.nosub').fadeOut();
		$('.classname').css('color','#cccccc');
		$('.classname').css('background','white');
		flag=true;
	}
	return flag;
});
$('.keji').click(function(){
	$('.kejibox').css('display','block');
	$('.yeyabox').css('display','none');
	$('.pagestr2').css('display','none');
	$('.pagestr').css('display','block');
	var inner=$('.keji').html();
	$('#classname').html(inner);
	$('.nosub').fadeOut();
	flag=true;
});
$('.yeya').click(function(){
	$('.kejibox').css('display','none');
	$('.yeyabox').css('display','block');
	$('.pagestr2').css('display','block');
	$('.pagestr').css('display','none');
	var inner=$('.yeya').text();
	$('#classname').html(inner);
	$('.nosub').fadeOut();
	flag=true;
});

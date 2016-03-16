var wflag=true;
var index=1;
var index1=1;
var index2=0;
checknullinput();
for(var i=0;i<16;i++){
			$('.inner'+i).find('span').addClass('comstyle');
}
$('input').attr('autocomplete','off');
$('.navwx a').click(function(e){
var tooltips = document.querySelector('.wxqrcode');
    if(wflag){
    wflag=false;
    tooltips.style.display="block";
    }else{
        wflag=true;
        tooltips.style.display="none";  
    }
    e.stopPropagation();
    return wflag;
});

$('.searchtext').focus(function(){
    $('.searchbutton').css('border','2px solid #7ecef1');
});

$('.searchtext').blur(function(){
    $('.searchbutton').css('border','2px solid #cccccc');
});

function goTop(){
	$('html,body').animate({'scrollTop':0},600);
};

$(".side ul li").hover(function(){
		$(this).find(".sidebox").animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})	
	},function(){
		$(this).find(".sidebox").animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
	});	

$(window).scroll(
		function(){
			var windowheight=$(window).height();
	var scrolltop=$(document).scrollTop();
				if(scrolltop>windowheight/2){
		$('.side').css('display','block');
	}else{
		$('.side').css('display','none');
	}
		});

$('.mr_sex span').on('click',function(){
	if(!$(this).hasClass('activ')){
		$(this).addClass('active').siblings('span').removeClass('active');
	}
})

$('#save').on('click',function(){
	$('#save').css('display','none');
	$('.submit').css('display','block');
	$('.mr_edit').css('display','block');
	$('.sexselect').css('display','none');
	$('.mr_head_r').css('display','none');
	$('.inner').css('display','block');
	var sextext=$('.mr_sex span.active').find('em').text();
		$('.innersex').addClass('comstyle').html(sextext);
	for(var i=0;i<16;i++){
		var inner=($('#inputcontent'+i).find('input').val()||$('#inputcontent'+i).find('textarea').val()||$('#inputcontent'+i).find('select').find("option:selected").text());
		if(i==8){
			inner="";
			var len=$('.comcol:visible').length;
				for(var n=0;n<len;n++){
					inner+=($('.comcol:visible').eq(n).find('span').html()+'：'+$('.comcol:visible').eq(n).find('input').val()+"<br>");
				}
		}
		$('#inputcontent'+i).css('display','none');
		
		if(i==12||i==13){
			inner="";
			var num=$('#inputcontent'+i).find('textarea').length;
			if(num>1){
				for(var n=0;n<index;n++){
					inner+=((n+1)+"."+$('#inputcontent'+i).find('textarea').eq(n).val()+"<br>");
				}
			}else{
				inner=$('#inputcontent'+i).find('textarea').val();
			}

		}
		if(i==6){
			var year=$('#st_year').find('option:selected').text();
            var month=$('#st_month').find('option:selected').text();
            var day=$('#st_day').find('option:selected').text();
            if((month||day)!=""){
            	inner=(year+'/'+month+'/'+day);
            }else{
            	inner="";
            }
		}
		if(i==4||i==5){
			inner="";
			var nums=$('#inputcontent'+i).find('input').length;
			if($('#inputcontent'+i).find('input').val()!=""){
				for(var k=0;k<nums;k++){
				inner+=($('#inputcontent'+i).find('input').eq(k).val()+$('#inputcontent'+i).find('span').eq(k).html());
			}
			}
			
		}
		if(i==14){
			var stff=$('#stf').find('option:selected').text();
			var stff1=$('#stf1').find('option:selected').text();
			inner=(stff+'/'+stff1);
		}
		$('.inner'+i).css('display','block');
		$('.inner'+i).find('span').addClass('comstyle').html(inner);
		
	}
	checknullinput();
});

	$('.submit').on('click',function(){
			var percent=$('#percent').html();
			percent=parseInt(percent);
			if(percent<=0.6){
				 $.MsgBox.Confirm("温馨提示", "请填写完整后再提交！")
			}else{
			var sex=$('.mr_sex').find('.active').text();
	$.ajax({
		 	type:"post",   
            url:"./admin.php?controller=index&method=saveresume", 
            data:$('.inputform').serialize()+"&sex="+sex,   
            cache:false, //不缓存此页面   
            success:function(data){
            	var flag=$.parseJSON(data).success;
            	if(flag==1){
            		$.MsgBox.Alert("消息", "简历提交成功！");
            	$('.submit').css('display','none');
            	$('.submitbox').css('display','block');
            	$('.myresume').html("我的简历(预览)");
            	}else{
            		 $.MsgBox.Alert("消息", "简历提交失败,请重新提交！");


            	}
            		            }
	})
			}
	
	})
	
	

function onmouseover(obj){
	$("."+obj+" .before-line1,."+obj+" .after-line1").show();
		$("."+obj+" .before-line1").stop().animate({"width":85+'px'},300);
		$("."+obj+" .after-line1").stop().animate({"width":85+'px'},300);

		clearTimeout(t1);
		clearTimeout(t2);
		clearTimeout(t3);
		t1 = setTimeout(function(){
			$("."+obj+" .before-line2").show();
			$("."+obj+" .after-line2").show();
			$("."+obj+" .before-line2").stop().animate({"height":137+'px'},300);
			$("."+obj+" .after-line2").stop().animate({"height":139+'px'},300);

		},300);
		t2 = setTimeout(function(){
			$("."+obj+" .before-line3").show();
			$("."+obj+" .after-line3").show();
			$("."+obj+" .before-line3").stop().animate({"width":85+'px'},400);
			$("."+obj+" .after-line3").stop().animate({"width":85+'px'},400);

		},600);
		t3 = setTimeout(function(){
			$('.'+obj).find('a').css('background','#FF7C54');
			$('.'+obj).find('i').css('color','white');
			$('.'+obj).find('em').css('color','white');
		},1000)
	};
	function onmouseout(obj){

		clearTimeout(t1);
		clearTimeout(t2);
		clearTimeout(t3);
		$("."+obj+" .before-line1").stop().animate({"width":0});
		$("."+obj+" .before-line2").stop().animate({"height":0});
		$("."+obj+" .before-line3").stop().animate({"width":0});
		$("."+obj+" .after-line1").stop().animate({"width":0});
		$("."+obj+" .after-line2").stop().animate({"height":0});
		$("."+obj+" .after-line3").stop().animate({"width":0});
		$('.'+obj).find('a').css('background','white');
		$('.'+obj).find('i').css('color','#999999');
		$('.'+obj).find('em').css('color','#999999');

};

	var t1,t2,t3;
	$('.editbox').hover(function(){
		onmouseover('editbox');

	},function(){
		onmouseout('editbox');
	});
	$('.downloadbox').hover(function(){
		onmouseover('downloadbox');
	},function(){
		onmouseout('downloadbox');
	})
	
	$('.editbox a').on('click',function(){

	})


$('.mr_edit').on('click',function(){
	for(var i=0;i<16;i++){
		$('.inner'+i).css('display','none');
		$('#inputcontent'+i).css('display','block');
		var inputcontents=$('.inner'+i).find('span').html();
		$('#inputcontent'+i).find('input').val(inputcontents);
		$('#inputcontent'+i).find('textarea').val(inputcontents);
		$('#inputcontent'+i).find('select').find("option:selected").text(inputcontents);
		if(i==6){
			var a=inputcontents;
			var arr=new Array();
			arr=a.split('/');
			$('#st_year').find("option:selected").text(arr[0]);
			$('#st_month').find("option:selected").text(arr[1]);
			$('#st_day').find("option:selected").text(arr[2]);
		}
		if(i==14){
			var a=inputcontents;
			var arr=new Array();
			arr=a.split('/');
			$('#stf').find("option:selected").text(arr[0]);
			$('#stf1').find("option:selected").text(arr[1]);
					}
		if(i==8){
			var a=inputcontents;
			var arr1=a.match(/本科.*?<br>/);
			var arr2=a.match(/硕士.*?<br>/);
			var arr3=a.match(/博士.*?<br>/);
			var arr4=a.match(/大专.*?<br>/);
			var arr5=a.match(/其他.*?<br>/);
			if(arr1){
				var str1=arr1.join();
			var trans1=str1.replace(/本科：/,"").replace(/<br>/,"");
			$('#bkclass').val(trans1);
			}else{
				$('#bkclass').val("");
			}
			if(arr2){
				var str2=arr2.join();
			var trans2=str2.replace(/硕士：/,"").replace(/<br>/,"");
			$('#ssclass').val(trans2);
			}else{
					$('#ssclass').val("");
			}
			if(arr3){
				var str3=arr3.join();
			var trans3=str3.replace(/博士：/,"").replace(/<br>/,"");
			$('#bsclass').val(trans3);
			}else{
					$('#bsclass').val("");
			}
			if(arr4){
				var str4=arr4.join();
			var trans4=str4.replace(/大专：/,"").replace(/<br>/,"");
			$('#dzclass').val(trans4);
			}else{
					$('#dzclass').val("");
			}
			if(arr5){
				var str5=arr5.join();
			var trans5=str5.replace(/其他：/,"").replace(/<br>/,"");
			$('#qtclass').val(trans5);
			}else{
					$('#qtclass').val("");
			}
		}
		if(i==4||i==5){
			var a=inputcontents;
			 var arr1=a.match(/^.*?省/);
			var arr2=a.match(/省.*?市$/);
			if(arr1||arr2){
				 var str1=arr1.join();
				var str2=arr2.join();
				var trans1=str1.substring(0,str1.length-1);
				var trans2=str2.substring(1,str2.length-1);
			for(var n=0;n<2;n++){
				$('#inputcontent'+i).find('input').eq(n).val(trans1);
			}
			}
			   
		}	
	}
	$('#save').css('display','block');
	$('.submit').css('display','none');
	$('.mr_edit').css('display','none');
	$('.sexselect').css('display','block');
	$('.mr_head_r').css('display','block');
		var sexname=$('.innersex').html();
		$('.sex .inner').css('display','none');
		if(sexname=="男"){
			$('.mr_man').addClass('active');
		}else{
			$('.mr_women').addClass('active');
		}
});

$('#inputcontent12').on('click','span',function(){
	index--;
	$(this).prev("textarea").remove();
	$(this).remove();
	return index;
})
$('#inputcontent13').on('click','span',function(){
		index1--;
	
	$(this).prev("textarea").remove();
	$(this).remove();
	return index1;
})
$('#inputcontent12 .mr_head_r').click(function(){
	index++;
	var nd="rwd"+index;
$(this).parent().append('<textarea  cols="65" rows="3"  style="resize:none;padding-left:14px;line-height:16px;"></textarea>','<span class="cancel"><i class="iconfont icon-quxiao"></i>取消</span>');

for(var i=1;i<index;i++){
	var name=$(this).parent().find('textarea').eq(i).attr('name');
if(name==undefined){
	$(this).parent().find('textarea').eq(i).attr({
	"name":'rwd',
	"id":nd,
	"placeholder":index+'.'+"如需删除，为了避免bug请从后开始按序号删除"
	});
}
}
return index;
});

$('#inputcontent13 .mr_head_r').click(function(){
	index1++;
	var nd="myprac"+index1;
$(this).parent().append('<textarea  cols="65" rows="3"  style="resize:none;padding-left:14px;line-height:16px;"></textarea>','<span class="cancel"><i class="iconfont icon-quxiao"></i>取消</span>');
for(var i=1;i<index1;i++){
	var name=$(this).parent().find('textarea').eq(i).attr('name');
if(name==undefined){
	$(this).parent().find('textarea').eq(i).attr({
	"name":'myprac',
	"id":nd,
	"placeholder":index1+'.'+"如需删除，为了避免bug请从后开始按序号删除"
	});
}
}
return index1;
});

$('#ycol').change(function(){
	var ycol=$('#ycol').find("option:selected").text();
	$('.defineclass').find('div').css('display','none');
 switch (ycol) {
                    case ("博士"):
                        $('.bs').css('display','block');
                        $('.ss').css('display','block');
                        $('.bk').css('display','block');
                        break;
                    case ("硕士"):
                         $('.ss').css('display','block');
                        $('.bk').css('display','block');
                        break;
                    case ("本科"):
                      $('.bk').css('display','block');
                        break;
                        case ("大专"):
                        $('.dz').css('display','block');
                        break;
                    case ("其他"):
                       $('.qt').css('display','block');
                        break;
                  	default:
                  	$('.bk').css('display','block');
                  	break;
                }
            });

function getDaysInMonth(month,year){
var days;
if (month==1 || month==3 || month==5 || month==7 || month==8 || month==10 || month==12) {
days=31;
}else if (month==4 || month==6 || month==9 || month==11){
days=30;
}else{
if ((year%4 == 0 && year%100 != 0) || (year%400 == 0)) {     // 判断是否为润二月
days=29; 
}else { 
days=28; 
}
}
return days;
}

function getDays(month,year){
var days = getDaysInMonth(month,year);
for(var i=1;i<=days;i++){
var optionDay = document.createElement("option");
optionDay.innerHTML=i;
optionDay.value=i;
$('#st_day').append(optionDay);
}
}
function setDays(){
var year=$('#st_year').find('option:selected').val();
var month=$('#st_month').find('option:selected').val();
getDays(month,year);
}

function setstf(hopestf){
	var stf="";
	switch (hopestf) {
		case ('机械类'):
		stf='机电结构设计工程师';
		break;
		case ('电子类'):
		stf='电气线路工程师';
		break;
		case ('软件类'):
		stf='软件工程师';
		break;
		case ('销售/外贸类'):
		stf='销售员,外贸业务员';
		break;
		case ('财务类'):
		stf='财会';
		break;
		default :
		str="机电结构工程师";
		break;
	}
	return stf;
	};

function getstf(){
$('#stf1').html('<option value="">------</option>');
var hopestf=$('#stf').find('option:selected').text();
var str=setstf(hopestf);
var arr=str.split(',');
var num=arr.length;
for(var i=0;i<num;i++){
	$('#stf1').append(function(){
		return "<option value="+arr[i]+">"+arr[i]+"</option>";
	});

}
};

$('#st_month').change(function(){
	setDays();
});

$('#stf').change(function(){
	getstf();
});

function checknullinput(){
		index2=0;
	for(var i=1;i<16;i++){
		var content=$('.inner'+i).find('span').html();
		if(content==""||content=="------"){
			index2++;

		}
	}
	var percent=Math.ceil((13-index2)/13*100);
	var percent1=percent/100;
	var h=Math.ceil(57*percent1);
	if(h>57){
		h=57
	}
	$('.solidline').animate({height:h}, 300);
	if(percent>=93){
		percent=100;
	}else if(percent<=0)
	{
		percent=0;
	}
	$('#percent').html("").html(percent+'%');
	
};

$('.mr_upload').click(function(){
	 var mwidth=$(document).width();
    var mheight=$(document).height();
    $('#mask').css({
        display:'block',
        width: mwidth,
        height: mheight,
        background: '#cccccc',
        opacity:0.3
    });
	$('#uploadfile').css('display','block').attr({
		'width':mwidth,
		'height':mheight,
	});
});

$('#cboxClose').on('click',function(){
			$('.choicebox').css('display','none');
			$('.choiceform').children().remove();
			$("#mask").css('display','none');
})
$('.editbox').on('click',function(){
	if($('.choicebox').css('display')=="none"){
		$('.choicebox').css('display','block');
		var mwidth=$(document).width();
    var mheight=$(document).height();
    $('#mask').css({
        display:'block',
        width: mwidth,
        height: mheight,
        background: '#cccccc',
        opacity:0.2,
        zIndex:2
    });
	$.ajax({
		type:'get',
		url:'./admin.php?controller=index&method=choicebox',
		success:function(data){
			var data=$.parseJSON(data);
			var success=data.success;
			if(success==1){
				$('<p class="choicetype"></p>').html(data.type).appendTo('.choiceform');
				$('<label class="choicelab" id="choicelab"></label>').appendTo('.choiceform');
				$('<input type="checkbox" name="cbox" value="on"/>').appendTo('#choicelab');
				$('<span></span>').html(data.name).appendTo('#choicelab');
				$('<input type="submit" name="submit" value="确定" class="choicebtn"></input>').appendTo('.choiceform');
			}else if(success==2){
				$('<p class="choicetype"></p>').html(data.type).appendTo('.choiceform');
				$('<label class="choicelab" id="choicelab"></label>').appendTo('.choiceform');
				$('<input type="checkbox" name="cbox2" value="on"/>').appendTo('#choicelab');
				$('<span></span>').html(data.name).appendTo('#choicelab');
				$('<input type="submit" name="submit" value="确定" class="choicebtn"></input>').appendTo('.choiceform');
			}else if(success==3){
				$('<p class="choicetype"></p>').html(data.type).appendTo('.choiceform');
				$('<label class="choicelab" id="choicelab"></label>').appendTo('.choiceform');
				$('<input type="checkbox" name="cbox" value="on"/>').appendTo('#choicelab');
				$('<span></span>').html(data.name).appendTo('#choicelab');
				$('<p class="choicetype"></p>').html(data.type2).appendTo('.choiceform');
				$('<label class="choicelab" id="choicelab2"></label>').appendTo('.choiceform');
				$('<input type="checkbox" name="cbox2" value="on"/>').appendTo('#choicelab2');
				$('<span></span>').html(data.name).appendTo('#choicelab2');
				$('<input type="submit" name="submit" value="确定" class="choicebtn"></input>').appendTo('.choiceform');
			}
		}
	})
	}
	
})
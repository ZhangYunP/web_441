(function(){
　　if(navigator.userAgent.toLowerCase().indexOf("chrome") != -1){
　　　　var selectors = document.getElementsByTagName("input");
　　　　for(var i=0;i<selectors.length;i++){
　　　　if((selectors[i].type !== "submit") && (selectors[i].type !== "password")){
　　　　　　selectors[i].disabled= true;
　　　　}
　　}
　　setTimeout(function(){
　　　　for(var i=0;i<selectors.length;i++){
　　　　　　if(selectors[i].type !== "submit"){
　　　　　　　　selectors[i].disabled= false;
　　　　　　}
　　　　}
　　},100)
　　}
    function getCookie(objName){//获取指定名称的cookie的值 
    var arrStr = document.cookie.split("; "); 
    for(var i = 0;i < arrStr.length;i ++){ 
        var temp = arrStr[i].split("="); 
        if(temp[0] == objName) return unescape(temp[1]); 
    } 
} 
var myname=getCookie('myname');
if(myname){
    $('#name').val(myname);
}
})()

function regmessage(obj1,obj2,obj3,msg,flag){
    if(flag){
        $(obj1).css('display','inline-block');
        $(obj3).css('border-color','red');
        $(obj2).html(msg); 
    }else{
        $(obj1).css('display','none');
         $(obj3).css('border-color','#e7e7e7');
        $(obj2).html(msg); 
    }
    
        
}
var wflag=true;
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
})


 $('.inputicon .iconfont').on('click',function(){
    if($(this).hasClass('icon-iconfontweibiaoti10151'))
    {
        $(this).removeClass('icon-iconfontweibiaoti10151').addClass('icon-iconfontweibiaoti1015');
        $(this).parent().parent().find('input').attr('type','text');
    }else{
                $(this).removeClass('icon-iconfontweibiaoti1015').addClass('icon-iconfontweibiaoti10151');
                        $(this).parent().parent().find('input').attr('type','password');
    }
});

$('#pwd').on('keyup',function(){
    var pwdreg=/^([0-9]+|[a-z]+|[A-Z]+)$/;
    var pwdreg2=/([0-9]+[a-z]+)|([a-z]+[0-9]+)|([0-9]+[A-Z]+)|([A-Z]+[0-9]+)|([a-z]+[A-Z]+)|([A-Z]+[a-z]+)/;
    var pwdreg3=/([0-9]+[a-z]+[A-Z]+)|([0-9]+[A-Z]+[a-z]+)|([a-z]+[0-9]+[A-Z]+)|([a-z]+[A-Z]+[a-z]+)|([A-Z]+[a-z]+[0-9]+)|([A-Z]+[0-9]+[a-z]+)/;
    var width=$('#pwd').width();
    var warningwidth=width/3;
    var normalwidth=warningwidth*2;
    var successwidth=width;
if($('#pwd').val().length>0&&$('#pwd').val().length<8||pwdreg.test($('#pwd').val())){
    $('.safeclass1').css('background','red');
    $('.safeclass1').animate({'width':warningwidth},600);
}else if($('#pwd').val().length>7&&pwdreg2.test($('#pwd').val())&&!pwdreg3.test($('#pwd').val())){
        $('.safeclass1').css('background','yellow');
    $('.safeclass1').animate({'width':normalwidth},200);
}else if($('#pwd').val().length>7&&pwdreg3.test($('#pwd').val())){
        $('.safeclass1').css('background','green');
    $('.safeclass1').animate({'width':successwidth},100);
}
if($('#pwd').val().length<=0){
         $('.safeclass1').css('width',0);
         $('.safeclass1').css('background','transparent');
}
if($('#pwd').val().length>12){
        var sp=$('#pwd').val().substring(0,12);
        $('#pwd').val(sp);
}
}); 

$('#pwd1').on('keyup',function(){
    var pwd1reg=/^([0-9]+|[a-z]+|[A-Z]+)$/;
    var pwd1reg2=/([0-9]+[a-z]+)|([a-z]+[0-9]+)|([0-9]+[A-Z]+)|([A-Z]+[0-9]+)|([a-z]+[A-Z]+)|([A-Z]+[a-z]+)/;
    var pwd1reg3=/([0-9]+[a-z]+[A-Z]+)|([0-9]+[A-Z]+[a-z]+)|([a-z]+[0-9]+[A-Z]+)|([a-z]+[A-Z]+[a-z]+)|([A-Z]+[a-z]+[0-9]+)|([A-Z]+[0-9]+[a-z]+)/;
    var width=$('#pwd1').width();
    var warningwidth=width/3;
    var normalwidth=warningwidth*2;
    var successwidth=width;
if($('#pwd1').val().length>0&&$('#pwd1').val().length<8||pwd1reg.test($('#pwd1').val())){
    $('.safeclass').css('background','red');
    $('.safeclass').animate({'width':warningwidth},600);
}else if($('#pwd1').val().length>7&&pwd1reg2.test($('#pwd1').val())&&!pwd1reg3.test($('#pwd1').val())){
        $('.safeclass').css('background','yellow');
    $('.safeclass').animate({'width':normalwidth},200);
}else if($('#pwd1').val().length>7&&pwd1reg3.test($('#pwd1').val())){
        $('.safeclass').css('background','green');
    $('.safeclass').animate({'width':successwidth},100);
}
if($('#pwd1').val().length<=0){
         $('.safeclass').css('width',0);
         $('.safeclass').css('background','transparent');
}
if($('#pwd1').val().length>12){
        var sp=$('#pwd1').val().substring(0,12);
        $('#pwd1').val(sp);
}
});
function checkform(){
    var pwd = document.querySelector('#pwd').value;
    var pwd1 = document.querySelector('#pwd1').value;
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var closeObj2 = document.querySelector('span#pwd1close');
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    if (pwd.length <= 0)
    {
       regmessage(closeObj1,tipObj1,$('#pwd'),"密码不能为空！",1);
        return false;
    }
    else
    {
        regmessage(closeObj1,tipObj1,"",0);
    }
    if( !pwdReg.test(pwd) ){ 
        regmessage(closeObj1,tipObj1,$('#pwd'),"输入密码有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);

    }
    if (pwd1.length <= 0)
    {
        regmessage(closeObj2,tipObj1,$('#pwd1'),"确认密码不能为空！",1);
        return false;
    }
    else
    {
        regmessage(closeObj2,tipObj1,$('#pwd1'),"",0);

    }
    if( !pwdReg.test(pwd1) ){ 
        regmessage(closeObj2,tipObj1,$('#pwd1'),"确认密码有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj2,tipObj1,$('#pwd1'),"",0);

    }
    if(pwd!==pwd1)
    {
        closeObj2.style.display = "inline-block";
        closeObj1.style.display = "inline-block";
        tipObj1.style.display = "block";
        tipObj1.innerHTML = '两次密码输入不一致，请重新输入！';
        $('#pwd').css('border-color','red');
        $('#pwd1').css('border-color','red');
        return false; 
    }else
    {
        closeObj2.style.display = "none";
        closeObj1.style.display = "none";
        tipObj1.style.display = "none";
         $('#pwd').css('border-color','#e7e7e7');
        $('#pwd1').css('border-color','#e7e7e7');
        tipObj1.innerHTML = ''; 
    }
    

       return true; 
         }



function clearTips(num)
{    
    var pwd = document.querySelector('#pwd').value;
    var pwd1 = document.querySelector('#pwd1').value;
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var closeObj2 = document.querySelector('span#pwd1close');
    var pbordercolor=$('#pwd').css('border-color');
    var p1bordercolor=$('#pwd1').css('border-color');
        switch(num){
        case 2:
        if(pbordercolor.indexOf('rgb(255')){
            $('#pwd').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);
        }

        break;
        case 3:
        if(p1bordercolor.indexOf('rgb(255')){
            $('#pwd1').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj2,tipObj1,$('#pwd1'),"",0);
        }

        break;

    }

}



function checkpwd()
{
    var pass = document.querySelector('#pwd').value;
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    if (pass.length <= 0) {
            regmessage(closeObj1,tipObj1,$('#pwd'),"密码不能为空!",1);
        return false; 
    } 
    if(!pwdReg.test(pass)){
    regmessage(closeObj1,tipObj1,$('#pwd'),"密码输入错误",1);
        return false; 
    }else{
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);
        return true;
    }
    
}

function checkpwd1()
{
    var obj1 = document.querySelector('#pwd');
    var obj2 = document.querySelector('#pwd1');
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj2 = document.querySelector('span#pwd1close');
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    var cp=checkpwd();
    if(!cp){
        checkpwd();
    }
    if (obj2.value.length <= 0) {
       regmessage(closeObj2,tipObj1,$('#pwd1'),"确认密码不能为空!",1);
        return false; 
    }
    if (obj1.value != obj2.value ) {
        regmessage(closeObj2,tipObj1,$('#pwd1'),"两次密码输入不一致，请重新输入!",1);
        return false; 
    }
    if(!pwdReg.test(obj2.value)){
        regmessage(closeObj2,tipObj1,$('#pwd1'),"密码输入错误",1);
        return false; 
    }else{
                regmessage(closeObj2,tipObj1,$('#pwd1'),"",0);
                return true;

    }
}
  








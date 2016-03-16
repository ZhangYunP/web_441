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
var clientheight=$(window).height();
var regboxheight=$('.regbox').height();
var navbarheight=$('.navbar').height();
var margintop=clientheight-regboxheight-navbarheight;
$('.footbox').css('margin-top',margintop-30);
$('.searchtext').focus(function(){
    $('.searchbutton').css('border','2px solid #7ecef1');
});
$('.searchtext').blur(function(){
    $('.searchbutton').css('border','2px solid #cccccc');
});


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

function checkform(){
    var name = document.querySelector('#name').value;
    var pwd = document.querySelector('#pwd').value;
    var vcode = document.querySelector('#vcode').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('span#vcodeclose');
    var nameReg = /^\w{6,12}$/; 
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    if (name.length <= 0) 
    {
          regmessage(closeObj,tipObj,$('#name'),"用户名不能为空!",1);
          return false; 
    }
     else
    {
        regmessage(closeObj,tipObj,$('#name'),"",0);
    }
    if( !nameReg.test(name) ){ 
        regmessage(closeObj,tipObj,$('#name'),"用户名输入有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj,tipObj,$('#name'),"",0);
    }
    if (pwd.length <= 0)
    {
       regmessage(closeObj1,tipObj1,$('#pwd'),"密码不能为空！",1);
        return false;
    }
    else
    {
        regmessage(closeObj1,tipObj1,"",0);
    }
    if(pwd==name){
       regmessage(closeObj1,tipObj1,$('#pwd'),"用户名不能和密码一样！",1);
        return false; 
    }else
    {
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);
    }
    if( !pwdReg.test(pwd) ){ 
        regmessage(closeObj1,tipObj1,$('#pwd'),"输入密码有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);

    }
   
    if (vcode.length != 4) 
    {
          regmessage(closeObj4,tipObj4,$('#vcode'),"验证码错误！",1);

        return false;
    }
     else
    {
          regmessage(closeObj4,tipObj4,$('#vcode'),"",0);

    }


       return true; 
         }



function clearTips(num)
{    
    var name = document.querySelector('#name').value;
    var pwd = document.querySelector('#pwd').value;
    var vcode = document.querySelector('#vcode').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('span#vcodeclose'); 
    var nbordercolor=$('#name').css('border-color');
    var pbordercolor=$('#pwd').css('border-color');
    var vbordercolor=$('#vcode').css('border-color');   
    switch(num){
        case 1:
         if(nbordercolor.indexOf('rgb(255')){
            $('#name').css('border-color','#7ecef1');
        }else{
            regmessage(closeObj,tipObj,$('#name'),"",0);
        }
        break;
        case 2:
        if(pbordercolor.indexOf('rgb(255')){
            $('#pwd').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj1,tipObj1,$('#pwd'),"",0);
        }

        break;
        case 5:
        if(vbordercolor.indexOf('rgb(255')){
            $('#vcode').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj4,tipObj4,$('#vcode'),"",0);
        }

        break;

    }

}






function checkname () {
         var tipObj = document.querySelector('p#nametips');
        var closeObj = document.querySelector('span#nameclose');
        var name = document.querySelector('#name').value;
        var nameReg = /^\w{6,12}$/;

          if (name.length <= 0) 
    {
          regmessage(closeObj,tipObj,$('#name'),"用户名不能为空!",1);
          return false; 
    }
          if( !nameReg.test(name) ){ 
        regmessage(closeObj,tipObj,$('#name'),"用户名输入有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj,tipObj,$('#name'),"",0);
    }
    
    }
  


function checkpwd()
{
    var pass = document.querySelector('#pwd').value;
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    var cn=checkname();
    if(!cn){
        checkname();
    }
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


function checkvcode()
{
    var obj1 = document.querySelector('#vcode');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('#vcodeclose');
    var cp=checkpwd();
    if(!cp){
        checkpwd();
    }
    if (obj1.value.length <= 0) {
       regmessage(closeObj4,tipObj4,$('#vcode'),"验证码不能为空!",1);   
        return false;
    }
    if (obj1.value.length != 4) {
       regmessage(closeObj4,tipObj4,$('#vcode'),"验证码错误!",1);    
        return false;
    }
     
}
function ajaxcheckvode(){
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('span#vcodeclose');
    $.ajax({
            type:'get',
            url:'../../ajaxcheck.php?action=checkvcode&vcode='+$('#vcode').val(),
            success:function(data){
                var data=$.parseJSON(data).success;
                if(data){
                regmessage(closeObj4,tipObj4,$('#vcode'),"验证码正确",0);
                tipObj4.style.color="green"
                $('#vcode').css('border-color','green');
                $('.submit').attr('disabled',false);
                return true;  
                }else{
                    regmessage(closeObj4,tipObj4,$('#vcode'),"验证码错误！",1); 
                    $('.submit').attr('disabled',true);
                    return false;           
                        }
                
            },
            error:function(jqxhr){
                document.write(jqxhr.status);
            }

        }) 
}

$('#vcode').on('keyup',function(){
    if($('#vcode').val().length==4){
        ajaxcheckvode();
    }
});

function changecode()
{
   var url = document.querySelector('#vcodeimg').src ;
   console.log(url);
   var rand = Math.floor(Math.random() * ( 1000 + 1));
   url += '&rand=' +  rand;
   document.querySelector('#vcodeimg').src  = url;
}

function addCookie(objName,objValue,objHours){//添加cookie 
    var str = objName + "=" + escape(objValue); 
    if(objHours > 0){//为0时不设定过期时间，浏览器关闭时cookie自动消失 
        var date = new Date(); 
        var ms = objHours*3600*1000; 
        date.setTime(date.getTime() + ms); 
        str += "; expires=" + date.toGMTString(); 
    } 
    document.cookie = str; 
} 



function delCookie(name){//为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间 
    var date = new Date(); 
    date.setTime(date.getTime() - 10000); 
    document.cookie = name + "=a; expires=" + date.toGMTString(); 
}

$('#agre').click(function(){
    if(!$(this).find('i').hasClass('icon-gou')){
       $(this).find('i').addClass('icon-gou');
        addCookie('myname',$('#name').val(),24*30);
    }else{
        $(this).find('i').removeClass('icon-gou');
       delCookie('myname');
    }
});
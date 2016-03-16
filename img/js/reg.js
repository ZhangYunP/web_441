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
var tflag=true;
var wflag=true;
$('.helpicon').click(function(e){
var tooltips = document.querySelector('#tooltips');
    if(tflag){
    tflag=false;
    tooltips.style.display="block";
    }else{
        tflag=true;
        tooltips.style.display="none";  
    }
    e.stopPropagation();
    return tflag;
})

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


$('#ag').click(function(){
    var mwidth=$(window).width();
    var mheight=$(window).height();
    $('#mask').css({
        display:'block',
        width: mwidth,
        height: mheight,
        background: '#cccccc',
        opacity:0.3
    });
    $('#agreereg').css('display','block')
}); 

$('#agcheck').click(function(){
    if($(this).children('i').hasClass('icon-toggleon')){
        
         $(this).children('i').removeClass('icon-toggleon').addClass('icon-toggleoff');
        $('.submit').attr('disabled',true);
        $('.submit').css('background',"#cccccc");
    
    }else{
        $(this).children('i').removeClass('icon-toggleoff').addClass('icon-toggleon');
        $('.submit').attr('disabled',false);
        $('.submit').css('background','#7ecef1');
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
    var pwd1 = document.querySelector('#pwd1').value;
    var email = document.querySelector('#email').value;
    var vcode = document.querySelector('#vcode').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var closeObj2 = document.querySelector('span#pwd1close');
    var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('span#vcodeclose');
    var nameReg = /^\w{6,12}$/; 
    var pwdReg = /^([0-9a-zA-Z]){6,12}$/; 
    var emailReg = /^\w+@\w+((\.[a-z0-9]{2,10})|(\.[a-z0-9]{2,10}\.[a-z]+))$/; 
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
    if(pwd!=pwd1)
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
    
    if (email.length <= 0) 
    {
        regmessage(closeObj3,tipObj3,"邮箱不能为空！",1);
        tipObj3.innerHTML = '邮箱不能为空！';
        return false;
    }
     else
    {
        regmessage(closeObj3,tipObj3,"",0);

    }
    if( !emailReg.test(email) ){ 
        regmessage(closeObj3,tipObj3,$('#email'),"邮箱格式不对！",1);
        return false; 
    } 
    else
    {
          regmessage(closeObj3,tipObj3,$('#email'),"",0);

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

function checkname () {
         var tipObj = document.querySelector('p#nametips');
        var closeObj = document.querySelector('span#nameclose');
        var name = document.querySelector('#name').value;
        var nameReg = /^\w{6,12}$/;

          if (name.length <= 0) 
    {
          regmessage(closeObj,tipObj,$('#name'),"用户名不能为空!",1);
          return false; 
    }else if(name.length<6){
          if( !nameReg.test(name) ){ 
        regmessage(closeObj,tipObj,$('#name'),"用户名输入有误，请重新输入！",1);
        return false; 
    } 
    else
    {
        regmessage(closeObj,tipObj,$('#name'),"",0);
    }
    
    } else
    {
        regmessage(closeObj,tipObj,$('#name'),"",0);
    }
   
  
}
function ajaxcheckname(){
          var tipObj = document.querySelector('p#nametips');
        var closeObj = document.querySelector('span#nameclose');
    $.ajax({
            type:'get',
            url:'../../ajaxcheck.php?action=checkname&username='+$('#name').val(),
            success:function(data){
                var data=$.parseJSON(data).username;
                if(data){
                regmessage(closeObj,tipObj,$('#name'),"用户名已存在，请重新输入！",1);
                $('#submit').attr('disabled',true);
                $('.submit').css('background','#cccccc');
                return false;  
                }else{
                    regmessage(closeObj,tipObj,$('#name'),"",0);
                    $('#name').css('border-color','green'); 
                    $('#submit').attr('disabled',false);
                    $('.submit').css('background','#7ecef1');
                    return true;           
                        }
            },
            error:function(jqxhr){
                document.write(jqxhr.status);
            }

        })
}

$('#name').on('keyup',function(){
              var tipObj = document.querySelector('p#nametips');
        var closeObj = document.querySelector('span#nameclose');
    var namereg=/^\w{6,12}$/;
    var nameval=$('#name').val();
    if(nameval.length>=6){
         if(!namereg.test(nameval)){
        regmessage(closeObj,tipObj,$('#name'),"用户名输入有误，请重新输入！",1); 
    }else{
        ajaxcheckname();
    }
    }
   
})

function clearTips(num)
{    
    var name = document.querySelector('#name').value;
    var pwd = document.querySelector('#pwd').value;
    var pwd1 = document.querySelector('#pwd1').value;
    var email = document.querySelector('#email').value;
    var vcode = document.querySelector('#vcode').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
    var tipObj1 = document.querySelector('p#pwdtips');
    var closeObj1 = document.querySelector('span#pwdclose');
    var closeObj2 = document.querySelector('span#pwd1close');
    var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('span#vcodeclose');
    var nbordercolor=$('#name').css('border-color');
    var pbordercolor=$('#pwd').css('border-color');
    var p1bordercolor=$('#pwd1').css('border-color');
    var ebordercolor=$('#email').css('border-color');
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
        case 3:
        if(p1bordercolor.indexOf('rgb(255')){
            $('#pwd1').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj2,tipObj1,$('#pwd1'),"",0);
        }

        break;
        case 4:
        if(ebordercolor.indexOf('rgb(255')){
            $('#email').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj3,tipObj3,$('#email'),"",0);
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






function checkemail() { 
    var email = document.querySelector('#email').value;
     var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var emailReg = /^\w+@\w+((\.[a-z0-9]{2,10})||(\.[a-z0-9]{2,10}\.[a-z]+))$/;
    var cp1=checkpwd1();
    if(!cp1){
        checkpwd1();
    }
    if(email.length<=0){
        regmessage(closeObj3,tipObj3,$('#email'),"邮箱不能为空!",1);
        return false;
    } 
    if( !emailReg.test(email) ){ 
      regmessage(closeObj3,tipObj3,$('#email'),"邮箱格式不对!",1);
        return false;
    }else{
             regmessage(closeObj3,tipObj3,$('#email'),"",0); 
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

function checkvcode()
{
    var obj1 = document.querySelector('#vcode');
    var tipObj4 = document.querySelector('p#vcodetips');
    var closeObj4 = document.querySelector('#vcodeclose');
    var ce=checkemail();
    if(!ce){
        checkemail();
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
                if(data==1){
                regmessage(closeObj4,tipObj4,$('#vcode'),"验证码正确",0);
                tipObj4.style.color="green"
                $('#vcode').css('border-color','green');
                $('.submit').attr('disabled',false);
                $('.submit').css('background','#7ecef1');
                return true;  
                }else{
                    regmessage(closeObj4,tipObj4,$('#vcode'),"验证码错误！",1); 
                    $('.submit').attr('disabled',true);
                    $('.submit').css('background','#cccccc');
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
})

function changecode()
{
   var url = document.querySelector('#vcodeimg').src ;
   var rand = Math.floor(Math.random() * ( 1000 + 1));
   url += '&r=' +  rand;
   document.querySelector('#vcodeimg').src  = url;
}


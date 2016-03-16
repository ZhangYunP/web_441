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
 
 

function checkform(){
    var name = document.querySelector('#name').value;
    var email = document.querySelector('#email').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
    var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var nameReg = /^\w{6,12}$/; 
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


       return true; 
         }



function clearTips(num)
{    
    var name = document.querySelector('#name').value;
    var tipObj = document.querySelector('p#nametips');
    var closeObj = document.querySelector('span#nameclose');
        var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var nbordercolor=$('#name').css('border-color');
    var ebordercolor=$('#email').css('border-color');
    switch(num){
        case 1:
         if(nbordercolor.indexOf('rgb(255')){
            $('#name').css('border-color','#7ecef1');
        }else{
            regmessage(closeObj,tipObj,$('#name'),"",0);
        }
        break;
         case 4:
        if(ebordercolor.indexOf('rgb(255')){
            $('#email').css('border-color','#7ecef1');
        }else{
        regmessage(closeObj3,tipObj3,$('#email'),"",0);
        }
        break;

    }

}



function checkemail() { 
    var email = document.querySelector('#email').value;
     var tipObj3 = document.querySelector('p#emailtips');
    var closeObj3 = document.querySelector('span#emailclose');
    var emailReg = /^\w+@\w+((\.[a-z0-9]{2,10})||(\.[a-z0-9]{2,10}\.[a-z]+))$/;
    var cn=checkname();
    if(!cn){
        checkname();
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
  








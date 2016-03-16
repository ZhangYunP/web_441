function autoShow() {   
    var mailAddressList = document.getElementById("auto-show");   
    mailAddressList.style.display = "block";  
}  
//自动隐藏  
function autoHide() {  
    var mailAddressList = document.getElementById("auto-show");  
    mailAddressList.style.display = "none";  
}  
//给文本框设置值  
function setValue(newIndex, emailInput) {  
    var addr = $("div #" + newIndex).text().replace(/^\s*/, '');  
    emailInput.val("");  
    emailInput.val(addr);  
}  
//鼠标移入设置样式  
function setStyle(obj) {  
    oldIndex = newIndex;  
    newIndex = $(obj).attr("id");  
    $(obj).css("background-color", "#cccccc");  
    $("div #" + oldIndex).css("background-color", "white");  
    $(obj).css("cursor", "pointer");  
    setValue(newIndex, $("#email"));  
}  
//鼠标移出取消样式  
function cancelStyle(obj) {  
    $(obj).css("background-color", "white");  
}  
//按上下键设置样式  
function setStyleForChange() {  
    //handle newIndex  
    newIndex = newIndex > counts ? 1 : newIndex;  
    newIndex = newIndex < 1 ? counts : newIndex;  
    $("div #" + newIndex).css("background-color", "#cccccc");  
    $("div #" + oldIndex).css("background-color", "white");  
}  
var emailList = ["@qq.com" , "@163.com", "@126.com", "@yahoo.com", "@yahoo.com.cn", "@sina.cn"];  
//新项的索引(用于设置高亮显示的样式)  
var newIndex = 0;  
//旧项的索引(用于取消原有高亮显示的样式)  
var oldIndex = 0;  
//邮件列表个数  
var counts = emailList.length; 
$(document).ready(function () {  
            var emailInput = $("#email");  
            var emailListDiv = $("#auto-show");  
            //bind focus event(获得焦点)  
            emailInput.focus(function(){
             var currentVal = emailInput.val().replace(/^\s\s*/, '');
              // if (currentVal.indexOf("@") > -1) { 
              //           for (var i = 1; i <= counts; i++) {  
              //               $("div #" + i).text(""+emailList[i - 1]);  
              //           }    
              //       }   
                    autoShow();
            });  
            //bind blur event(失去焦点)  
            emailInput.blur(autoHide);  
            
            //bind the events:mouseover、mouseout for the div  
            for (var i = 0; i < emailList.length; i++) {  
                $("#auto-show").append("<div id='" + (i + 1).toString() + "' onmouseover='setStyle(this)' onmouseout='cancelStyle(this)' style='padding-bottom:5px'>" + emailList[i] + "</div>");  
            }  

            //handle key's events.(键盘弹出事件处理)  
            emailInput.keyup(function (event) {  
                if(emailInput.val()==""||emailInput.val().length>11){
                autoHide();
            }else{
                autoShow();
            }
                var myEvent = event || window.event;  
                var keyCode = myEvent.keyCode; //获得键值  
                //press down key(向下键)  
                if (keyCode == 40) {  
                    oldIndex = newIndex;  
                    newIndex++;  
                    setStyleForChange();  
                    //set value for input  
                    setValue(newIndex, emailInput);  
                }  
                //press up key(向上键)  
                if (keyCode == 38) {  
                    oldIndex = newIndex;  
                    newIndex--;  
                    setStyleForChange();  
                    //set value for input  
                    setValue(newIndex, emailInput);  
                }  
                //press enter key(回车键)  
                if (keyCode == 13) {  
                    //set value for input  
                    setValue(newIndex, emailInput);  
                    //set div hidden  
                    autoHide();  
                }  
                //press esc key(ESC键)  
                if (keyCode == 27) {  
                    autoHide();  
                }  
                //press a-z|A-Z|0-9     //8对应退格键，46对应删除键  
                var changedText = (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode >= 48 && keyCode <= 57);  
                if (changedText) {  
                    var currentVal = emailInput.val().replace(/^\s\s*/, '');  
                    //如果原来已包含有@字符  
                    if (currentVal.indexOf("@") > -1) { 
                        var pos=currentVal.indexOf('@');
                        var beforeval=currentVal.substring(0,pos);
                        for (var i = 1; i <= counts; i++) {  
                            $("div #" + i).text(beforeval+emailList[i - 1]);  
                        }  
                        return;  
                    }else{
                       for (var i = 1; i <= counts; i++) {  
                        $("div #" + i).text("").text(currentVal + emailList[i - 1]);  
                    }   
                    }  
                    
                }  
                //如果按下删除键  
                if ( keyCode == 46) {  
                    emailInput.val("");  
                    for (var i = 1; i <= counts; i++) {  
                        $("div #" + i).text("").text(emailList[i - 1]);  
                    }  
                }
                if(keyCode==8){
                    var currentVal = emailInput.val().replace(/^\s\s*/, '');
              if (currentVal.indexOf("@") > -1) { 
                        for (var i = 1; i <= counts; i++) {  
                            $("div #" + i).text(""+emailList[i - 1]);  
                        }    
                    }else{   
                    for(var i=0;i<=counts;i++){
                         $("div #" + i).text(currentVal+emailList[i - 1]);  
                    }
                    } 
                    
                }  
            });  
        });  
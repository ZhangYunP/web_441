(function(){
var len=$('.comment-box').length;
$('.ctotal span').html(len);

var height1=Math.ceil($(window).height()*0.6);
var width=$('.mainbox').width();
$('.danmubg').css({
    'width':width,
    'height':height1
});

$('.row4').adipoli({
                'startEffect' : 'overlay',
                'hoverEffect' : 'foldLeft'
            });

})();


$('.searchtext').focus(function(){
    $('.searchbutton').css('border','2px solid #7ecef1');
    $('.searchtext').css('border','2px solid #7ecef1');
});
$('.searchtext').blur(function(){
    $('.searchbutton').css('border','2px solid #fff');
    $('.searchtext').css('border','2px solid #fff');
});
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
});


$(window).scroll(
        function(){
            var navbarheight=$(".navbox").height();
            var scrolltop=$(document).scrollTop();
            if(scrolltop>navbarheight){
                $('#navbar2').stop().animate({
                    "height":"35px", 
                },200).css({
                    "position":"fixed",
                     "top":-10,
                    "left":0,                                      
                    "z-index":999,
                    'border-bottom':"1px solid #cccccc",
                    "background":"white",    
                });
                $('.english').css({
                    "display":"none"
                });
                $('.chinese').stop().animate({
                    "fontSize":"22px"
                },200);
                $('.home').css({
                    "top":"3px",
                    "left":"20%"              
                });
                $('.goodstudent').css({
                    "top":"3px",
                    "left":"70%"                
                });
                $('.goodteacher').css({
                    "top":"3px",
                    "left":"45%"                
                });
            }else{
                $('.english').css({
                    "display":"block"
                });
                $('.chinese').stop().animate({
                    "fontSize":"27px"
                },200); 
                 $('.navbar2').stop().animate({
                    "height":"80px", 
                    "top":"",
                    "left":"",
                     
                },200).css({
                    "position":"",                                   
                   'border':"0px",
                    "background":"",
                    "z-index":"",                      
                });
                $('.navbar2 li').css({
                    'width':"108",
                    "height":"78px",
                    "left":""   
                });                             
                $('.home').css({
                    "top":"10px",
                    "right":"360px",
                });
                $('.goodstudent').css({
                    "top":"10px",
                    "right":"80px" ,             
                });
                $('.goodteacher').css({
                    "top":"10px",
                    "right":"220px" ,
               
                });

            }
    
        });
$('.navbar2').on('click','li',function(){
    var height1=$('.aggregatecontent').height();
    var height2=$('.teachercontent').height();
    var height3=$('.studentcontent').height();
    $(this).parent().parent().find('.mainbox').css('display','none');
    if($(this).text()=="师徒集合aggregate"){
        $(this).parent().parent().find('.aggregatecontent').css('display','block');
    }else if($(this).text()=="优秀师傅good teacher"){
        $(this).parent().parent().find('.teachercontent').css('display','block');
 
    }else if($(this).text()=="最佳新人good student"){
        $(this).parent().parent().find('.studentcontent').css('display','block');

    }

});

  
 $(function(){   
    $(".zan a").click(function(){   
        var love = $(this);   
        var id = love.attr("rel"); //对应id    
        $.ajax({   
            type:"GET",   
            url:"./ajaxcheck.php?action=checklove&id="+id,    
            cache:false, //不缓存此页面   
            success:function(data){   
                love.parent().find('span').html(data);    
            }   
        });   
        return false;   
    });   
});  



  
$('.danmu').on('click',function(){
    if($(this).find('i').hasClass('icon-danmuguan')){
        $(this).find('i').removeClass('icon-danmuguan').addClass('icon-danmukai');
        $.ajax({   
            type:"GET",   
            url:"./ajaxcheck.php?action=getcomment",    
            cache:false,  
            success:function(data){   
                var data=$.parseJSON(data);   
                for(var i=0;i<data.length;i++){
                    var ctx=data[i].content;
                    var images=data[i].images;
                    var id=data[i].id;
                     var str=
                        '<img src='+images+' alt="" class="comimg"/>'
                        +ctx;
                    $('<div class="danmuword"></div>').attr("id",id).html(str).appendTo($("body"));

                }
              
                  var arr=$(".danmuword").length; 
                  var scrolltop = $(document).scrollTop();
                    for(var n=0;n<arr;n++){
                        var clientheight=$(window).height();
                        var randtop=Math.ceil(Math.random()*clientheight+scrolltop);
                        var randspeed=Math.ceil(Math.random()*2+5)*1000;
                        $('.danmuword').eq(n).css('top',randtop).stop().animate({
                            "right":"100%"
                        },randspeed);
                    }
            }   
        });
         
             }else{
        $(this).find('i').removeClass('icon-danmukai').addClass('icon-danmuguan');
        $('.danmuword').remove();
            }
})
 
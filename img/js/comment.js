window.onload = function () {
    var list = document.getElementById('list');
    var boxs = list.children;
    var timer;


    //删除节点
    function removeNode(node) {
        node.parentNode.removeChild(node);
    }


  
    /**
     * 发评论
     * @param box 每个分享的div容器
     * @param el 点击的元素
     */
    function reply() {
        var textarea = $('.comment');
        var content=textarea.val();
        $.ajax({   
            type:"GET",   
            url:"./ajaxcheck.php?action=creatcomment&content="+content,    
            cache:false, //不缓存此页面   
            success:function(data){ 
                var len=$('.comment-box').length;
                var newlen=len+1;
                $('.ctotal span').html(newlen);
                var data=$.parseJSON(data);             
               var commentList = $('.comment-list');
                
                var url=data.images;
                var content1=data.content;
                var name=data.nickname;
                var time=data.ctime;
                var id=data.id;
        var str =
            '<img class="myhead" src='+url+' alt=""/>' +
                '<div class="comment-content">' +
                '<p class="comment-text"><span class="user">'+name+'：</span>' + content1 + '</p>' +
                '<p class="comment-time">' +
                 time+
                '<a href="javascript:;" class="comment-operate">删除</a>' +
                '</p>' +
                '</div>';
                 $('<div class="comment-box clearfix" user="self "></div>').attr('id',id).html(str).appendTo($('.comment-list'));
                    textarea.val("");
                    textarea.blur();
                    if($('.danmu').find('i').hasClass('icon-danmukai')){
                         var str=
                        '<img src='+url+' alt="" class="comimg"/>'
                        +content1;
                    $('<div class="danmuword"></div>').attr("id",id).html(str).appendTo($("body"));
                        var scrolltop = $(document).scrollTop();
                        var clientheight1=$(window).height();
                        var randtop1=Math.ceil(Math.random()*clientheight1+scrolltop);
                        var randspeed1=Math.ceil(Math.random()*2+5)*1000;
                        $('.danmuword:last').css('top',randtop1).stop().animate({
                            "right":"100%"
                        },randspeed1);
                    }
            }   
        });
        
    }


    /**
     * 操作留言
     * @param el 点击的元素
     */
    function operate(el) {
        var commentBox = el.parentNode.parentNode.parentNode;
        var box = commentBox.parentNode.parentNode.parentNode;
        var txt = el.innerHTML;
        var user = commentBox.getElementsByClassName('user')[0].innerHTML;
        var textarea = box.getElementsByClassName('comment')[0];
        var id=commentBox.id;
        if (txt == '回复') {
            textarea.focus();
            textarea.value = '回复' + user;
            textarea.onkeyup();
        }
        else {
            removeNode(commentBox);
           $.ajax({   
            type:"GET",   
            url:"./ajaxcheck.php?action=deletecomment&id="+id,    
            cache:false, //不缓存此页面   
            success:function(data){ 
                var len=$('.comment-box').length;
                $('.ctotal span').html(len);
         }  
     })
        }
    }

    //把事件代理到每条分享div容器

        //点击
        boxs[2].onclick = function (e) {
            e = e || window.event;
            var el = e.srcElement;
            switch (el.className) {

                //回复按钮蓝
                case 'btn':
                    reply();
                    break

                //回复按钮灰
                case 'btn btn-off':
                    clearTimeout(timer);
                    break;

                //操作留言
                case 'comment-operate':
                    operate(el);
                    break;
            }
        }

        //评论
        var textArea = boxs[2].getElementsByClassName('comment')[0];

        //评论获取焦点
        textArea.onfocus = function (ev) {
            this.parentNode.className = 'text-box text-box-on';
            this.value = this.value == '评论…' ? '' : this.value;
            this.onkeyup(ev);
        }

        //评论失去焦点
        textArea.onblur = function () {
            var me = this;
            var val = me.value;
            if (val == '') {
                timer = setTimeout(function () {
                    me.value = '评论…';
                    me.parentNode.className = 'text-box';
                }, 200);
            }
        }

        //评论按键事件
        textArea.onkeyup = function (ev) {
            var val = this.value;
            var len = val.length;
            var els = this.parentNode.children;
            var btn = els[1];
            var word = els[2];
            if (len <=0 || len > 140) {
                btn.className = 'btn btn-off';
            }
            else {
                btn.className = 'btn';
            }
            word.innerHTML = len + '/140';
            if(ev.keyCode==13){
                reply();
            }
        }

}


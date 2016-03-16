var eleMenuOn = null, 
	eleListBox = $("body"),
	 tempList = $("#tempChoList").html();

	

String.prototype.temp = function(obj) {
    return this.replace(/\$\w+\$/gi, function(matchs) {
        var returns = obj[matchs.replace(/\$/g, "")];		
        return (returns + "") == "undefined"? "": returns;
    });
};
$(".newstitle a").on("click", function(event) {
	var url=window.location.href;
	var query = this.href.split("?")[1];
	var clientwidth=$(window).width();
	var clientheight=$(window).height();
	if (history.pushState && query) {		
		$.ajax({
			url: this.href,			
			success: function(data) {
				var data=$.parseJSON(data);
				var html = '';
				if (data) {										
						html = tempList.temp(data[0]);											
				}
				eleListBox.css({'overflow':'hidden','width':2*clientwidth});
				eleListBox.find('.page').css('float','left');
				eleListBox.append(html).find('.fix').css({'float':'left','width':clientwidth,'height':clientheight,'background':'#444'});
				eleListBox.animate({'left':-clientwidth},200,'linear');
				
			},
			error: function() {
				eleListBox.html('<div>数据获取失败！</div>');	
			}
		});
		
		// history处理
		if(history.pushState){
		var title = "新闻-" + $(this).text().replace(/\d+$/, "");
		document.title = title;	
		history.pushState({'url':this.href,'title':title},'', url.split("?")[0] + "?" + query);

		}
		
	}
	return false;
});

var fnHashTrigger = function(target) {
	var query = location.href.split("?")[1],
		realurl=location.href.split("?")[0];
		if(query){
		if(query.indexOf('getnews')>-1){
			var len=query.length;
			var nums=query.substring(len-1);
			$(".newstitle a").eq(nums-1).trigger('click');

		}	
		}	
};



if (history.pushState) {
	window.addEventListener("popstate", function(ev) {
		var clientwidth=$(window).width();
		var clientheight=$(window).height();
		var state=ev.state;
		if(state==null){
			document.title="首页";
		
				eleListBox.animate({'left':0},200,'linear').css({'overflow':'','width':''});	
				
		setTimeout(function(){
			$('.fix').remove();
			
		},200);

		}else{
			document.title=state.title;
			$.ajax({
			url: state.url,	
			success: function(data) {		
					

				var data=$.parseJSON(data);
				var html = '';
				if (data) {										
						html = tempList.temp(data[0]);											
				}
				eleListBox.css({'overflow':'hidden','width':2*clientwidth});
				eleListBox.find('.page').css('float','left');
				eleListBox.append(html).find('.fix').css({'float':'left','width':clientwidth,'height':clientheight,'background':'#444'});
				eleListBox.animate({'left':-clientwidth},200,'linear');
				
				
			}
			});
		}
	},false);
	
	//默认载入
	fnHashTrigger();

	
}

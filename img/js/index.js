$(document).ready(function() {
	$(".side ul li").hover(function() {
		$(this).find(".sidebox").stop().animate({
			"width": "124px"
		}, 200).css({
			"opacity": "1",
			"filter": "Alpha(opacity=100)",
			"background": "#ae1c1c"
		})
	}, function() {
		$(this).find(".sidebox").stop().animate({
			"width": "54px"
		}, 200).css({
			"opacity": "0.8",
			"filter": "Alpha(opacity=80)",
			"background": "#000"
		})
	});
	Carousel.init($(".J_Poster"));

	$("#requirelink").colorbox({
		inline: true,
		width: "50%",
		maxHeight: "80%"
	});

	$('.adv span').click(function() {
		$(this).parent().fadeOut();
	});

	var clientwidth=$(window).width();
	var clientheight=$(window).height();
	$('.page').css('width',clientwidth);
	$('body').css('height',clientheight);
	

	function getCookie(objName) { //获取指定名称的cookie的值 
		var arrStr = document.cookie.split("; ");
		for (var i = 0; i < arrStr.length; i++) {
			var temp = arrStr[i].split("=");
			if (temp[0] == objName) return unescape(temp[1]);
		}
}
	var sessid = getCookie('sessid');
	var username = getCookie('username');
	if ((!sessid) && (!username)) {
		setTimeout(function() {
			$('.adv').fadeIn();
		}, 5000)
	}

	$('.today').on('click', function() {
		if ($('.timeshow').width() == 280) {
			$('.timeshow').stop().animate({
				'width': 62
			}, 400);

		} else if ($('.timeshow').width() == 62) {
			$('.timeshow').stop().animate({
				'width': 280
			}, 400);

		}
	})
	var nums = $('.tmes span').length;
	var i = 0;

	function tmes() {
		$('.tmes span').eq(i).fadeIn();

		$('.tmes span').eq(i).siblings().fadeOut();
		i++;
		if (i == nums) {
			i = 0;
		}
		setTimeout(function() {
			tmes();
		}, 3000)
	};
	setTimeout(function() {
		tmes();
	}, 500);


});
  

function goTop() {
	$('html,body').animate({
		'scrollTop': 0
	}, 600);
}

$(window).scroll(

	function() {
		var windowheight = $(window).height();
		var scrolltop = $(document).scrollTop();
		if (scrolltop > 30) {
			$('.wnav').css({
				"position": "fixed",
				"top": 0,
				"left": 0,
				"z-index": 999,
				"background": 'white',
				"width": "100%",
				"height": '53px'
			});

		} else {
			$('.wnav').css('position', "");
		}
		if (scrolltop > windowheight / 2) {
			$('.side').css('display', 'block');
		} else {
			$('.side').css('display', 'none');
		}
	});
$('.lastnew').on('click', 'li', function() {
	if ($(this).hasClass('a')) {
		$('.b').removeClass('zc_after');
		$('.a').addClass('zc_after');
		$('.newscontent').css('display', 'block');
		$('.lastcontent').css('display', 'none');
	} else {
		$('.a').removeClass('zc_after');
		$('.b').addClass('zc_after');
		$('.lastcontent').css('display', 'block');
		$('.newscontent').css('display', 'none');
	}
})
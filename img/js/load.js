function load(){
	$('.loadimg').css('display','none');
	$('.main').css('display','block');
	var config = {
    enter: 'bottom',
    move: '40px',
    over: '0.16s',
    reset: true,
    init: false
};
window.scrollReveal = new scrollReveal(config);
scrollReveal.init();
}
$('#soundmuted').on('click',function(){
	if($('#soundmuted').hasClass('icon-siglyphsoundmute')){
			$('#bgvid').attr('muted',false);
		$('#soundmuted').removeClass('icon-siglyphsoundmute').addClass('icon-siglyphsound');
	
	}else{
		$('#bgvid').attr('muted',true);
		$('#soundmuted').removeClass('icon-siglyphsound').addClass('icon-siglyphsoundmute');		
	}
})


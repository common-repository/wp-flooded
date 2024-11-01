jQuery(document).ready(function($){

	$('#flooded').pan({fps: 25, speed: 2, dir: 'left'});

	var windowH = $(window).height();
	var bodyH = $(document.body).height();
	$("#flooded").css('height',windowH+200);

	var timeout = false;
	$(window).scroll(function() {
		if (timeout){clearTimeout(timeout);}   
		timeout = setTimeout(function(){
			valS = $(window).scrollTop();
			valI = windowH-valS*1.5/bodyH*windowH;
			if (valI<=-134) valI=-134;
			$("#flooded").animate({top:valI},500);
		},500);
	});

})
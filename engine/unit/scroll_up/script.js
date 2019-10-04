$(function() {

		$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
					 	$("#toTop").css({ 
					 			'bottom' : '50px'
					 	});
				} else {
					 	$("#toTop").css({ 
					 			'bottom' : '-50px'
					 	});
				}
		});
 
		$('#toTop').click(function() {
				$('body,html').animate({scrollTop: 0}, 800);
		});

		var heightR = $(window).height();

		$('.next').click(function() {
				$('body,html').animate({scrollTop: heightR}, 800);
		});
});
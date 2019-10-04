$(document).ready(function(){

		var widthR = $(window).width();
		var heightR = $(window).height();

		$(".show_all").click(function(){
			 	$(".stores_place").css({ 
			 			'height' : '940px'
			 	});

			 	$(".show_all").css({ 
			 			'display' : 'none'
			 	});
		});

		$(".hide").click(function(){
			 	$(".stores_place").css({ 
			 			'height' : '220px'
			 	});

			 	$(".show_all").css({ 
			 			'display' : 'block'
			 	});
		});
});

$(document).ready(function(){

		var widthR = $(window).width();
		var heightR = $(window).height();

		$(".button_menu_off").click(function(){
			 	$(".menu_place").css({ 
			 			'width' : '0px'
			 	});

			 	$(".sticky").css({ 
			 			'width' : '0px'
			 	});

			  	$(".header").css({ 
			 			'border-radius' : '0px'
			 	});

			 	$(".button_menu_off").css({ 
			 			'display' : 'none'
			 	});

			 	$(".button_menu_on").css({ 
			 			'display' : 'block'
			 	});
		});

		$(".button_menu_on").click(function(){
			 	$(".menu_place").css({ 
			 			'width' : '250px'
			 	});

			 	$(".sticky").css({ 
			 			'width' : '250px'
			 	});

			  	$(".header").css({ 
			 			'border-radius' : '0 0 0 20px'
			 	});

			 	$(".button_menu_off").css({ 
			 			'display' : 'block'
			 	});

			 	$(".button_menu_on").css({ 
			 			'display' : 'none'
			 	});
		});

		$(".notification").click(function(){
			 	$(".notification").css({ 
			 			'top' : '-100px'
			 	});
		});
});

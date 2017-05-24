(function($, window) {
	$(function() {
	    $("#accordion").accordion();
	});

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText:["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    }
	});
	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item'
	});

	$(function(){   
		var nav = $('#meuMenu');   
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 150) { 
				nav.addClass("fixar"); 
			} else { 
				nav.removeClass("fixar"); 
			}
		});
	});

	$(function() {
		$('.button_passo1').click(function() {
			$('.passo1').show();
			$('.passo2, .passo3').hide();
		});

		$('.button_passo2').click(function() {
			$('.passo2').show();
			$('.passo1, .passo3').hide();
		});

		$('.button_passo3').click(function() {
			$('.passo3').show();
			$('.passo1, .passo2').hide();
		});
	});
	
	$( function() {
		$( "#dialog-message" ).dialog({
			modal: true,
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
				}
			}
		});
	});
})(jQuery, window);
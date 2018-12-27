jQuery(document).ready(function($){	
	$('.testimonials-cards').slick({
		dots: false,
		arrows: false,
		draggable: false,
	});
	
	$('.prev').click(function(){
  		$('.testimonials-cards').slick('slickPrev');
	})

	$('.next').click(function(){
  		$('.testimonials-cards').slick('slickNext');
	})
});
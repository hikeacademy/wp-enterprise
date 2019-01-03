jQuery(document).ready(function($){
	$('.testimonials-cards').slick({
		dots: false,
		arrows: false,
		draggable: false,
		infinte: true,
		adaptiveHeight: true,
	});

	$('.prev').click(function(){
  		$('.testimonials-cards').slick('slickPrev');
	})

	$('.next').click(function(){
  		$('.testimonials-cards').slick('slickNext');
	})
});

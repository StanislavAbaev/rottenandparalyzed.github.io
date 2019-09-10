$(function(){
	$('.slider__inner, .news__slider-inner').slick({
		nextArrow:'<button type="button" class="slick-btn slick-next"></button>',
		prevArrow:'<button type="button" class="slick-btn slick-prev"></button>',
 	// dots: true,
 	infinite:false
 });
	$('select').styler();
	$('.icon-navicon').on("click", function () {
		$('.menu').slideToggle('slow');

	});
 


});

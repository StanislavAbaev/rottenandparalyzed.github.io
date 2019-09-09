$(document).ready(function(){
	let buttonOn = $('.fa-angle-double-left');
	let nav = $(".nav");
	let nav_active = $(".nav__active");
       buttonOn.click(function() {
       	nav.toggleClass("nav__active")
       	nav_active.css({"right":"0%"});
       	buttonOn.toggleClass("fa-angle-double-right");
       });

         $(".nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),

            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1000);
    });

        });

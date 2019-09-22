$(document).ready(function(){
	var buttonOn = $('.fa-angle-double-left');
	var nav = $(".nav");
	var nav_active = $(".nav__active");
  var btn = $('.fa-arrow-up');
  buttonOn.on("click", function() {
    nav.toggleClass("nav__active")
    nav_active.css({"right":"0%"})
    buttonOn.toggleClass("fa-angle-double-right")
  });

  $(".nav").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),

    top = $(id).offset().top;

    $('body,html').animate({scrollTop: top}, 1000);
  });

 
  $("body").scroll(function() {
      
    if ($("body").scrollTop() > 300) {
      btn.fadeIn("slow").addClass('show');
    } else {
      btn.fadeOut("slow").removeClass('show');
    }
  });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 1300);
  });
  });

$(function(){
    "use strict"
	
	
	// add active class to navbar 
	
	$('.header .navbar .navbar-nav .nav-item .nav-link').click(function(){
		$(this).addClass('active').parent().siblings().find("a").removeClass("active");
	});
	
	
	//Sticky navbar
	
	$(window).scroll(function(){
		var x=$(this).scrollTop();
		if(x >100){
			$(".header .navbar").addClass("activetooo");
		}
		else{
			$(".header .navbar").removeClass("activetooo");
		}
		
	});
	
	//Scroll To Section
	
	$(".header .navbar .navbar-nav .nav-item .nav-link").click(function(){
		$('body,html').animate({
			scrollTop: $('#'+$(this).data("scroll")).offset().top
    	},1000);
	});
	
	//Show Scroll Button
      $(window).scroll(function(){
        var n = $(this).scrollTop();
        if(n > 500){
          $('.sroll-button i').fadeIn();
        } else{
          $('.sroll-button i').fadeOut();
        }
      });
    //Scroll To Top By Button
      $('.sroll-button i').click(function(){
        $('body,html').animate({
          scrollTop :0
        },1000);
      });
	
});
	

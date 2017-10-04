/* team js */


$(function(){
	$(".sub-content").css("opacity","1");
	$(".main-content#weddingServices").animate({
	    right: "10"
	  }, 600, function() {
	    // Animation complete.
	});
	
	$(".desktop-container .service-container").on("click",function(){
		$(".service-container").removeClass("active");
		$(this).addClass("active");
		var target = $(this).data("target");

		$(".main-image img").hide();
		$(".main-image img#bgImage-"+target).show();


		$(".main-content").animate({
		    right: "-50%"
		  }, 200, function() {
		    $(".main-content#"+target).animate({
			    right: "10"
			  }, 200, function() {
			    // Animation complete.
			});
		});
	});

	$(".mobile-container .service-container").on("click",function(){
		$(".service-container").removeClass("active");
		$(this).addClass("active");
		var target = $(this).data("target");

		$(".main-image img").hide();
		$(".main-image img#bgImage-"+target).show();


		$(".main-content").hide();
		$(".main-content#"+target).show();

	});





});
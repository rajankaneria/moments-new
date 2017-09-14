/* team js */
$(function(){
	$(".main-content#weddingServices").animate({
	    right: "10"
	  }, 600, function() {
	    // Animation complete.
	});
	$(".service-container").on("click",function(){
		$(".service-container").removeClass("active");
		$(this).addClass("active");
		var target = $(this).data("target");


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
});
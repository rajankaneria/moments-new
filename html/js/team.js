/* team js */
$(function(){
	$(".main-content#hirav_shah").animate({
	    right: "10"
	  }, 600, function() {
	    // Animation complete.
	});
	$(".desktop-team .team-member-container").on("click",function(){
		$(".team-member-container").removeClass("active");
		$(this).addClass("active");
		var target = $(this).data("target");


		$(".main-content").hide();
		$(".main-content").css("right","10px");
		$(".main-content#"+target).show();
		$(".main-content#"+target).css("opacity","0.9");

		/*
		$(".main-content").animate({
		    right: "-50%"
		  }, 200, function() {
		    $(".main-content#"+target).animate({
			    right: "10"
			  }, 200, function() {
			    // Animation complete.
			});
		});
		*/
	});


	/*mobile Responsive*/

	$(".mobile-team-title .team-member-container").on("click",function(){
		$(".mobile-team-title .team-member-container").removeClass("active");
		$(this).addClass("active");
		var target = $(this).data("target");
		console.log(".mobile.main-content#"+target);
		$(".mobile.main-content").hide();
		$(".mobile.main-content#"+target).show();
		
	});





});
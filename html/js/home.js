/* home page js */
$(function(){
	$(".main-content").animate({
	    right: "10"
	  }, 600, function() {
	    // Animation complete.
	});
	setInterval(function(){ 
		slideChange();
	}, 6000);
});

function slideChange(){
	var slideNumber = parseInt($("#sliderCount").val());
	console.log(slideNumber);
	$(".main-image img").removeClass("active");
	$(".main-image img:nth-child("+slideNumber+")").addClass("active");
	slideNumber++;
	if(slideNumber > $(".main-image img").length){
		slideNumber = 2;
	}
	$("#sliderCount").val(slideNumber);
}
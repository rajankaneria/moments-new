/* home page js */
$(function(){
	$(".main-content").animate({
	    right: "10"
	  }, 600, function() {
	    // Animation complete.
	});
	//$("title").html("Loading...");
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

window.onload = function() {
    // this will fire after the entire page is loaded, including images
    //$("title").html("Loaded");
};
/* js for gallery */
function backToTypeSelect(){
	$(".image-list").hide();
	$(".gallery-collection").hide();
	$(".gallery-type-select").fadeIn(200);
}
function backToVideoCollection(){
	$(".image-list").hide();
	$(".gallery-collection").hide();
	$(".gallery-type-select").hide();
	$("#videoCollection").fadeIn(200);
}
function backToImageCollection(){
	$(".image-list").hide();
	$(".gallery-collection").hide();
	$(".gallery-type-select").hide();
	$("#imageCollection").fadeIn(200);
}
$(document).ready(function(){
    $('.materialboxed').materialbox();
	$(".gallery-type").on("click",function(data){
		var target = $(this).data("target");
		$(".gallery-type-select").hide();
		$(".gallery-collection").hide();
		$("#"+target).fadeIn(1000);
	});
	$(".image-collection-item").on("click",function(data){
		var target = $(this).data("target");
		$(".gallery-collection").hide();
		$(".image-list").hide();
		$("#"+target).fadeIn(1000);
		adjustImageSize("img.materialboxed",".image-item");
	});
	/*
	$('#materialbox-overlay').on('click', function() {
		setTimeout(function() { 
			adjustImageSize("img.materialboxed",".image-item");
		}, 5000);
	});
	*/
 });
$(function(){
	setInterval(function(){
	    /*adjustImageSize("img.materialboxed",".image-item");*/
	},10);
});
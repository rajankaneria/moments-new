function adjustImageSize(imageSelector,containerSelector){
	//$(containerSelector).each()
	$(containerSelector).each(function(){ 
		var containerHeight = $(this).height();
		var containerWidth = $(this).width();
		var imageHeight = $("img.materialboxed",this).height();
		var imageWidth = $("img.materialboxed",this).width();
		//console.log(containerWidth,containerHeight,imageWidth,imageHeight); 
		if(imageWidth >= imageHeight){
			//wide image - make width 100% and height auto
			if(!$("img.materialboxed",this).hasClass("active")){
				//$(this).hide();
				$("img.materialboxed",this).css("height",containerHeight);
				$("img.materialboxed",this).css("width","auto");	
				//$("img.materialboxed",this).show();
			}
		}else{
			//tall image - make height 100% and width auto
			if(!$("img.materialboxed",this).hasClass("active")){
				//$(this).hide();
				$("img.materialboxed",this).css("width",containerWidth);
				$("img.materialboxed",this).css("height","auto");
				//$("img.materialboxed",this).show();
			}
			
		}
	});
}


$(function(){
 $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
  );
});


$(document).ready(function() {
  $('#lightgallery').lightGallery({
    pager: true
  });
});
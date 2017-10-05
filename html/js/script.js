function adjustImageSize(imageSelector,containerSelector){
	//$(containerSelector).each()
	$(containerSelector).each(function(){ 
		var containerWidth = $(this).width();
		var containerHeight = $(this).height();
		/*$(this).height(containerWidth);*/

		var imageHeight = $(imageSelector,this).height();
		var imageWidth = $(imageSelector,this).width();
		console.log(containerWidth,containerHeight,imageWidth,imageHeight); 
		if(imageWidth >= imageHeight){
			//wide image
			if(!$(imageSelector,this).hasClass("active")){
				//$(this).hide();
				$(imageSelector,this).css("height",containerHeight);
				$(imageSelector,this).css("width","auto");	
				
				//$("img.materialboxed",this).show();
			}
		}else{
			//tall image
			if(!$(imageSelector,this).hasClass("active")){
				//$(this).hide();
				$(imageSelector,this).css("width",containerWidth);
				$(imageSelector,this).css("height","auto");
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


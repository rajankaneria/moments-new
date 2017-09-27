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

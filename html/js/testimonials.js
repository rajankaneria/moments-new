$(function(){
	  $('.carousel.carousel-slider').carousel({fullWidth: true});


	  /*testimonials*/


      var carouselAutoplay = setInterval(function(){
            $('.test-left').click();
          }, 7000);

      $('.test-left').click(function(){
        $('.carousel').carousel('next');
        clearInterval(carouselAutoplay);
        carouselAutoplay = setInterval(function(){
            $('.test-left').click();
          }, 7000);
      });
      $('.test-right').click(function(){
        $('.carousel').carousel('prev');
        clearInterval(carouselAutoplay);
        carouselAutoplay = setInterval(function(){
            $('.test-right').click();
          }, 7000);
      });
  
});
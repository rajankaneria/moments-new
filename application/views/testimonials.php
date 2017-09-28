<div class="main-image"><div class="main-image-overlay"></div><img src="<?php echo base_url(); ?>html/images/home-bg.jpg"/></div>
 
 <div class="testimonials-area">
 	<div class="container">
 		<div id="testimonial" class="carousel carousel-slider test-bg center" data-indicators="true">

 			<div class="test-arrows">
 				<div class="test-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
 				<div class="test-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
 			</div>
 			<?php foreach($allTestData as $key => $allTestRow){ ?>
		    <div class="carousel-item white-text" href="#one!">
		      <div class="test-img">
		      	<img src="<?php echo base_url(); ?>html/images/testimonials/<?php echo $allTestRow['image']; ?>">
		      </div>
		      <div class="test-name">
		      		<p><?php echo $allTestRow['title']; ?></p>
		      </div>
		      <div class="test-desc"><p class="white-text">
		      	<?php echo $allTestRow['details']; ?>
		      </p></div>
		    </div>
		    <?php } ?>
		    <!-- <div class="carousel-item white-text" href="#two!">
		      <h2>Second Panel</h2>
		      <p class="white-text">This is your second panel</p>
		    </div>
		    <div class="carousel-item white-text" href="#three!">
		      <h2>Third Panel</h2>
		      <p class="white-text">This is your third panel</p>
		    </div>
		    <div class="carousel-item white-text" href="#four!">
		      <h2>Fourth Panel</h2>
		      <p class="white-text">This is your fourth panel</p>
		    </div> -->
		</div>
 	</div>
 </div>
 <div class="main-footer"></div>
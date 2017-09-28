<div class="main-image"><div class="main-image-overlay"></div><img src="<?php echo base_url(); ?>html/images/home-bg.jpg"/></div>


<div class="row client-container">
<?php foreach ($clients as $key => $clientRow) { ?>
<div class="col s6 m3">
	<div class="client-image-container">
		<img src="<?php echo base_url(); ?>html/images/client/<?php echo $clientRow['image']; ?>" />
	</div>
</div>
<?php } ?>
</div>
<div class="main-footer"></div>
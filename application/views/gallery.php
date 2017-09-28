<div class="main-image"><div class="main-image-overlay"></div><img src="<?php echo base_url(); ?>html/images/home-bg.jpg"/></div>


<div class="gallery-type-select">
		<div class="gallery-type" data-target="imageCollection">
			<div class="image-container"><img src="<?php echo base_url(); ?>html/images/photocam.png"/></div>
			<!-- <div class="gallery-title">Photos</div> -->
		</div>
		<div class="gallery-type" data-target="videoCollection">
			<div class="image-container"><img src="<?php echo base_url(); ?>html/images/videocam.png"/></div>
			<!-- <div class="gallery-title">Videos</div> -->
		</div>
</div>

	<div id="imageCollection" class="gallery-collection image-collection row">
		<div class="row">
			<div class="center-align"><a class="btn" onclick="backToTypeSelect();">Back</a></div>
		</div>
		<?php foreach ($imageFolder as $key => $folderRow) { ?>
			<?php if(sizeof($folderRow['folder_images']) != 0){ ?>
			<!-- image collection item -->
			<div class=" col s6 m3">
				<div class="image-collection-item z-depth-2 waves-effect waves-light" data-target="image-<?php echo $folderRow['id']; ?>">
					<div class="image-container"><img src="<?php echo base_url(); ?>html/images/folder_img/<?php echo $folderRow['folder_images'][0]['image'] ?>"/></div>
					<div class="image-description">
						<div class="image-collection-title"><?php echo $folderRow['name']; ?></div>
						<div class="image-collection-size"><?php echo sizeof($folderRow['folder_images']); ?> Photos</div>
					</div>
				</div>
			</div>
			<!-- ***************** -->
			<?php } ?>
		<?php } ?>
	</div>


	<div id="videoCollection" class="gallery-collection image-collection row">
		<div class="row">
			<div class="center-align"><a class="btn" onclick="backToTypeSelect();">Back</a></div>
		</div>
		<?php foreach ($videoFolder as $key => $folderRow) { ?>
		<?php if(sizeof($folderRow['folder_images']) != 0){ ?>
		<!-- image collection item -->
		<div class=" col s6 m3">
			<div class="image-collection-item z-depth-2 waves-effect waves-light" data-target="video-<?php echo $folderRow['id']; ?>">
				<div class="image-container"><img src="<?php echo base_url(); ?>html/images/folder_img/<?php echo $folderRow['folder_images'][0]['image'] ?>"/></div>
				<div class="image-description">
					<div class="image-collection-title"><?php echo $folderRow['name']; ?></div>
					<div class="image-collection-size"><?php echo sizeof($folderRow['folder_images']); ?> Videos</div>
				</div>
			</div>
		</div>
		<!-- ***************** -->
		<?php } ?>
		<?php } ?>
	</div>





	<?php foreach ($imageFolder as $key => $folderRow) { ?>
		<div id="image-<?php echo $folderRow['id']; ?>" class="image-list row">
			<div class="row">
				<div class="center-align"><a class="btn" onclick="backToImageCollection();">Back</a></div>
			</div>
			<?php foreach ($folderRow["folder_images"] as $imageKey => $imageRow) { ?>
				<div class=" col s6 m3">
					<div class="image-item">
						<div class="image-container"><img class="materialboxed" src="<?php echo base_url(); ?>html/images/folder_img/<?php echo $imageRow['image'] ?>"/></div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>



	<?php foreach ($videoFolder as $key => $folderRow) { ?>
		<div id="video-<?php echo $folderRow['id']; ?>" class="image-list row">
			<div class="row">
				<div class="center-align"><a class="btn" onclick="backToVideoCollection();">Back</a></div>
			</div>
			<?php foreach ($folderRow["folder_images"] as $imageKey => $imageRow) { ?>
				<div class=" col s6 m3">
					<div class="image-item">
						<div class="image-container"><img class="materialboxed" src="<?php echo base_url(); ?>html/images/folder_img/<?php echo $imageRow['image'] ?>"/></div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
<div class="main-footer"></div>
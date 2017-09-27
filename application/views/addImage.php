<div class="row">
<form id="addImageForm" method="post" enctype="multipart/form-data">
	<div class="row">
    <div class="input-field col s12">			  
	    <select name="type_id" id="type_id">
        <option value="" selected="selected">Select</option>
	    <?php foreach ($galleryType as $key => $folderRow) { ?>
	    <option value="<?php echo $folderRow["id"]; ?>"><?php echo $folderRow["name"]; ?></option>
	  <?php  } ?>
	  </select>		
    <label for="type_id">Select Folder type</label>  	
	</div>
   </div> 
    <div class="row">
      <div class="input-field col s12">       
        <select name="sub_type" id="sub_type">
          
        </select> 
        <label for="sub_type">Select Folder</label>  
  </div>
   </div> 
<?php foreach ($folderList as $key => $folderTypeList) { ?>
<div id="<?php echo $key; ?>" style="display: none;">
  <?php foreach ($folderTypeList as $folderKey => $folderRow) { ?>
      <option value="<?php echo $folderRow["id"]; ?>"><?php echo $folderRow["name"]; ?></option>
    <?php  } ?>
</div>
<?php } ?>

  <div class="row">        
    <div class="input-field col s12">
  <input id="image" name="image" type="file" class="validate" placeholder="Enter your Image">
      <label for="title">Image</label>
    </div>
  </div>

    </form>
  </div>
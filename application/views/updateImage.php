<div class="row">
<form id="addImageForm" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">       
  <select name="type_id" id="type_id">
   <option>Select Folder Type</option>
    <?php foreach ($folderType as $key => $folderRow) { ?>
    <option value="<?php echo $folderRow["id"]; ?>"><?php echo $folderRow["name"]; ?></option>
    <?php  } ?>
    </select>     
  </div>
   </div> 

  <div class="row">        
    <div class="input-field col s12">
  <input id="image" name="image" type="file" class="validate" placeholder="Enter your Image">
  <img src="<?php echo base_url() ?>html/image/<?php echo $image; ?>" />
      <label for="title">Image</label>
    </div>
    <input id="id" name="id" type="hidden" class="validate" placeholder="Enter your lient Name" value="<?php echo $id; ?>">
  </div>

    </form>
  </div>
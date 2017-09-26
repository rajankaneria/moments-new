<div class="row">
    <form id="addFolderForm" method="post" enctype="multipart/form-data">
	<div class="row">
    <div class="input-field col s12">			  
	<select name="type_id" id="type_id">
	 <option>Select Type</option>
	  <?php foreach ($touritem as $key => $touritemRow) { ?>
	  <option value="<?php echo $touritemRow["t_id"]; ?>"><?php echo $touritemRow["tour_name"]; ?></option>
	  <?php  } ?>
	  </select>			
	</div>
   </div> 

  <div class="row">        
    <div class="input-field col s12">
    <input id="name" name="name" type="text" class="validate" placeholder="Enter your Main Folder">
      <label for="title">Name</label>
    </div>
  </div>

    </form>
  </div>
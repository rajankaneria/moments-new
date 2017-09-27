<div class="row">
    <form id="addFolderForm" method="post" enctype="multipart/form-data">
	<div class="row">
    <div class="input-field col s12">			  
	<select name="type_id" id="type_id">
	  <?php foreach ($type as $key => $typeRow) { ?>
	  <option value="<?php echo $typeRow["id"]; ?>"><?php echo $typeRow["name"]; ?></option>
	  <?php  } ?>
	  </select>	
    	<label for="type_id">Select Type</label>	
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
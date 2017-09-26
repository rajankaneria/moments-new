<div class="row">
    <form id="updateFolderForm" method="post" enctype="multipart/form-data">
	<div class="row">
    <div class="input-field col s12">			  
	<select name="type_id" id="type_id">
	 <option>Select Tour Type</option>
	  <?php foreach ($typeItem as $key => $typeRow) { ?>
	  <option value="<?php echo $typeRow["id"]; ?>"><?php echo $typeRow["name"]; ?></option>
	  <?php  } ?>
	  </select>			
	</div>
   </div> 

  <div class="row">        
    <div class="input-field col s12">
    <input id="name" name="name" type="text" class="validate" placeholder="Enter your Folder name" value="<?php echo $name; ?>">
      <label for="title">Name</label>
    </div>
  </div>

    </form>
  </div>
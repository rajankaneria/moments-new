<div class="row">
    <form id="updateTypeForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
        <input id="name" name="name" type="text" class="validate" placeholder="Enter your Main Folder" value="<?php echo $name;?>">
          <label for="title">Name</label>
            <input id="id" name="id" type="hidden" class="validate"  value="<?php echo $id;?>">
        </div>
      </div>   
    </form>
  </div>
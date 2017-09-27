<div class="container">


 <div class="row">
 <div class="card-panel">
  <div class="page-header row">
      <div class="page-title col s8 m10">Image Management</div>      
      <div class="page-button col s4 m2"><a class="waves-effect waves-light btn blue" id="addImageBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>         
        <th>Type</th>  
        <th>Folder</th>  
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allImageData as $key => $imageRow) { ?>
      <tr id="image-id<?php echo $imageRow['id']; ?>">  
        <td><?php echo $imageRow['id']; ?></td> 
        <td><?php echo $imageRow['type_id']; ?></td>   
        <td><?php echo $imageRow['folder_id']; ?></td>    
       <td> <img src="<?php echo base_url(); ?>html/images/folder_img/<?php echo $imageRow['image']; ?>"></td>
           
        <td class="right-align blog-btn">
        <a data-image-id="<?php echo $imageRow['id']; ?>" class="btn-floating waves-effect waves-light red img-delete-btn"><i class="material-icons">delete</i></a>
        <a data-image-id="<?php echo $imageRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey img-edit-btn"><i class="material-icons">mode_edit</i></a>
        </td>
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
 </div>  
</div>   

<!-- Modal Structure -->
  <div id="addImageModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addImage",array("galleryType"=>$galleryType,"folderList"=>$folderList)); ?>
    </div>
    <div class="modal-footer">
      <a id="addImage" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editImageModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateImage" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

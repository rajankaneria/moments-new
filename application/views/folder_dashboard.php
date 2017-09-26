
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Folder Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addFolderBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>         
        <th>Type Name</th> 
        <th>Name</th>              
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allFolderData as $key => $folderRow) { ?>
      <tr id="folder-id<?php echo $folderRow['id']; ?>">  
        <td><?php echo $folderRow['id']; ?></td> 
        <td><?php echo $folderRow['type_id']; ?></td>          
        <td><?php echo $folderRow['name']; ?></td>           
           
        <td class="right-align blog-btn">
        <a data-folder-id="<?php echo $folderRow['id']; ?>" class="btn-floating waves-effect waves-light red folder-delete-btn"><i class="material-icons">delete</i></a>
        <a data-folder-id="<?php echo $folderRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey folder-edit-btn"><i class="material-icons">mode_edit</i></a>
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
  <div id="addFolderModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addFolder"); ?>
    </div>
    <div class="modal-footer">
      <a id="addFolder" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editFolderModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateFolder" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

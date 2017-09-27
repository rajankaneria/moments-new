
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header row">
      <div class="page-title col s8 m10">Type Management</div>      
      <div class="page-button col s4 m2"><a class="waves-effect waves-light btn blue" id="addTypeBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Name</th>              
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allTypeData as $key => $typeRow) { ?>
      <tr id="type-id<?php echo $typeRow['id']; ?>">  
        <td><?php echo $typeRow['id']; ?></td>         
        <td><?php echo $typeRow['name']; ?></td>           
           
        <td class="right-align blog-btn">
        <a data-type-id="<?php echo $typeRow['id']; ?>" class="btn-floating waves-effect waves-light red type-delete-btn"><i class="material-icons">delete</i></a>
        <a data-type-id="<?php echo $typeRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey type-edit-btn"><i class="material-icons">mode_edit</i></a>
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
  <div id="addTypeModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addType"); ?>
    </div>
    <div class="modal-footer">
      <a id="addType" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editTypeModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateType" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

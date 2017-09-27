<div class="container">
 <div class="row">
 <div class="card-panel">
  <div class="page-header">
      <div class="page-title">Client Logo Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addClientBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th> 
        <th>Name</th>          
        <th>Image</th>  
                  
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allClientData as $key => $clientRow) { ?>
      <tr id="client-id<?php echo $clientRow['id']; ?>">  
        <td><?php echo $clientRow['id']; ?></td>                  
        <td><?php echo $clientRow['name']; ?></td>   
        <td><img src="<?php echo base_url(); ?>html/images/client/<?php echo $clientRow['image']; ?>"></td>          
           
        <td class="right-align blog-btn">
        <a data-client-id="<?php echo $clientRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-btn"><i class="material-icons">delete</i></a>
        <a data-client-id="<?php echo $clientRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-btn"><i class="material-icons">mode_edit</i></a>
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
  <div id="addClientModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addClient"); ?>
    </div>
    <div class="modal-footer">
      <a id="addClient" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editClientModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateClient" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

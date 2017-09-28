<div class="row">
<form id="addClientForm" method="post" enctype="multipart/form-data">
	<div class="row">
    <center><h5>Add Clients Logo</h5></center>
  </div>
  <div class="row">        
    <div class="input-field col s12 m6">
    <input id="name" name="name" type="text" class="validate" placeholder="Enter your Client Name">
      <label for="title">Name</label>
    </div>
  <!-- </div> 

  <div class="row">         -->
    <div class="input-field col s12 m6" id="addClients-image" style="display: none;">
      <input id="image" name="image" type="file" class="validate" placeholder="Enter your Image">
      <label for="title">Image</label>
    </div>

    <div class="input-field col s12 m6">
      <a href="#" onclick="$('#addClients-image input').click()" class="btn blue">Upload File</a>
    </div>
  </div>

    </form>
  </div>
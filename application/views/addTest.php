<div class="row">
    <form id="addTestForm" method="post" enctype="multipart/form-data">
      <div class="row">  
        <center><h5>Add Testimonials</h5></center>
      </div>
      <div class="row">      
        <div class="input-field col s12 m6">
        <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title">
          <label for="title">Title</label>
        </div>
      <!-- </div>
     <div class="row"> -->
          <div class="input-field col s12 m6" style="display: none;" id="addTestimonial-image">
            <input  name="image" id="image" type="file" class="validate"> 
            <label for="name" style="margin-top: -42px !important;">Image</label>
          </div>
          <div class="input-field col s12 m6">
            <a href="#" onclick="('#addTestimonial-image input').click()" class="btn blue">Upload File</a>
          </div>
      </div> 

      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="details" name="details">
              </textarea>
              <label for="details">Details</label>
            </div>
        </div> 
    </form>
  </div>
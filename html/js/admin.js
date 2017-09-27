var baseURL;
$(function(){
	$('.modal').modal();
	baseURL=$("#base_url").val();

	/*start client logo*/
	$('#addClientBtn').on("click",function(){
		$("#addClientModal").modal('open');
	});

	$("#addClient").on("click",function(){
		var formData=new FormData($("#addClientForm")[0]);
		$.ajax({
				url:baseURL+"admin/addClient/",
				data:formData,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Added data Successfully....");
					window.location.reload();
				}
		});

	});

	$("#updateClient").on("click",function(){
		var formData=new FormData($("#updateClientForm")[0]);
		$.ajax({
				url:baseURL+"admin/updateClient/",
				data:formData,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Update data Successfully....");
					window.location.reload();
				}
		});

	});

	$(".delete-btn").on("click",function(){
		var clientID=$(this).data('client-id');
		if(confirm("Do you want to delete this records..??")){
		$.post(baseURL+"admin/deleteClient/"+clientID,function(data){
			$("#client-id"+clientID).remove();
		});
		}
	});

	$(".edit-btn").on("click",function(){
		$("#editClientModal").modal('open');
		$("#editClientModal .modal-content").html("");
		var clientID=$(this).data('client-id');
		$.post(baseURL+"admin/editClient/"+clientID,function(data){
			$("#editClientModal .modal-content").html(data);
			Materialize.updateTextFields();
		});
	});

	/*End client logo*/
/*=======================================================*/
	/*folder image start*/
	$("#addImageBtn").on("click",function(){
		$("#addImageModal").modal('open');
		$('select').material_select();
	});

	$("#addImage").on("click",function(){
		var formData=new FormData($("#addImageForm")[0]);
		$.ajax({
				url:baseURL+"admin/addImage/",
				data:formdata,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Added data Successfully....");
					window.location.reload();
				}
		});
	});

	$("#updateImage").on("click",function(){
		var formData=new FormData($("#updateImageForm")[0]);
		$.ajax({
				url:baseURL+"admin/updateImage/",
				data:formdata,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Update data Successfully....");
					window.location.reload();
				}
		});

	});

	$(".img-delete-btn").on("click",function(){
		var imageID=$(this).data('image-id');
		$.post(baseURL+"admin/deleteImage/"+imageID,function(data){
			$("#image-id"+imageID).remove();
		});
	});

	$(".img-edit-btn").on("click",function(){
		$("#editImageModal").modal('open');
		$("#editImageModal .modal-content").html("");
		var imageID=$(this).data('image-id');
		$.post(baseURL+"admin/editImage/"+imageID,function(data){
			$("#editImageModal .modal-content").html(data);
			Materialize.updateTextFields();
		});
	});

	/*folder image  end*/
	/*=======================================================*/

	/* start type */
	$("#addTypeBtn").on("click",function(){
		$("#addTypeModal").modal('open');
	});

	$("#addType").on("click",function(){
		var data={
			"name":$("#addTypeForm #name").val()
		};
		$.post(baseURL+"admin/addType/",{data:data},function(data){
			var data=$.parseJSON(data);
			if(data.status=="ok"){
				alert("Your Main Folder added successfully...");
				window.location.reload();
			}
			else if(data.status=="fail"){
				alert("Your Main Folder added Fail...");
				window.location.reload();
			}
			else{
				console.log(data);
			}
			
		});

	});

	$("#updateType").on("click",function(){
		var data={
			"id":$("#editTypeModal #id").val(),
			"name":$("#editTypeModal #name").val()
		};
		$.post(baseURL+"admin/updateType/",{data:data},function(data){
			window.location.reload();
		});

	});


	$(".type-delete-btn").on("click",function(){
		var typeID=$(this).data('type-id');
		if(confirm("Do you want delete this records..??")){
		$.post(baseURL+"admin/deleteType/"+typeID,function(data){
			$("#type-id"+typeID).remove();
		});
		}
	});

	$(".type-edit-btn").on("click",function(){
		$("#editTypeModal").modal('open');
		$("#editTypeModal .modal-content").html("");
		var typeID=$(this).data('type-id');
		$.post(baseURL+"admin/editType/"+typeID,function(data){
			$("#editTypeModal .modal-content").html(data);
			Materialize.updateTextFields();
		});
	});
	/*End type*/
	/*=============================================*/

	/*start folder*/
	$("#addFolderBtn").on("click",function(){
		$("#addFolderModal").modal('open');
		$('select').material_select();
	});

	$("#addFolder").on("click",function(){
		var data={
			"type_id":$("#addFolderModal #type_id").val(),
			"name":$("#addFolderModal #name").val()
		};
		$.post(baseURL+"admin/addFolder/",{data:data},function(data){
			//var data=$.parseJSON(data);
			window.location.reload();
		});

	});

	$("#updateFolder").on("click",function(){
		var data={
			"id":$("#editFolderModal #id").val(),
			"type_id":$("#editFolderModal #type_id").val(),
			"name":$("#editFolderModal #name").val()
		};
		$.post(baseURL+"admin/updateFolder/",{data:data},function(data){
			//var data=$.parseJSON(data);
			window.location.reload();
		});

	});

	$(".folder-delete-btn").on("click",function(){
		var folderID=$(this).data('folder-id');
		if(confirm("Do you want to delete this record..???")){
		$.post(baseURL+"admin/deleteFolder/"+folderID,function(data){
			$("#folder-id"+folderID).remove();
		});
	}
	});

	$(".folder-edit-btn").on("click",function(){
		$("#editFolderModal").modal('open');
		$("#editFolderModal .modal-content").html("");
		var folderID=$(this).data('folder-id');
		$.post(baseURL+"admin/editFolder/"+folderID,function(data){
			$("#editFolderModal .modal-content").html(data);
			Materialize.updateTextFields();
			$('select').material_select();
		});
	});

	/*End folder */


	//ADD TESTIMONIALS start
	
	$("#addTest").on("click",function(){
		$("#addTestModal").modal('open');
	});

	$("#sendTestData").on("click",function(){
		var formData=new FormData($("#addTestForm")[0]);
		$.ajax({
			url:baseURL+"Admin/addTest/",
			data:formData,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				alert("Added Testimonial successfully.....");
				window.location.reload();
			}
		});
	});

	$("#updateTest").on("click",function(){
		var formData=new FormData($("#updateTestForm")[0]);
		$.ajax({
			url:baseURL+"Admin/updateTest/",
			data:formData,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				alert("Update Testimonial successfully.....");
				window.location.reload();
			}
		});
	});


	$(".test-edit-btn").on("click",function(){
		$("#editTestModal .modal-content").html("");
		$("#editTestModal").modal('open');
		var editTest=$(this).data('test-id');
		$.post(baseURL+"Admin/editTest/"+editTest,function(data){
			$("#editTestModal .modal-content").html(data);
			Materialize.updateTextFields();
		});	
	});


	$(".test-delete-btn").on("click",function(){
	var dltTest=$(this).data('test-id');
	if(confirm("Do you want to delete this Record....")){
		$.post(baseURL+"Admin/deleteTest/"+dltTest,function(data){
			$("#testid"+dltTest).remove();
		});		
	}

	});
	/*End Testimonial*/





	/*=============Login=============*/
	$("#login").on("click",function(){
		var data={
			"email":$("#email").val(),
			"password":$("#password").val()
		};
		$.post(baseURL+"Admin/doLogin/",{data:data},function(data){
			var data=$.parseJSON(data);
		if(data.status=="ok"){
			window.location.href=baseURL+"Admin/gallery_type";
		}
		else if(data.status="fail"){
			alert("Login Fail...");
			window.location.href="#!";
		}
		else{console.log(data);
		}

		});

	});
	/*===============================*/

	/*===== Navigation Menu =====*/

	 $('.button-collapse').sideNav({
	      menuWidth: 300, // Default is 300
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true, // Choose whether you can drag to open on touch screens,
	      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
	      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
	    }
	  );


});




$("#addImageForm #type_id").on("change",function(){
	var typeID = $(this).val();
	$("#sub_type").removeAttr("disabled");
	var dropdownList = $("#type_"+typeID).html();
	$("#sub_type").html(dropdownList);
	$('#sub_type').material_select();
});
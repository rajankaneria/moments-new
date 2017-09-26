var baseURL;
$(function(){
	baseURL=$("#base_url").val();

	/*start client logo*/
	$(#addClientBtn).on("click",function(){
		$("#addClientModal").modal('open');
	});

	$("#addClient").on("click",function(){
		var formData=new FormData($("#addClientForm")[0]);
		$.ajax({
				url:baseURL+"admin/addClient/",
				data:formdata,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Added data Successfully....");
				}
		});

	});

	$("#updateClient").on("click",function(){
		var formData=new FormData($("#updateClientForm")[0]);
		$.ajax({
				url:baseURL+"admin/aupdateClient/",
				data:formdata,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Update data Successfully....");
				}
		});

	});

	$(".delete-btn").on("click",function(){
		var clientID=$(this).data('client-id');
		$.post(baseURL+"admin/deleteClient/"+clientID,function(data){
			$("#client-id"+clientID).remove();
		});
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
			"name":$("#name").val()
		};
		$.post(baseURL+"admin/addType/",{data:data},function(data){
			var data=$.parseJSON(data);
		});

	});

	$("#updateType").on("click",function(){
		var data={
			"id":$("#id").val(),
			"name":$("#name").val()
		};
		$.post(baseURL+"admin/addType/",{data:data},function(data){
			var data=$.parseJSON(data);
		});

	});


	$(".type-delete-btn").on("click",function(){
		var typeID=$(this).data('type-id');
		$.post(baseURL+"admin/deleteType/"+typeID,function(data){
			$("#type-id"+typeID).remove();
		});
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
	});

	$("#addFolder").on("click",function(){
		var data={
			"type_id":$("#type_id").val(),
			"name":$("#name").val()
		};
		$.post(baseURL+"admin/addFolder/",{data:data},function(data){
			var data=$.parseJSON(data);
		});

	});

	$("#updateFolder").on("click",function(){
	var data={
		"id":$("#id").val(),
		"type_id":$("#type_id").val(),
		"name":$("#name").val()
	};
	$.post(baseURL+"admin/addFolder/",{data:data},function(data){
		var data=$.parseJSON(data);
	});

});

	$(".folder-delete-btn").on("click",function(){
		var folderID=$(this).data('folder-id');
		$.post(baseURL+"admin/deleteFolder/"+folderID,function(data){
			$("#folder-id"+folderID).remove();
		});
	});

	$(".folder-edit-btn").on("click",function(){
		$("#editFolderModal").modal('open');
		$("#editFolderModal .modal-content").html("");
		var folderID=$(this).data('folder-id');
		$.post(baseURL+"admin/editFolder/"+folderID,function(data){
			$("#editFolderModal .modal-content").html(data);
			Materialize.updateTextFields();
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
			url:baseURL+"Testimonials/addTest/",
			data:formData,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				//alert("Added Testimonial successfully.....");
				//window.location.reload();
			}
		});
	});

	$("#updateTest").on("click",function(){
		var formData=new FormData($("#updateTestForm")[0]);
		$.ajax({
			url:baseURL+"Testimonials/updateTest/",
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
		$.post(baseURL+"Testimonials/editTest/"+editTest,function(data){
			$("#editTestModal .modal-content").html(data);
			Materialize.updateTextFields();
		});	
	});


	$(".test-delete-btn").on("click",function(){
	var dltTest=$(this).data('test-id');
	if(confirm("Do you want to delete this Record....")){
		$.post(baseURL+"Testimonials/deleteTest/"+dltTest,function(data){
			$("#testid"+dltTest).remove();
		});		
	}

	});
	/*End Testimonial*/

});
<?php 
/**
* 
*/
class Admin extends CI_Controller
{

	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Admin Login",
			"stylesheet" => array("admin-login.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "admin-login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}
	
	public function gallery_type(){
		$this->load->model('admin_model');
		$allTypeData=$this->admin_model->allTypeData();		

		$headerData = array(
			"pageTitle" => "Folder Type", 
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "type_dashboard",
            "viewData" => array("allTypeData"=>$allTypeData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}

	public function addType(){
		$data=$_POST['data'];
		$this->load->model("admin_model");
		$this->admin_model->addType($data);
			
	}
	public function updateType(){
		$data=$_POST['data'];
		$id=$data['id'];
		$this->load->model("admin_model");
		$result=$this->admin_model->updateType($data,$id);
		echo json_encode($result);
		
	}
	public function deleteType($id){	
		$this->load->model("admin_model");
		$this->admin_model->deleteType($id);
	}
	public function editType($id){
		$this->load->model("admin_model");
		$output=$this->admin_model->editType($id);
		$this->load->view("updateType",$output);
	}


/*=================================Folder==================================================*/


	public function gallery_folder(){

		$this->load->model("admin_model");
		$this->load->model("gallery_model");

		$galleryType = $this->gallery_model->getFolderType();

		$allFolderData=$this->admin_model->allFolderData();		

		$headerData = array(
			"pageTitle" => "Folder Type",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "folder_dashboard",
            "viewData" => array("allFolderData"=>$allFolderData,"gallery_type"=>$galleryType),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}

	public function addFolder(){
		$data=$_POST['data'];
		$this->load->model("admin_model");
		$this->admin_model->addFolder($data);
			
	}
	public function updateFolder(){
		$data=$_POST['data'];
		$id=$data['id'];
		$this->load->model("admin_model");
		$this->admin_model->updateFolder($data,$id);
				
	}
	public function deleteFolder($deleteId){		
		$this->load->model("admin_model");
		$this->admin_model->deleteFolder($deleteId);
	}
	public function editFolder($editId){	
		$this->load->model("gallery_model");	
		$this->load->model("admin_model");

		$galleryType = $this->gallery_model->getFolderType();

		$output=$this->admin_model->editFolder($editId);
		$output["type"] = $galleryType;
		$this->load->view("updateFolder",$output);
	}

	/*=========================================Image=======================================*/
	public function imageDashboard(){
		$this->load->model("admin_model");
		$allImageData=$this->admin_model->allImageData();		

		$headerData = array(
			"pageTitle" => "Image",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);

		$viewData = array(
			"viewName" => "image_dashboard",
            "viewData" => array("allImageData"=>$allImageData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_templete',$viewData);
	}

	public function addImage(){

		$result=array(
			"folder_id"=>$_POST['folder_id']
		);

		$this->load->model("admin_model");	

		//add blog with the text data and get the blog id
		$imageID = $this->admin_model->addImage($result);

		//Define the file names with blog id with same extension which has been uploaded
		$image = $imageID."_folderimage.".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"image" => $image			
		);

		// update the name of the images in the database
		$this->admin_model->updateImage($updateData,$imageID);

		//set configuration for the upload library
		$config['upload_path'] = 'C:\wamp\www\moments-new\html\images\folder_img';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $imageID."_folderimage";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('image');
	}


	public function updateImage(){

		$imageID=$_POST['id'];

		$this->load->model('admin_model');

		$image = $imageID."_folderImage.".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);		
		$result=array(					
					"folder_id"=>$_POST['folder_id']									
			);
			if($_FILES['image']['name']!=""){			
				$result["image"] = $image;

				//set configuration for the upload library
				$config['upload_path'] = 'C:\wamp\www\moments-new\html\images\folder_img';

			    $config['allowed_types'] = 'gif|jpg|png';
			    $config['overwrite'] = TRUE;
			    $config['encrypt_name'] = FALSE;
			    $config['remove_spaces'] = TRUE; 

			    $config['file_name'] = $imageID."_folderImage";
			    $this->load->library('upload', $config);	
			    $this->upload->do_upload('image');		    
			}
			$this->admin_model->updateImage($result,$imageID);	
		}

		public function deleteImage($deleteID)
		{
			$this->load->model("admin_model");
			$this->admin_model->deleteImage($deleteID);
		}
		public function editImage($editId){		
			$this->load->model("admin_model");
			$output=$this->admin_model->editImage($editId);
			$this->load->view("updateImage",$output);
		}	


	/*==================================Client Logo=======================================*/
	public function clientDashboard(){
		$this->load->model("admin_model");
		$allClientData=$this->admin_model->allClientData();		

		$headerData = array(
			"pageTitle" => "Client Logo",
			"stylesheet" => array("header.css","admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "client_dashboard",
            "viewData" => array("allClientData"=>$allClientData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}

	public function addClient(){

		$result=array(
			"name"=>$_POST['name']
		);

		$this->load->model("admin_model");	

		//add blog with the text data and get the blog id
		$clientID = $this->admin_model->addClient($result);

		//Define the file names with blog id with same extension which has been uploaded
		$image = $clientID."_clientImage.".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"image" => $image			
		);

		// update the name of the images in the database
		$this->admin_model->updateClient($updateData,$clientID);

		//set configuration for the upload library
		$config['upload_path'] = 'C:\wamp\www\moments-new\html\images\client';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $clientID."_clientImage";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('image');
	}


	public function updateClient(){

		$clientID=$_POST['id'];

		$this->load->model('admin_model');

		$image = $clientID."_clientImage.".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);		
		$result=array(					
					"name"=>$_POST['name']									
			);
			if($_FILES['image']['name']!=""){			
				$result["image"] = $image;

				//set configuration for the upload library
				$config['upload_path'] = 'C:\wamp\www\moments-new\html\images\client';

			    $config['allowed_types'] = 'gif|jpg|png';
			    $config['overwrite'] = TRUE;
			    $config['encrypt_name'] = FALSE;
			    $config['remove_spaces'] = TRUE; 

			    $config['file_name'] = $clientID."_clientImage";
			    $this->load->library('upload', $config);	
			    $this->upload->do_upload('image');		    
			}
			$this->admin_model->updateClient($result,$clientID);	
		}

		public function deleteClient($deleteID)
		{
			$this->load->model("admin_model");
			$this->admin_model->deleteClient($deleteID);
		}
		public function editClient($editId){		
			$this->load->model("admin_model");
			$output=$this->admin_model->editClient($editId);
			$this->load->view("updateClient",$output);
		}	
	/*=================Testimonials============================================*/

	public function testimonials()
	{	
		$this->load->model("Admin_model");	
		$testData=$this->Admin_model->allTestData();
		$headerData = array(
			"pageTitle" => "Testimonials",
			"stylesheet" => array("admin.css","header.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","header.js")
		);
		$viewData = array(
			"viewName" => "testimonial_dashboard",
            "viewData" => array("testData"=>$testData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin_template',$viewData);
	}
	public function addTest(){
		$this->load->model("admin_model");
		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']
		);
		$testID=$this->admin_model->addTest($result);

		$testImage=$testID."_testImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		$updateData=array("image"=>$testImage);

		$this->admin_model->updateTest($updateData,$testID);
		$config['file_name']=$testID."_testImage";
		$config['upload_path']='C:\wamp\www\moments-new\html\images\testimonials';
		$config['allowed_types']='gif|png|jpg';
		$config['overwrite']=TRUE;
		$config['remove_spaces']=TRUE;
		$config['encrypt_name']=FALSE;
		

		$this->load->library('upload',$config);
		$this->upload->do_upload('image');

	}
	public function updateTest(){
		$this->load->model("admin_model");
		$testID=$_POST['testID'];
		$result=array(
			"title"=>$_POST['title'],
			"details"=>$_POST['details']
		);
		$testImage=$testID."_testImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		if($_FILES['image']['name']!=""){

			$result['image']=$testImage;
			$config['file_name']=$testID."_testImage";
			$config['upload_path']='C:\wamp\www\moments-new\html\images\testimonials';
			$config['allowed_types']='gif|png|jpg';
			$config['overwrite']=TRUE;
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;

			$this->load->library('upload',$config);
			$this->upload->do_upload('image');

				}
				$this->admin_model->updateTest($result,$testID);
			}

		public function deleteTest($testID){
			$this->load->model('admin_model');
			$this->admin_model->deleteTest($testID);
		}
		public function editTest($testID){
			$this->load->model('admin_model');
			$data=$this->admin_model->editTest($testID);
			$this->load->view('updateTest',$data);
		}

}
?>
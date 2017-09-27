<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class admin_model extends CI_Model
{
	/*=========================Type=========================================================*/
	public function addType($typeData){
		$this->db->insert("type",$typeData);
	}
	public function updateType($typeData,$typeId){
		$this->db->where("id",$typeId);
		$this->db->update("type",$typeData);
	}
	public function deleteType($typeId){
		$this->db->where("id",$typeId);
		$this->db->delete("type");
	}
	public function editType($typeId){
		$result=$this->db->query("select * from type where id='$typeId' ");
		return $result;
	}
	public function allTypeData(){
		$result=$this->db->query("select * from type");
		return $result;
	}
	/*=============================Folder===================================================*/
	public function addFolder($folderData){
		$this->db->insert("folder",$folderData);
	}
	public function updateFolder($folderData,$folderId){
		$this->db->where("id",$folderId);
		$this->db->update("folder",$folderData);
	}
	public function deleteFolder($folderId){
		$this->db->where("id",$folderId);
		$this->db->delete("folder");
	}
	public function editFolder($folderId){
		$result=$this->db->query("select * from folder where id='$folderId' ");
		return $result;
	}
	public function allFolderData(){
		$result=$this->db->query("select * from folder");
		return $result;
	}

	/*=============================Image===================================================*/

	public function addImage($imageData){
		$this->db->insert("image",$imageData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateImage($imageData,$imageId){
		$this->db->where("id",$imageId);
		$this->db->update("image",$imageData);
	}
	public function deleteImage($imageId){
		$this->db->where("id",$imageId);
		$this->db->delete("image");
	}
	public function editImage($imageId){
		$result=$this->db->query("select * from image where id='$imageId' ");
		return $result;
	}
	public function allImageData(){
		$result=$this->db->query("select * from image");
		return $result;
	}


	/*=============================Client Logo=============================================*/

	public function addClient($clientData){
		$this->db->insert("client_logo",$clientData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateClient($clientData,$clientId){
		$this->db->where("id",$clientId);
		$this->db->update("client_logo",$clientData);
	}
	public function deleteClient($clientId){
		$this->db->where("id",$clientId);
		$this->db->delete("client_logo");
	}
	public function editClient($clientId){
		$result=$this->db->query("select * from client_logo where id='$clientId' ");
		return $result;
	}
	public function allClientData(){
		$result=$this->db->query("select * from client_logo");
		return $result;
	}

	/*=============================Testimonials============================================*/

	public function addTest($testData){
		$this->db->insert("testimonials",$testData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateTest($testData,$testId){
		$this->db->where("id",$testId);
		$this->db->update("testimonials",$testData);
	}
	public function deleteTest($testId){
		$this->db->where("id",$testId);
		$this->db->delete("testimonials");
	}
	public function editTest($testId){
		$result=$this->db->query("select * from testimonials where id='$testId' ");
		return $result;
	}
	public function allTestData(){
		$result=$this->db->query("select * from testimonials");
		return $result;
	}

  /*=====================================================================================*/

}

?>
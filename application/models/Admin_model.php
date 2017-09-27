<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Admin_model extends CI_Model
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
		$query=$this->db->query("select * from type where id='$typeId' ");
		$output=$query->row_array();
		return $output;
	}
	public function allTypeData(){
		$query=$this->db->query("select * from type");
		$output=$query->result_array();
		return $output;
	}
	/*============================Folder===================================================*/
/*	public function addFolder($folderData){
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
		$query=$this->db->query("select * from folder where id='$folderId' ");
		$output=$query->row_array();
		return $output;
	}
	public function allFolderData(){
		$query=$this->db->query("select * from folder");
		$output=$query->result_array();
		return $output;
	}*/

	/*=============================Image===================================================*/

	/*public function addImage($imageData){
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
		$query=$this->db->query("select * from image where id='$imageId' ");
		$output=$query->row_array();
		return $output;
	}
	public function allImageData(){
		$query=$this->db->query("select * from image");
		$output=$query->result_array();
		return $output;
	}*/


	/*=============================Client Logo=============================================*/

	/*public function addClient($clientData){
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
		$query=$this->db->query("select * from client_logo where id='$clientId' ");
		$output=$query->row_array();
		return $output;
	}
	public function allClientData(){
		$query=$this->db->query("select * from client_logo");
		$output=$query->result_array();
		return $output;
	}
*/
	/*=============================Testimonials============================================*/

	/*public function addTest($testData){
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
		$query=$this->db->query("select * from testimonials where id='$testId' ");
		$output=$query->row_array();
		return $output;
	}
	public function allTestData(){
		$query=$this->db->query("select * from testimonials");
		$output=$query->result_array();
		return $output;
	}*/

  /*=====================================================================================*/

}

?>
<?php 

class Gallery_model extends CI_Model
{
	public function getFolderType(){
		$query = $this->db->query("select * from type");
		$output = $query->result_array();
		return $output;
	}

	public function getFolders($typeID){
		$query = $this->db->query("select * from folder where type_id='$typeID'");
		$output = $query->result_array();
		return $output;
	}

	public function getImageFolders(){
		$query = $this->db->query("Select * from folder where type_id='2'");
		$output = $query->result_array();
		foreach ($output as $key => $folderRow) {
			$output[$key]["folder_images"] = $this->getFolderImages($folderRow["id"]);
		}
		return $output;
	}

	public function getVideoFolders(){
		$query = $this->db->query("Select * from folder where type_id='1'");
		$output = $query->result_array();
		foreach ($output as $key => $folderRow) {
			$output[$key]["folder_images"] = $this->getFolderImages($folderRow["id"]);
		}
		return $output;
	}



	public function getFolderImages($folderID){
		$query = $this->db->query("select * from image where folder_id='$folderID'");
		$output = $query->result_array();
		return $output;
	}
}


<?php 

class Gallery_model extends CI_Model
{
	public function getFolderType(){
		$query = $this->db->query("select * from type");
		$output = $query->result_array();
		return $output;
	}
}


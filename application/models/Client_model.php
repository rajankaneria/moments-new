<?php 

class Client_model extends CI_Model
{

	public function allClients(){
		$query = $this->db->query("select * from client_logo order by name asc");
		$output = $query->result_array();
		return $output;
	}


}
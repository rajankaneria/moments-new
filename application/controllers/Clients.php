<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	
	public function index()
	{	

		$this->load->model("client_model");
		$clients = $this->client_model->allClients();	

		$headerData = array(
			"pageTitle" => "Clients",
			"stylesheet" => array("client.css")
		);
		$footerData = array(
			"jsFiles" => array("client.js")
		);
		$viewData = array(
			"viewName" => "client",
            "viewData" => array("clients"=>$clients),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

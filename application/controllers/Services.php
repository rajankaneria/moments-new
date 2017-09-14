<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Services",
			"stylesheet" => array("services.css")
		);
		$footerData = array(
			"jsFiles" => array("services.js")
		);
		$viewData = array(
			"viewName" => "services",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Our Team",
			"stylesheet" => array("team.css")
		);
		$footerData = array(
			"jsFiles" => array("team.js")
		);
		$viewData = array(
			"viewName" => "team",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

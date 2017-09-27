<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Gallery",
			"stylesheet" => array("gallery.css")
		);
		$footerData = array(
			"jsFiles" => array("gallery.js")
		);
		$viewData = array(
			"viewName" => "gallery",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

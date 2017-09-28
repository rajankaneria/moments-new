<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	
	public function index()
	{		

		$headerData = array(
			"pageTitle" => "Testimonials",
			"stylesheet" => array("testimonials.css")
		);
		$footerData = array(
			"jsFiles" => array("testimonials.js")
		);
		$viewData = array(
			"viewName" => "testimonials",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

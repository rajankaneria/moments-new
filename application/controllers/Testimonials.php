<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("admin_model");
		$allTestData=$this->admin_model->allTestData();

		$headerData = array(
			"pageTitle" => "Testimonials",
			"stylesheet" => array("testimonials.css")
		);
		$footerData = array(
			"jsFiles" => array("testimonials.js")
		);
		$viewData = array(
			"viewName" => "testimonials",
            "viewData" => array("allTestData"=>$allTestData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{	
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function contactUs(){
		  	$data=array(
		  		"full_name"=>$_POST["full_name"],
		  		"email"=>$_POST["email"],
		  		"mobile"=>$_POST["mobile"],
		  		"message"=>$_POST["message"]
		  	);		  	
		  	$this->load->model("admin_model");
		  	$this->admin_model->contact($data);
		  }
}

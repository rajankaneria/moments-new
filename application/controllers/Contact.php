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

		  	/*====for mail============*/
		  	$to = "webservices.intelliworkz@gmail.com";
			$subject = "Contact Inquiry";

			$message ="
			<body><div style= height:800px; width:99%;margin-top:50px;>
				
				<table height=200px width=40%>

			   <tr><td>Name:</td><td>Rupal</td></tr> 
			  
			   <tr><td>Phone:</td><td>992483421</td></tr>
			    <tr><td>E-Mail:</td><td>baradrupal92@gmail.com</td></tr>
			        <tr><td>Services:</td><td>good services</td></tr>
			    <tr><td>message:</td><td>For Inqiiry</td></tr>
			    </table></div></body>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <webservices.intelliworkz@gmail.com>' . "\r\n";
			//$headers .= 'Cc: info@delightholidays.co.in' . "\r\n";
			mail($to,$subject,$message,$headers);
			
	}

		  
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("gallery_model");
		$videoFolders = $this->gallery_model->getVideoFolders();
		$imageFolders = $this->gallery_model->getImageFolders();

		$headerData = array(
			"pageTitle" => "Gallery",
			"stylesheet" => array("gallery.css")
		);
		$footerData = array(
			"jsFiles" => array("gallery.js")
		);
		$viewData = array(
			"viewName" => "gallery",
            "viewData" => array("imageFolder"=>$imageFolders,"videoFolder"=>$videoFolders),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

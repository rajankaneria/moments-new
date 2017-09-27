<?php
    $this->load->view("includes/admin-header.php",$headerData);
    
	$this->load->view($viewName,$viewData);
    
    $this->load->view("includes/admin-footer.php",$footerData); 
?>
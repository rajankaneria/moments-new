<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Moments- <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
   

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
   

</head>

<body>
    <?php //if($this->session->userdata("email")){ ?>
     <ul id="slide-out" class="side-nav">
      <li>
          <div class="row sidebar-logo">
              <a href="<?php echo base_url(); ?>admin" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/event_logo.png" height="100px" id="logo"></a>
          </div>
      </li>  
      <li><a href="<?php echo base_url(); ?>admin/folderType">Folder Type</a></li>
      <li><a href="<?php echo base_url(); ?>admin/mainFolder">Main Folder</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">First</a></li>
                <li><a href="#!">Second</a></li>
                <li><a href="#!">Third</a></li>
                <li><a href="#!">Fourth</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
   <nav class="admin-header-area">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a href="<?php echo base_url(); ?>admin" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/event_logo.png" height="100px" id="logo"></a>
        </div>
        <div class="logoutBtn right"> 
         <a href="<?php echo base_url(); ?>admin/logout/"><i class="fa fa-power-off" aria-hidden="true"></i></a>  
        </div> 
    </nav>
    <?php // } else{ ?>
     
      <!-- <div class="login-page">
        <center>
        <a href="<?php echo base_url(); ?>home" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/event_logo.png" height="100px" id="logo"></a>
        </center>
      </div> -->
    
    <?php // } ?>
        
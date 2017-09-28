<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Moments | <?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<div class="navigation"> 
    <div class="site-logo"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>html/images/event_logo.png" /></a></div>
    <div class="menu hide-on-med-and-down">
        <div class="menu-item"><a href="<?php echo base_url(); ?>home">Home</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>team">Our Team</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>services">Services</a></div>
        <div class="menu-item"><a href="#">Gallery</a></div>
        <div class="menu-item"><a href="#">Clients</a></div>
        <div class="menu-item"><a href="#">Testimonial</a></div>
        <div class="menu-item"><a href="#">Contact</a></div>
    </div>
</div>

<!-- Mobile Responsive Menu -->

<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="site-logo"><img src="<?php echo base_url(); ?>html/images/event_logo.png" class="responsive-img" /></div>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
    <li><a href="<?php echo base_url(); ?>team">Our Team</a></li>
    <li><a href="<?php echo base_url(); ?>services">Services</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#!">Clients</a></li>
    <li><a href="#!">Testimonial</a></li>
    <li><a href="#!">Contact</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse slide-btn"><i class="material-icons">menu</i></a>
      

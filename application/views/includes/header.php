<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Moments | <?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet"> 
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/script.js?<?php echo time(); ?>"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>?<?php echo time(); ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript">
                
        /*
        $(function(){
            window.onload = function() {
                // this will fire after the entire page is loaded, including images
                //$("title").html("Loaded");
                $("body").hide();
                $(".site-overlay").fadeOut(200,function(){
                    $("body").fadeIn(1000);
                });
            };
        });
        */
        


    </script>
</head>
<body>

<div class="navigation"> 
    <div class="site-logo"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>html/images/event_logo.png" /></a></div>
    <div class="menu hide-on-med-and-down">
        <div class="menu-item"><a href="<?php echo base_url(); ?>home">Home</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>team">Our Team</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>services">Services</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>gallery">Gallery</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>clients">Clients</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>testimonials">Testimonials</a></div>
        <div class="menu-item"><a href="<?php echo base_url(); ?>contact">Contact</a></div>
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
    <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
    <li><a href="<?php echo base_url(); ?>clients">Clients</a></li>
    <li><a href="<?php echo base_url(); ?>testimonials">Testimonials</a></li>
    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse slide-btn"><i class="material-icons">menu</i></a>
      

<!-- Social Medias -->

 <div class="fixed-action-btn horizontal btn-social">
    
    <!-- <img src="<?php echo base_url(); ?>html/images/social.png" class="find-btn-img"> -->
    <a class="btn-floating btn-large find-btn">
      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
    </a>
    
    <ul class="social-area">
      <li><a href="https://www.facebook.com/momentsevent99/" target="_page" class="btn-floating indigo darken-2"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/events_moments" target="_page" class="btn-floating blue"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/momentseve/" target="_page" class="btn-floating pink darken-3"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <!--
  <div class="site-overlay">
      <div class="overlay-content">
            <div class="site-overlay-logo"><img width="200px" src="<?php echo base_url(); ?>html/images/event_logo.png" class="responsive-img" /></div>
            <div class="site-preloader">
                <div class="preloader-wrapper active">
                    <div class="spinner-layer spinner-red-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                </div>
          </div>
      </div>
  </div>
  -->
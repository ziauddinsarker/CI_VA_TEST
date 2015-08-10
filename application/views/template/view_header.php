<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome to Valo-Achi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("assets/css/bootstrap-theme.min.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("assets/css/jquery.bxslider.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("assets/css/login-style.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("assets/css/main.css"); ?>" rel="stylesheet" type="text/css" />

		
		<script src="<?php echo base_url('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
	<!--	<script src='https://www.google.com/recaptcha/api.js'></script>		 -->
    </head>
	
	<body>
	<!--
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=753346058061846";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	-->
	
	<!--Header Starts Here -->	
	<header>
		<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url("assets/images/logo_v4.png"); ?>" height="100" width="80"/></a>
		  
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<!-- <li><a href="about.html">How Bhaloaachee Works!</a></li> -->
			<!-- <li><a href="contact.html">More</a></li> -->
		  </ul>
		  
		  <nav class="main-nav nav navbar-nav navbar-right">
			<ul>
			<li><a href="https://www.facebook.com/BhaloAchee" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
			<li><a href="https://twitter.com/BhaloAchee" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
			
			<?php
				if($this->session->userdata('user_id'))//if user is loged in, display comment box
                {
			?>
                    <!-- <li><a class="cd-signin btn btn-primary" href="<?php  //base_url()?>users/logout">Logout</a></li>-->
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-2x"></i><span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
						<li><a href="<?php base_url() ?>admin"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php base_url() ?>users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
					</ul>
				  </li>
               <?php               
                }else {
				//if no user is loged in, then show the loged in button
                echo '<li><a class="cd-signin btn btn-primary" href="' . site_url("login").'">Login</a></li>';
				echo '<li><a class="cd-signup btn btn-primary" href="' . site_url("register").'">Join (Free)</a></li>';
				}
				?>
			</ul>
			
		</nav>
		
		</div><!--/.nav-collapse -->
	  </div>
	</nav>

	</header>
	<div class="container banner">
		<div class="row">
			<img class="img-responsive" src="<?php echo base_url("assets/images/banner.jpg"); ?>">			
		</div>
	</div>
	<!--Main Starts Here -->	
	<div class="main">
		<div class="container">	
		
		
			<section class="shop-result medicine-result">
				
			<article class="row">					
			
            <div role="tabpanel" id="main-tab">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
			  <li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
              <li role="presentation" class="active"><a href="#price" aria-controls="home" role="tab" data-toggle="tab">Medicine Price & Shops</a></li>
              <li role="presentation"><a href="#events" aria-controls="profile" role="tab" data-toggle="tab">Upcoming Events</a></li>			  
              <li role="presentation"><a href="#blog" aria-controls="settings" role="tab" data-toggle="tab">Review & News</a></li>			  
              <li role="presentation"><a href="#discount" aria-controls="messages" role="tab" data-toggle="tab">Find Discounts</a></li>
              <li role="presentation"><a href="#doctor" aria-controls="messages" role="tab" data-toggle="tab">Find Doctors</a></li>
              <li role="presentation"><a href="#healthcare" aria-controls="messages" role="tab" data-toggle="tab">Healthcare Centers</a></li>			  
              <li role="presentation"><a href="#faqs" aria-controls="profile" role="tab" data-toggle="tab">FAQs</a></li>
              <li role="presentation"><a href="#contact" aria-controls="settings" role="tab" data-toggle="tab">Contact Us</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
			
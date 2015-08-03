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
				if(!isset($_SESSION['sess_username']) || $role!="user"){
					echo '<li><a class="cd-signin btn btn-primary" href="' . site_url("login").'">Sign in</a></li>';
			echo '<li><a class="cd-signup btn btn-primary" href="' . site_url("register").'">Sign up</a></li>';
				}else{
			?>
		
			
			<?php echo '<li><a href="user/dashboard.php">Hello Ziauddin</a></li>'; } ?>
				 <!-- 
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
				-->
				
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
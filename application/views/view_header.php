<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Welcome to the Homepage</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="home">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>	
						
            
			<?php echo ($this->session->userdata('logged_in')) ? '<a href="#">' . $username . '</a><li role="presentation"><a href="home/logout">Logout</a></li>' : '<li role="presentation"><a href="login">Login</a></li>
            <li role="presentation"><a href="#">Register</a></li><li role="presentation"><a href="home/logout">Logout</a></li>'; ?>
		
			
		
          </ul>
        </nav>
        <h3 class="text-muted">BA</h3>
      </div>
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



<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>





	<!--include jquery library-->
	<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!--load jquery ui js file-->
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
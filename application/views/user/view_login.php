<?php
		if (isset($logout_message)) {
		echo "<div class='message'>";
		echo $logout_message;
		echo "</div>";
	}
	?>
	<?php
	if (isset($message_display)) {
		echo "<div class='message'>";
		echo $message_display;
		echo "</div>";
	}
	?>

<section class="signup">
				
			<article class="row">					
			
				<div role="tabpanel" id="main-tab">				
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				
				  <li role="presentation" class="active"><a href="#doctors" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
				  
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="doctors">
					
							<h4>Log in with your credentials</h4><br/>
							
									 
								<div class="row">
								<div class="col-md-8">
									<?php echo form_open('login/user_login_process'); ?>
										
									
									<?php if (validation_errors()) : ?>
									
									
											<div class="col-md-12">
												<div class="alert alert-danger" role="alert">
													<?= validation_errors() ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if (isset($error)) : ?>
											<div class="col-md-12">
												<div class="alert alert-danger" role="alert">
													<?= $error ?>
												</div>
											</div>
										<?php endif; ?>	
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-default" value="Login">
										</div>
										
									<a href="<?php echo base_url() ?>register">To SignUp Click Here</a>
								<?php echo form_close(); ?>
									
									 </div>
								</div>
					</div>	  
				</div>
				<!-- Tab panes end -->
			  </div> 			  
			</article>
			
		</section>			
		</div>
	 	<!--End Container -->	
		<!--Footer Start Here -->

	</div>
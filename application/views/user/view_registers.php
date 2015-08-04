		<section class="signup">
				
			<article class="row">					
			
				<div role="tabpanel" id="main-tab">
				<h1>User Registration Form</h1>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				
				  <li role="presentation" class="active"><a href="#doctors" aria-controls="home" role="tab" data-toggle="tab">Doctors</a></li>
				  <li role="presentation"><a href="#company" aria-controls="profile" role="tab" data-toggle="tab">Company</a></li>
				  
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="doctors">
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
					
					
					
					<?php echo form_open("register/index");?>
					
						
							<div class="form-group">
							<!-- the name input field -->
								<label for="login_input_name">Name(Full Name)</label>
								<input id="login_input_name" class="form-control login_input" type="text" name="doctorfullname" />
							</div>
							
							<div class="form-group">
								<!-- the Title/Degree input field -->
								<label for="login_input_title">Title/Degree</label>
								<input id="login_input_title" class="form-control login_input" type="text" name="doctortitle" />
							</div>
							
							<div class="form-group">
								<!-- the Gender input field -->
								<label for="login_input_gender">Gender</label>	
								<input id="login_input_male" type="radio" name="doctorgender" value="male">Male
								<input id="login_input_female" type="radio" name="doctorgender" value="female">Female
							</div>
							
							<div class="form-group">
								<!-- the BDMC input field -->
								<label for="login_input_bmdc">BMDC No.</label>
								<input id="login_input_bmdc" class="form-control  login_input" type="text" name="doctorbmdc" />
							</div>
							
							<div class="form-group">
								<!-- the email input field uses a HTML5 email type check -->
								<label for="login_input_email">Email Address</label>
								<input id="login_input_email" class="form-control  login_input" type="email" name="doctoruser_email" required />
							</div>
							
							<div class="form-group">
								<!-- the Phone input field -->
								<label for="login_input_phone">Phone</label>
								<input id="login_input_phone" class="form-control login_input" type="text" name="doctorphone" />
							</div>
							
							<div class="form-group">
								<!-- the Specialist input field -->
								<label for="login_input_specialist">Speciality</label>	
								<?php
									$attributes = 'class = "form-control" id = "specility"';
									echo form_dropdown('specility',$specility,set_value('specility'),$attributes);
								?>
								<span class="text-danger"><?php echo form_error('specility'); ?></span>				
							</div>	
															
							<div class="form-group">
								<!-- the Address input field -->
								<label for="login_input_address">Address</label>
								<input id="login_input_address" class="form-control login_input" type="textarea" name="doctoraddress" rows="4" cols="20" />
							</div>
							
							<div class="form-group">
								<!-- the Address input field --><!-- the Address input field --><!-- the Address input field --><!-- the Address input field -->
								<label for="login_input_district">District</label>
								<?php
									$attributes = 'class = "form-control" id = "district"';
									echo form_dropdown('district',$district,set_value('district'),$attributes);
								?>
								<span class="text-danger"><?php echo form_error('district'); ?></span>

								<!-- <input id="login_input_district" class="form-control login_input" type="text" name="district" rows="4" cols="20" /> -->
								<!-- the Address input field --><!-- the Address input field --><!-- the Address input field --><!-- the Address input field -->
							</div>
							
							<div class="form-group">
								<!-- the user name input field uses a HTML5 pattern check -->
								<label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
								<input id="login_input_username" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="doctoruser_name" required />
							</div>
							
							<div class="form-group">
								<!-- the Password input field -->
								<label for="login_input_password_new">Password (min. 6 characters)</label>
								<input id="login_input_password_new" class="form-control login_input" type="password" name="doctoruser_password_new" pattern=".{6,}" required autocomplete="off" />
							</div>
							
							<div class="form-group">
								<label for="login_input_password_repeat">Repeat password</label>
								<input id="login_input_password_repeat" class="form-control login_input" type="password" name="doctoruser_password_repeat" pattern=".{6,}" required autocomplete="off" />
							</div>
							<!-- the Submit input field -->
							<input class="btn btn-default" type="submit"  name="registerDoctor" value="Register Doctor" />

							</form>
					</div>
					
					
					
					
					
					
					<div role="tabpanel" class="tab-pane" id="company">
						<form method="post" action="signup-process.php">
							<div class="form-group">
							<!-- the name input field -->
								<label for="login_input_name">Name</label>
								<input id="login_input_name" class="form-control login_input" type="text" name="fullname" />
							</div>
							
							<div class="form-group">
								<!-- the Address input field -->
								<label for="login_input_address">Address</label>
								<input id="login_input_address" class="form-control login_input" type="textarea" name="address" rows="4" cols="20" />
							</div>
							
							<div class="form-group">
								<!-- the Phone input field -->
								<label for="login_input_phone">Phone</label>
								<input id="login_input_phone" class="form-control login_input" type="text" name="phone" />
							</div>
							
							<div class="form-group">
								<!-- the email input field uses a HTML5 email type check -->
								<label for="login_input_email">Email Address</label>
								<input id="login_input_email" class="form-control  login_input" type="email" name="user_email" required />
							</div>
							
							<div class="form-group">
								<!-- the Specialist input field -->
								<label for="login_input_business_type">Business Type</label>	
								
								<?php
								$attributes = 'class = "form-control" id = "business_type"';
								echo form_dropdown('business_type',$business_type,set_value('business_type'),$attributes);?>
								<span class="text-danger"><?php echo form_error('business_type'); ?></span>
								
								
								
								<?php
								/* 
									echo "<select class=\"form-control\" name=\"businesstype\" id=\"sel2\">";	
									
									while ($row = mysql_fetch_array($company_cat)){ 
									$company_category_id = $row["company_cat_id"];									
									$company_category_name = $row["company_cat_name"];									
										echo "<option value=". $company_category_id ." >" . $company_category_name . "</option>"; 							
									}	
									echo "</select>";	 */							
								?>
							</div>	
							
							<div class="form-group">
								<!-- the user name input field uses a HTML5 pattern check -->
								<label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
								<input id="login_input_username" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
							</div>
							
							<div class="form-group">
								<!-- the Password input field -->
								<label for="login_input_password_new">Password (min. 6 characters)</label>
								<input id="login_input_password_new" class="form-control login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
							</div>
							
							<div class="form-group">
								<label for="login_input_password_repeat">Repeat password</label>
								<input id="login_input_password_repeat" class="form-control login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
							</div>
							<!-- the Submit input field -->
							<input class="btn btn-default" type="submit"  name="registerCompany" value="Company Register" />

							</form>
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

		<section class="signup">
				
			<article class="row">					
			
				<div role="tabpanel" id="main-tab">
				<h1>User Registration Form</h1>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				
				  <li role="presentation" class="active"><a href="#doctors" aria-controls="home" role="tab" data-toggle="tab">Doctors</a></li>
				  <li role="presentation"><a href="#pharmacist" aria-controls="home" role="tab" data-toggle="tab">Pharmacist</a></li>
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
					
					<?php echo form_open("register/register_doctor");?>
					
						
							<div class="form-group">
							<!-- the name input field -->
								<label for="doctor_full_name">Name(Full Name)</label>
								<input id="doctor_full_name" class="form-control login_input" type="text" name="doctor_full_name" />
							</div>
							
							<div class="form-group">
								<!-- the Title/Degree input field -->
								<label for="doctor_title">Title/Degree</label>
								<input id="doctor_title" class="form-control login_input" type="text" name="doctor_title" />
							</div>
							
							<div class="form-group">
								<!-- the Gender input field -->
								<label for="doctor_gender">Gender</label>	
								<input id="doctor_male" type="radio" name="doctor_gender" value="male">Male
								<input id="doctor_female" type="radio" name="doctor_gender" value="female">Female
							</div>
							
							<div class="form-group">
								<!-- the BDMC input field -->
								<label for="doctor_bmdc">BMDC No.</label>
								<input id="doctor_bmdc" class="form-control  login_input" type="text" name="doctor_bmdc" />
							</div>
							
							<div class="form-group">
								<!-- the email input field uses a HTML5 email type check -->
								<label for="doctor_user_email">Email Address</label>
								<input id="doctor_user_email" class="form-control  login_input" type="email" name="doctor_user_email" required />
							</div>
							
							<div class="form-group">
								<!-- the Phone input field -->
								<label for="doctor_phone">Phone</label>
								<input id="doctor_phone" class="form-control login_input" type="text" name="doctor_phone" />
							</div>
							
							<div class="form-group">
								<!-- the Specialist input field -->
								<label for="doctor_specility">Speciality</label>	
								<?php
									$attributes = 'class = "form-control" id = "doctor_specility"';
									echo form_dropdown('specility',$specility,set_value('specility'),$attributes);
								?>
								<span class="text-danger"><?php echo form_error('doctor_specility'); ?></span>				
							</div>	
															
							<div class="form-group">
								<!-- the Address input field -->
								<label for="doctor_address">Address</label>
								<input id="doctor_address" class="form-control login_input" type="textarea" name="doctor_address" rows="4" cols="20" />
							</div>
							
							<div class="form-group">
								<!-- the Address input field --><!-- the Address input field --><!-- the Address input field --><!-- the Address input field -->
								<label for="doctor_district">District</label>
								<?php
									$attributes = 'class = "form-control" id = "doctor_district"';
									echo form_dropdown('district',$district,set_value('district'),$attributes);
								?>
								<span class="text-danger"><?php echo form_error('district'); ?></span>

								<!-- <input id="login_input_district" class="form-control login_input" type="text" name="district" rows="4" cols="20" /> -->
								<!-- the Address input field --><!-- the Address input field --><!-- the Address input field --><!-- the Address input field -->
							</div>
							
							<div class="form-group">
								<!-- the user name input field uses a HTML5 pattern check -->
								<label for="doctor_user_name">Username (only letters and numbers, 2 to 64 characters)</label>
								<input id="doctor_user_name" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="doctor_user_name" required />
							</div>
							
							<div class="form-group">
								<!-- the Password input field -->
								<label for="doctor_user_password_new">Password (min. 6 characters)</label>
								<input id="doctor_user_password_new" class="form-control login_input" type="password" name="doctor_user_password_new" pattern=".{6,}" required autocomplete="off" />
							</div>
							
							<div class="form-group">
								<label for="doctor_user_password_repeat">Repeat password</label>
								<input id="doctor_user_password_repeat" class="form-control login_input" type="password" name="doctor_user_password_repeat" pattern=".{6,}" required autocomplete="off" />
							</div>
							<!-- the Submit input field -->
							<input class="btn btn-default" type="submit"  name="registerDoctor" value="Register Doctor" />
							<div class="form-group">
								<button type="submit" class="btn btn-primary" value="doctor" >Submit</button>
							  </div>
							</form>
					</div>
					
					<!--  Pharmacist Tab -->
					<div role="tabpanel" class="tab-pane" id="pharmacist">
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
					
					
					
					<?php echo form_open("register/register_pharmacist");?>
					
						
							<div class="form-group">
							<!-- the name input field -->
								<label for="pharmacist_fullname">Name(Full Name)</label>
								<input id="pharmacist_fullname" class="form-control login_input" type="text" name="pharmacist_fullname" />
							</div>
							
							<div class="form-group">
								<!-- the Title/Degree input field -->
								<label for="pharmacist_title">Title/Degree</label>
								<input id="pharmacist_title" class="form-control login_input" type="text" name="pharmacist_title" />
							</div>
							
							<div class="form-group">
								<!-- the Gender input field -->
								<label for="pharmacist_gender">Gender</label>	
								<input id="pharmacist_male" type="radio" name="pharmacist_gender" value="male">Male
								<input id="pharmacist_female" type="radio" name="pharmacist_gender" value="female">Female
							</div>
							
							<div class="form-group">
								<!-- the email input field uses a HTML5 email type check -->
								<label for="pharmacist_user_email">Email Address</label>
								<input id="pharmacist_user_email" class="form-control  login_input" type="email" name="pharmacist_user_email" required />
							</div>
							
							<div class="form-group">
								<!-- the Phone input field -->
								<label for="pharmacist_phone">Phone</label>
								<input id="pharmacist_phone" class="form-control login_input" type="text" name="pharmacist_phone" />
							</div>
					
															
							<div class="form-group">
								<!-- the Address input field -->
								<label for="pharmacist_address">Address</label>
								<input id="pharmacist_address" class="form-control login_input" type="textarea" name="pharmacist_address" rows="4" cols="20" />
							</div>
							
							<div class="form-group">
								<!-- the Address input field --><!-- the Address input field --><!-- the Address input field --><!-- the Address input field -->
								<label for="pharmacist_district">District</label>
								<?php
									$attributes = 'class = "form-control" id = "pharmacistdistrict"';
									echo form_dropdown('district',$district,set_value('district'),$attributes);
								?>
								<span class="text-danger"><?php echo form_error('district'); ?></span>
							</div>
							
							<div class="form-group">
								<!-- the user name input field uses a HTML5 pattern check -->
								<label for="pharmacist_user_name">Username (only letters and numbers, 2 to 64 characters)</label>
								<input id="pharmacist_user_name" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="pharmacistuser_name" required />
							</div>
							
							<div class="form-group">
								<!-- the Password input field -->
								<label for="pharmacist_user_password_new">Password (min. 6 characters)</label>
								<input id="pharmacist_user_password_new" class="form-control login_input" type="password" name="pharmacist_user_password_new" pattern=".{6,}" required autocomplete="off" />
							</div>
							
							<div class="form-group">
								<label for="pharmacist_user_password_repeat">Repeat password</label>
								<input id="pharmacist_user_password_repeat" class="form-control login_input" type="password" name="pharmacist_user_password_repeat" pattern=".{6,}" required autocomplete="off" />
							</div>
							<!-- the Submit input field -->
							<input class="btn btn-default" type="submit"  name="registerDoctor" value="Register Doctor" />

							</form>
					</div>
					
					
					
					
					
					<div role="tabpanel" class="tab-pane" id="company">
						<?php echo form_open("register/register_company");?>
							<div class="form-group">
							<!-- the name input field -->
								<label for="company_fullname">Name</label>
								<input id="company_fullname" class="form-control login_input" type="text" name="company_fullname" />
							</div>
							
							<div class="form-group">
								<!-- the Address input field -->
								<label for="company_address">Address</label>
								<input id="company_address" class="form-control login_input" type="textarea" name="company_address" rows="4" cols="20" />
							</div>
							
							<div class="form-group">
								<!-- the Phone input field -->
								<label for="company_phone">Phone</label>
								<input id="companyp_hone" class="form-control login_input" type="text" name="company_phone" />
							</div>
							
							<div class="form-group">
								<!-- the email input field uses a HTML5 email type check -->
								<label for="company_user_email">Email Address</label>
								<input id="company_user_email" class="form-control  login_input" type="email" name="company_user_email" required />
							</div>
							
							<div class="form-group">
								<!-- the Specialist input field -->
								<label for="company_business_type">Business Type</label>	
								
								<?php
								$attributes = 'class = "form-control" id = "company_business_type"';
								echo form_dropdown('business_type',$business_type,set_value('business_type'),$attributes);?>
								<span class="text-danger"><?php echo form_error('business_type'); ?></span>
							</div>	
							
							<div class="form-group">
								<!-- the user name input field uses a HTML5 pattern check -->
								<label for="company_user_name">Username (only letters and numbers, 2 to 64 characters)</label>
								<input id="company_user_name" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="company_user_name" required />
							</div>
							
							<div class="form-group">
								<!-- the Password input field -->
								<label for="company_user_password_new">Password (min. 6 characters)</label>
								<input id="company_user_password_new" class="form-control login_input" type="password" name="company_user_password_new" pattern=".{6,}" required autocomplete="off" />
							</div>
							
							<div class="form-group">
								<label for="company_user_password_repeat">Repeat password</label>
								<input id="company_user_password_repeat" class="form-control login_input" type="password" name="company_user_password_repeat" pattern=".{6,}" required autocomplete="off" />
							</div>
							<!-- the Submit input field -->
							<input class="btn btn-default" type="submit"  name="registerCompany" value="Register Company" />

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

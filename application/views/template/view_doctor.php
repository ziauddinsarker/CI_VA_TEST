<div role="tabpanel" class="tab-pane" id="doctor">
				
				<div class="row">
					<div class="col-md-12">
					<!-- Find Doctors by Districts-->
					<h3>Find Doctors by District</h3>
						<div class="btn-group" data-toggle="buttons" id="division"> 
							<?php foreach($district as $dist){?>									
								<label class="btn btn-primary">
								<input type="radio" name="district" class="track-order-change" id="<?php echo $dist->district_name;?>" value="<?php echo $dist->district_name;?>">
								 <?php echo $dist->district_name;?>
								</label> 
							 <?php }?>  			
						</div>					
					</div>			
				</div>
				
				<!-- Find Doctors by Category-->
				<h3>Doctor By Category</h3>					
				<div class="btn-group" data-toggle="buttons" id="filters"> 
					<?php foreach($doctors_category as $category){?>									
						<label class="btn btn-primary">
						<input type="radio" name="district" class="track-order-change" id="<?php echo $category->doctor_category_name;?>" value="<?php echo $category->doctor_category_name;?>">
						 <?php echo $category->doctor_category_name;?>
						</label> 
					 <?php }?>  			
				</div>	
				
			
			<!-- Get All Doctor -->	
			<?php foreach($all_doctors as $doctor){?>	
					<div class="panel-group" id="accordion">
	
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $doctor->doctor_id ; ?>">                        
									<h4><?php echo $doctor->doctor_name ; ?> 
									
									
									<sup>		
									<?php foreach($doctors_rating as $doc_rating){?>							
										<?php echo $doc_rating->RSB;?> RSB (Auto add from history update by admin)
									<?php } ?>
									<sup></h4>
									<img src="<?php echo base_url("assets/images/avatar.png"); ?>" alt="" height="100" width="100"/>
									<p>Title/Degree : <?php echo $doctor->doctor_title ; ?></p>
									<p>Specialist: <?php echo $doctor->doctor_category_name ; ?></p>
								</div>	
							</div>
						</div>
						<div id="collapse<?php echo $doctor->doctor_id ; ?>" class="panel-collapse collapse">
							<div class="panel-body">
							
									<div class="col-md-12 doctor-description">							
										<div class="col-md-6">											
											<p>New Visit Fee: <?php echo $doctor->doctors_chambers_new_visit ; ?></p>
											<p>Revisit Fee: <?php echo $doctor->doctors_chambers_re_visit ; ?></p>
															
										</div>
										
										<div class="col-md-6">
										<p>Phone: <?php echo $doctor->doctor_phone; ?></p>
											<p>Email: <?php echo $doctor->doctor_email; ?></p>
											<p>Call/SMS Appointment: <?php echo $doctor->doctors_chambers_call_for_apointment; ?></p>
											<p>Website: <?php echo $doctor->doctor_website ; ?></p>
										</div>
									</div>
							
							
							
							   <table border="1" style="width:100%">
								  <tr>
									<td></td>
									<td><?php echo $doctor->doctors_chamber_address_1 ; ?></td>		
									<td><?php echo $doctor->doctors_chamber_address_2 ; ?></td>		
									<td><?php echo $doctor->doctors_chamber_address_3 ; ?></td>						
								  </tr> 
								  
								  <tr>
									<td>Saturday</td>
									<td><?php echo $doctor->doctors_chambers_time_11; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_12; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_13; ?></td>
								  </tr>
								  <tr>
									<td>Sunday</td>
									<td><?php echo $doctor->doctors_chambers_time_21; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_22; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_23; ?></td>
								  </tr>
								  <tr>
									<td>Monday</td>
									<td><?php echo $doctor->doctors_chambers_time_31; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_32; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_33; ?></td>
								  </tr>
								  <tr>
									<td>Tuesday</td>
									<td><?php echo $doctor->doctors_chambers_time_41; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_42; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_43; ?></td>
								  </tr> 
								  
								  <tr>
									<td>Wednesday</td>
									<td><?php echo $doctor->doctors_chambers_time_51; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_52; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_53; ?></td>
								  </tr>
								  
								  <tr>
									<td>Thursday</td>
									<td><?php echo $doctor->doctors_chambers_time_61; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_62; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_63; ?></td>
								  </tr>
								  
								  <tr>
								  <td>Friday</td>
									<td><?php echo $doctor->doctors_chambers_time_71; ?></td>		
									<td><?php echo $doctor->doctors_chambers_time_72; ?></td>
									<td><?php echo $doctor->doctors_chambers_time_73; ?></td>
								  </tr>
								  
								</table>
								<?php if($this->session->userdata('user_id')) { ?>
								<h4>Click To View RSB History<sup>(by admin)</sup></h4>
								<table border="1" style="width:100%">
								  <tr>								
									<td>Date</td>		
									<td>Descriptin</td>		
									<td>RSB Points</td>						
								  </tr> 
								  
								  <tr>
									<td>(+Add New Field by Admin)</td>
									<td>+Add New Field by Admin)</td>		
									<td>+Add New Field by Admin)</td>								
								  </tr>						  
								</table>
								<?php }?>  
							</div>
						</div>
					</div>
				</div>	
			<?php } ?>
				</div>
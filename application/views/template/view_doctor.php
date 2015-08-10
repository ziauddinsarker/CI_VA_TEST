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
				
			<?php foreach($all_doctors as $product){?>	
					<div class="panel-group" id="accordion">
	
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $product->doctor_id ; ?>">                        
									<h4><?php echo $product->doctor_name ; ?> 
									
									
									<sup>		
									<?php foreach($doctors_rating as $doc_rating){?>							
										<?php echo $doc_rating->RSB;?> RSB (Auto add from history update by admin)
									<?php } ?>
									<sup></h4>
									<img src="<?php echo base_url("assets/images/avatar.png"); ?>" alt="" height="100" width="100"/>
									<p>Title/Degree : <?php echo $product->doctor_title ; ?></p>
									<p>Specialist: Cardiologist</p>
								</div>	
							</div>
						</div>
						<div id="collapse<?php echo $product->doctor_id ; ?>" class="panel-collapse collapse">
							<div class="panel-body">
							
									<div class="col-md-12 doctor-description">							
										<div class="col-md-6">
											
											<p>New Visit Fee: 500</p>
											<p>Revisit Fee: 300</p>
															
										</div>
										
										<div class="col-md-6">
										<p>Phone: <?php echo $product->doctor_phone ; ?></p>
											<p>Email: <?php echo $product->doctor_title ; ?></p>
											<p>Call/SMS Appointment: 01720223388</p>
											<p>Website: www.example.com</p>
										</div>
									</div>
							
							
							
							   <table border="1" style="width:100%">
								  <tr>
									<td></td>
									<td>Address 1</td>		
									<td>Address 2</td>		
									<td>Address 3</td>						
								  </tr> 
								  
								  <tr>
									<td>Saturday</td>
									<td>4:30PM - 10PM</td>		
									<td></td>
									<td></td>
								  </tr>
								  <tr>
									<td>Sunday</td>
									<td></td>		
									<td></td>
									<td>4:30PM - 10PM</td>
								  </tr>
								  <tr>
									<td>Monday</td>
									<td>4:30PM - 10PM</td>		
									<td></td>
									<td></td>
								  </tr>
								  <tr>
									<td>Tuesday</td>
									<td></td>		
									<td></td>
									<td>4:30PM - 10PM</td>
								  </tr> 
								  
								  <tr>
									<td>Wednesday</td>
									<td></td>		
									<td>4:30PM - 10PM</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Thursday</td>
									<td></td>		
									<td>4:30PM - 10PM</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Friday</td>
									<td></td>		
									<td>4:30PM - 10PM</td>
									<td></td>
								  </tr>
								  
								</table>
								
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
							</div>
						</div>
					</div>
				</div>	
			<?php } ?>
				</div>
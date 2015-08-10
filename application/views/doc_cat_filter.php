<?php foreach ($doctor_list_from_doctor as $key => $product) { ?>
<!--Doctors Details-->

	<div class="panel-group" id="accordion">
	
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <div data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $product->doctor_id ; ?>">                        
						<h4><?php echo $product->doctor_name ; ?> <sup>0 RSB (Auto add from history update by admin)<sup></h4>
						<img src="" alt="" height="200" width="200"/>
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
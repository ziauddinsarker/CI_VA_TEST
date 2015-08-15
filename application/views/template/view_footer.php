</div>
    
				</article>
				
				<article class="row all-top">
					<div class="col-md-4 top-pharmacist">
						<h3>Top Pharmacists</h3>
						<ul>
							<li>Pharmacist 1<sup>* 0 RSB (Rating on Social Branding)</sup></li>
							<li>Pharmacist 2<sup>* 2 RSB (Rating on Social Branding)</sup></li>
							<li>Pharmacist 3<sup>* 10 RSB (Rating on Social Branding)</sup></li>
							<li>Pharmacist 4<sup>* 0 RSB (Rating on Social Branding)</sup></li>
						</ul>
					</div>
						
					<div class="col-md-4 top-doctor">
						<h3>Top Doctor</h3>
						<ul>
						<?php foreach($get_top_ten_doctor as $top_doctor){?>
							<li><a href=""><?php echo $top_doctor->doctor_name ; ?><sup>* <?php echo $top_doctor->RSB;?> RSB</sup></a></li>		
						
						<?php } ?>
						</ul>
					</div>
						
					<div class="col-md-4 top-company">
						<h3>Top Business</h3>
						<ul>
							<li>Business 1<sup>* 0 RSB (Rating on Social Branding)</sup></li>
							<li>Business 2<sup>* 2 RSB (Rating on Social Branding)</sup></li>
							<li>Business 3<sup>* 10 RSB (Rating on Social Branding)</sup></li>
							<li>Business 4<sup>* 0 RSB (Rating on Social Branding)</sup></li>
						</ul>
					</div>
						
				</article>
				
				
				<article>
					<div class="slider1">
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/nuvista.png"></div>
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/nuvista.png"></div>
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/nuvista.png"></div>
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/nuvista.png"></div>
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/nuvista.png"></div>
					  <div class="slide"><img src="<?php echo base_url(); ?>assets/images/Square.png"></div>
					</div>
				</article>
				
				
				
			</section>
		</div>

	 	<!--End Container -->	
		<!--Footer Start Here -->

	</div>
	<footer id="footer">
      <div class="container">
	  <!--
		<div class="row">
			<div class="col-md-4">
				<h5>Footer 1</h5>
			</div>
			
			<div class="col-md-4">
				<h5>Footer 2</h5>
			</div>
			
			<div class="col-md-4">
				<h5>Footer 3</h5>
			</div>
		</div>
		-->
		<div class="row">		
			<div class="col-md-6 footer-navigation">

				<!--			
				<nav>
					<a href="#">About Us</a>		
					<a href="#">Legal</a>		
					<a href="#">Copyright</a>			
					<a>Contact Us</a>			
					<a>Report an Error</a>	
				</nav>
				-->
			 </div>
			<div class="col-md-6 copyright">	
				<p>&copy; Bhalo-Aachee - 2015. All Rights Reserved.</p>
			</div>
      </div>
    </footer>
	  <!--Footer Ends Here -->	 
	  
	  <!--include jquery library-->
	<!-- 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
        <script>window.jQuery || document.write('<script src="<?php //echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"><\/script>')</script>
-->
		
		<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/simple-expand.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>
		
		<script src="<?php echo base_url('assets/js/typeahead.bundle.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/validator.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>
		
		
		<script src="<?php echo base_url('assets/js/bxslider/jquery.bxslider.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/hogan-3.0.2.min.js'); ?>"></script>
		
		<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
		
		<!-- Get More doctor  -->
		<script>
			/* function filter(type) {
				var url = "http://127.0.0.1/CI_VA/home/give_more_doctor";
				var postdata = {type: type};
				$.post(url, postdata, function(data) {
					var results = JSON.parse(data);
					$('#more-doctor-content-container').html(results);
				});
			}

			filter("All"); //runs at load

			$('#filters input').click(function() {
				var type = $(this).val();
				filter(type);
			}); */
		</script>
		
		
		<script>
			/* $("#doc-description").click(function () {

				$header = $(this);
				//getting the next element
				$content = $header.next();
				//open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
				$content.slideToggle(500, function () {
					//execute this after slideToggle is done
					//change text of header based on visibility of content div
					$header.text(function () {
						//change text based on condition
						return $content.is(":visible") ? "Collapse" : "Expand";
					});
				});

			}); */
		</script>
		
		
	
	
		<script type="text/javascript">
		//Get Doctors By Category
			function getHealthcareByCat(catId){     
				var currentValue = catId.value;	
							
				
				  $.ajax({
						type: "POST",
						url: "<?php echo site_url('home/get_com_by_cat') ?>",
						data: { data: currentValue },
						dataType:'json',
						success: function(result){
				
						document.getElementById("healthcare_content").innerHTML = "";
						var company = $("#healthcare_content");


						// here is a simpe way
						$.each(result, function (i, me) {
							// create a p tag
							// insert it to the 
							// html element with an id of load_company_name
							var div = $('<div/>');
								// you can access the current iterate element
								// of the array
								// me = current iterated object
								// you can access its property using
								// me.company_name or me['company_name']
								//company.innerHTML = company.innerHTML('<p>' + this.company_name + '</p>');
								//company.innerHTML('<p>Company Name: ' + me.company_name + '</p>');
								 div.html('<div class="panel-group" id="accordion">'+					
											'<div class="panel panel-default">'+
											'<div class="panel-heading">'+
												'<div class="panel-title">'+
													'<div data-toggle="collapse" data-parent="#accordion" href="#collapse'+ me.company_id+'">' +                       
														'<h4>'+ me.company_name +' <sup>0 RSB (Auto add from history update by admin)<sup></h4>'+
														
														'<p>About (facilities) : '+ me.company_description +'</p>'+
													'</div>'+
												'</div>'+
											'</div>'+
											'<div id="collapse'+ me.company_id+'" class="panel-collapse collapse">'+
												'<div class="panel-body">'+
												
														'<div class="col-md-12 doctor-description">'+							
															
															
															'<div class="col-md-6">'+
															'<p>Phone: '+ me.company_mobile +'</p>'+
																'<p>Email: '+ me.company_email +'</p>'+
																'<p>Address: '+ me.company_address +'</p>'+
																'<p>Website: '+ me.company_website +'</p>'+
															'</div>'+
														'</div>'+
													'<h4>Click To View RSB History<sup>(by admin)</sup></h4>'+
													'<table border="1" style="width:100%">'+
													  '<tr>'+					
														'<td>Date</td>'+		
														'<td>Descriptin</td>'+		
														'<td>RSB Points</td>'+						
													 '</tr>'+
													  
													  '<tr>'+
														'<td>(+Add New Field by Admin)</td>'+
														'<td>+Add New Field by Admin)</td>'+		
														'<td>+Add New Field by Admin)</td>'+								
													  '</tr>'+						  
													'</table>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>');
								company.prepend(div); 
								
						});
					},
						
						/* success: function(result){
							
							
							document.getElementById("healthcare_content").innerHTML = "";
							var com = $("#healthcare_content");
							//var company = $("#load_company_name");
							//var com = document.getElementById('healthcare_content');
							// here is a simpe way
							
							$.each(result, function (i, me) {
								// create a p tag
								var p = $('<p/>');
								
									//company.innerHTML('<p>Company Name: ' + this.company_name + '</p>' ) ;
									com.innerHTML = com.innerHTML + '<p>' + this.company_name + '</p>';
							});
						}, */
						error: function() {
							alert('Not OKay');
						}
					
					});
				}
				
		
		
		/* // <![CDATA[
			$(document).ready(function(){       
				$('#get_doctor_cat').change(function(){
					$("#classes > option").remove();
					var grade_id = $('#grades').val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>home/getDoctorsFromCategory/",
						data: {gradeid:grade_id},
						success: function(classes)
						{
							$.each(classes,function(id,name)
							{
								var opt = $('<option />');
								opt.val(id);
								opt.text(name);
								$('#classes').append(opt);
							});
						}        
					});

				});
			});
			// ]]> */
		</script>
    </body>
</html>
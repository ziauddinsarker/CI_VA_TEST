</div>
    
				</article>
				
				<article class="row">
				<div class="col-md-4">
					<h3>Top Pharmacists</h3>
					<ul>
						<li>Pharmacist 1<sup>* 0 RSB (Rating on Social Branding)</sup></li>
						<li>Pharmacist 2<sup>* 2 RSB (Rating on Social Branding)</sup></li>
						<li>Pharmacist 3<sup>* 10 RSB (Rating on Social Branding)</sup></li>
						<li>Pharmacist 4<sup>* 0 RSB (Rating on Social Branding)</sup></li>
					</ul>
				</div>
					
				<div class="col-md-4">
					<h3>Top Doctor</h3>
					<ul>
						<li>Doctor 1<sup>* 0 RSB (Rating on Social Branding)</sup></li>
						<li>Doctor 2<sup>* 2 RSB (Rating on Social Branding)</sup></li>
						<li>Doctor 3<sup>* 10 RSB (Rating on Social Branding)</sup></li>
						<li>Doctor 4<sup>* 0 RSB (Rating on Social Branding)</sup></li>
					</ul>
				</div>
					
				<div class="col-md-4">
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
							var p = $('<p/>');
								// you can access the current iterate element
								// of the array
								// me = current iterated object
								// you can access its property using
								// me.company_name or me['company_name']
								//company.innerHTML = company.innerHTML('<p>' + this.company_name + '</p>');
								//company.innerHTML('<p>Company Name: ' + me.company_name + '</p>');
								 p.html('Company: ' + me.company_name);
								company.prepend(p); 
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
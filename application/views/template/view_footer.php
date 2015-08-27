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
		<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/hogan-3.0.2.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/typeahead.jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bloodhound.min.js'); ?>"></script>
		<?php 
		/*
		<script src="<?php echo base_url('assets/js/simple-expand.min.js'); ?>"></script>	
		<script src="<?php echo base_url('assets/js/validator.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>

		<script src="<?php echo base_url('assets/js/typeahead.bundle.min.js'); ?>"></script>

		*/?>
		
		<script src="<?php echo base_url('assets/js/bxslider/jquery.bxslider.min.js'); ?>"></script>



<!--		<script src="--><?php ////echo base_url('assets/js/main.js'); ?><!--"></script>-->

		<script>

			var brands = new Bloodhound({
				//datumTokenizer: Bloodhound.tokenizers.whitespace,
				datumTokenizer: function(d) {
					return Bloodhound.tokenizers.whitespace(d.tokens.join(' '));
				},
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				prefetch: '<?php echo base_url().'search/get_brand_form_strength'; ?>',
				remote: {
					url: '<?php echo base_url().'search/get_brand_form_strength?name=%QUERY' ?>',
					wildcard: '%QUERY'
			}
			});
			brands.initialize();
			$('.table-input .typeahead').typeahead(null, {
				name: 'typeahead',
				valueKey:'brand_name',
				//source: brands,
				source: brands.ttAdapter(),
				template: [
					'<p class="course_area">{{brand_name}}</p>',
					'<p class="course_title">{{brand_strength_name}}</p>',
					'<p class="course_description">{{brand_dosage_form_name}}</p>'
				].join(''),
				engine: Hogan,

			});
		</script>




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
	/* 			
		 
		// Instantiate the Bloodhound suggestion engine
		var movies = new Bloodhound({
			datumTokenizer: function (datum) {
				return Bloodhound.tokenizers.whitespace(datum.brand_name);
			},
			queryTokenizer: Bloodhound.tokenizers.whitespace,
			remote: {
				url: 'http://127.0.0.1/CI_VA/search/get_brand_form_strength',
				filter: function (movies) {
					// Map the remote source JSON array to a JavaScript object array
					return $.map(movies.results, function (movie) {
						return {
							value: movie.brand_name
						};
					});
				}
			}
		});

		// Initialize the Bloodhound suggestion engine
		movies.initialize();

		// Instantiate the Typeahead UI
		$('.typeahead').typeahead(null, {
			displayKey: 'value',
			source: movies.ttAdapter()
		}); 
		
		 */
		
		
		 
		
		
		/* //Search Branding
			//This is for search option
	 	$(document).ready(function(){
		
			$('input.typeahead').typeahead({
				name: 'typeahead',
				//header:'<h2>Name</h2>',
				valueKey: 'name',
				prefetch: 'http://127.0.0.1/CI_VA/search/get_brand_form_strength',
				//minLength: 3,
				template: '<p>{{brand_name}} - {{brand_dosage_form_name}} - ({{brand_strength_name}})</p>',
				engine: Hogan,
				remote: 'http://127.0.0.1/CI_VA/search/get_brand_form_strength?name=',
				limit : 10
			}).on('typeahead:selected', function($e, datum) {  // suggestion selected
			
			//.on('typeahead:selected',function(event,suggestions){	$myTextarea.append(suggestions.value, ' ');$('.typeahead').val('');});
			
					 var brandname = datum['brand_name'];
					 var strengthname = datum['brand_strength_name'];
					 var formname = datum['brand_dosage_form_name'];
			
					  console.log('Brand: ' + brandname + 'Strength:'+ strengthname + 'Form:'+ formname );
					/*   
					  var brand = datum['brand_name'];
					  document.write(brand);
		  });
		}); 
		  */
		 
		 
		 
		 
		 
		
		//Get Districts from Division
		function getDistrictFromDivision(divisionId){     
				var currentValue = divisionId.value;					
				  $.ajax({
						type: "POST",
						url: "<?php echo site_url('home/get_dist_from_division') ?>",
						data: { data: currentValue },
						dataType:'json',
						success: function(result){
				
						document.getElementById("location").innerHTML = "";
						var location = $("#location");
						
						// here is a simpe way
						$.each(result, function (i, dist) {
					
							var div = $('<division/>');
							
								 div.html('<div class="btn-group"  id="district">'+
								 '<label class="btn btn-primary">'+
								'<input type="radio" name="division" class="track-order-change" id="' + dist.district_id + '" value="' + dist.district_name + '" onclick="getThanaFromDistrict(this)" >'+ dist.district_name +''+
								'</label>' );
								location.prepend(div); 
								
						});
					},
						error: function() {
							alert('Not OKay');
						}
					
					});
				}
				
				
				
				//Get Thana from District
				function getThanaFromDistrict(distId){     
						var currentValue = distId.value;					
						  $.ajax({
								type: "POST",
								url: "<?php echo site_url('home/get_thana_from_district') ?>",
								data: { data: currentValue },
								dataType:'json',
								success: function(result){
						
								document.getElementById("location").innerHTML = "";
								var location = $("#location");
								
								// here is a simpe way
								$.each(result, function (i, thana) {
							
									var div = $('<thana/>');
									
										 div.html('<div class="btn-group" id="thana">'+
										 '<label class="btn btn-primary">'+
										'<input type="radio" name="division" class="track-order-change" id="' + thana.thana_id + '" value="' + thana.thana_name + '" onclick="getShopBasedOnThanaAndBrand(this)">'+ thana.thana_name +''+
										'</label>' );
										location.prepend(div); 
										
								});
							},
								error: function() {
									alert('Not OKay');
								}
							
							});
						}
		
		
				
				//Get shop based on thana and brand
				function getShopBasedOnThanaAndBrand(thanaId){     
						var thanaValue = thanaId.value;	
						var brandValue = document.getElementById("name").value;
							
						console.log(thanaValue);
					
						  $.ajax({
								type: "POST",
								url: "<?php echo site_url('home/get_shop_based_on_thana_and_brand') ?>",
								data: { thana: thanaValue, brand: brandValue  },
								dataType:'json',
								success: function(result){
						
								document.getElementById("shop-result").innerHTML = "";
								var shop = $("#shop-result");
								
								// here is a simpe way
								$.each(result, function (i, brand) {
							
									var div = $('<div/>');
									
										 div.html('<article class="row medicine-description">' +
													'<div class="col-md-4 medicine-desc-image">' +
														'<img class="img-responsive" src="http://127.0.0.1/CI_VA/assets/images/naftin.jpg" alt="" />' +
													'</div>' +
													'<div class="col-md-4">' +							
														'<h3>Brand Name</h3>' +
														'<a href="#">Ace</a> ' +
														'<span class="medicine-result-generic">(<a href="#" id="genericname">+generic+</a>)</span>'+
																					
													'</div>' +							
													'<div class="col-md-4">' +							
														'<h4>Packaging</h4>' +
														'<p>Dosage Form: Syrup<p>' +
														'<p>Strength: 50mg/ml<p>' +
														'<p>Amount: 100ml<p>' +
														'<p>Piece(s): 1<p>' +
														'<p>Manufacturer: Square Pharmacuticals<p>' +
														'<p>Retail price(+/-):100 BDT</p>' +								
													'</div>' +
													'</article>' +
													
													
						'<article class="row">' +
							'<div class="col-md-4 col-md-offset-1 shop-single">' +
							'<div>shopname: ' + brand.shop_name + '</div>'+
							
							'</div>' +
							
							'<div class="col-md-7 medicine-price-graph" id="price-filter">' +								
								'<div>' +
											'<h5><a href="#">Brand Name</a><span class="brand-rating"> <a href="">(2)</a></span>' +
											'<br/><a href="#">Company Name</a><span class=" brand-rating company-rating"> <a href="#">(2)</a></span></h5>' +
											'<div class="progress">' +
											'<div class="progress-bar" style="width:20%">' +
											'</div>' +
											'<span>$row["brand_name"]</span>'+									
										'</div>' +
									'</div>' +
							 '</div>' +	
						 '</article>' );
										shop.prepend(div); 
										
								});
							},
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
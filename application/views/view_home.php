
		
			<section class="shop-result medicine-result">
				
			<article class="row">					
			
            <div role="tabpanel" id="main-tab">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
			  <li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
              <li role="presentation" class="active"><a href="#price" aria-controls="home" role="tab" data-toggle="tab">Find Medicine Price</a></li>
              <li role="presentation"><a href="#events" aria-controls="profile" role="tab" data-toggle="tab">Free Social Event</a></li>
              <li role="presentation"><a href="#top-rating" aria-controls="profile" role="tab" data-toggle="tab">Top Ratings</a></li>			  
              <li role="presentation"><a href="#discount" aria-controls="messages" role="tab" data-toggle="tab">Discount Offer</a></li>
              <li role="presentation"><a href="#doctor" aria-controls="messages" role="tab" data-toggle="tab">Find Doctors</a></li>
              <li role="presentation"><a href="#healthcare" aria-controls="messages" role="tab" data-toggle="tab">Healthcare Centers</a></li>
              <li role="presentation"><a href="#blog" aria-controls="settings" role="tab" data-toggle="tab">Review & News</a></li>
              <li role="presentation"><a href="#contact" aria-controls="settings" role="tab" data-toggle="tab">Contact Us</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="about">
			<div class="row">
				<div class="col-md-6 about-page">
				<h3>What we do:</h3>
				<p>Our idea is to mix “Healthcare” and “Social branding” together to bring free healthcare services to the people. We also provide graphical information on medicine prices that help people to compare prices and reduce their cost of treatment. </p>
				<h3>What Social Branding is:</h3>
				<p>Here we define social branding as: what roles an entity or company would play through social media, social events or campaigns in people’s lives to increase their brand value. </p>
				<h3>How we work with “Healthcare” and “Social branding” together: </h3>
				<p>We work with any entity or company who are related to healthcare industry. Our endeavor is to search, recognise and rate the voluntary services of them in healthcare and ultimately bring forward healthcare services to the people at free of charge. We invite and encourage any hospital, clinic, pharmaceutical company, medicine shop, fitness center, therapy center, medical-diagnostic center, NGO, pharmacist, dentist, dietician and doctor to contribute in healthcare for the people as a part of their social responsibility to increase their rating on social branding. 
				Each time any entity or company arrange any social event to contribute in healthcare and inform us with evidence, we recognise, make rating and publish that on our site so that people can know their rating on social branding. We give a rating of 10 points for every hour they voluntarily spend for healthcare contribution for the people of the society.</p>
				<h3>What you would find here:</h3>
				
				<ul>
					<li>Information on the prices of medicines, price-comparison graph, and healthcare offers or discounts that are available in Bangladesh.</li>
					<li>Free healthcare or medical consultancy services form the social events whenever arranged by any entity or company.</li>
					<li>Directories and evidence based ratings on social branding for the entities or companies who are related to healthcare industry.</li>
					<li>Blogs, reviews, articles, disease FAQs, and news on healthcare.</li>
				</ul>
				
				<h3>The reasons of our activities are:</h3>
				<ul>
					<li>To help the people to reduce their cost of treatment by comparing the prices of the same drugs from different companies.</li>
					<li>To divert some of the spending on branding by the healthcare companies to social branding to bring free healthcare services to the people.</li>
					<li>To show who has more voluntary contributions in healthcare.</li>
					<li>To give options to the people for choosing an alternative entity or company based on their rating on social branding caused by their free healthcare services.</li>
				</ul>
				</div>
				
				<div class="col-md-6 about-page">
					<h3>Who we are:</h3>
					<p>We began this startup “Bhalo-Achee.com” in 2015 as a team. Our team members are of different professional backgrounds who opt to work relentlessly for healthcare for the general people. But yet we look and ask for interested people or partners to make them join into our team to devise more ideas and bring more services at free of charge for the welfare of the people.</p>
					<h3>Background behind the idea of mixing “Healthcare” and “Social branding” together:</h3>
					<p>Many studies suggest that “medical representatives (MR)” used for the pharmaceutical marketing and “Low health knowledge” of patients may make a doctor biased in writing “drug prescriptions” which may cause higher cost of treatment as the exact same medicine in a prescription may have lower price from other manufacturing companies. Therefore, as many people in our country are not aware of how the prices vary for the exact same medicine, we have become interested to bring a graph of prices for the same drugs so that the people can compare the prices and make their own choice in buying the exact same drug from the other companies to reduce their cost of treatment.</p>
					<p>Also we think, in case, when a company offers higher price for an exact same drug, people may feel interested to make their own choice in buying that medicine based on the rating on “social branding” of the company caused by their free healthcare services. In this way, we think we can help the people to reduce their higher cost of treatment in general that may occur because of the influence of “medical representatives (MR)” of the pharmaceutical companies and “Low health knowledge” of the patients.</p>
					<h3>Our vision:</h3>
					<p>To raise the spirit of healthcare contribution among the entities or companies operating in healthcare industry where they would compete to get higher rating on their social branding by bringing healthcare services to the people at free of charge and finally make the entities or companies and the people mutually benefitted.</p>
					<h3>Legal notice:</h3>
					<p>All the given information about the drugs herein on Bhalo-Achee.com are collected from different reliable sources and intended for educational purpose only. No one should do any medical practice based on these given information. In addition, the database can sometimes contain errors. Bhalo-Achee.com does not provide any medical advice or treatment. </p>
					<h3>Copyright:</h3>
					<p>We reserve no rights to spread the knowledge among the people feely, however, we request you to use proper citation when you use any content which is originally published on www.bhalo-achee.com.</p>

				</div>
			</div>
						
			</div>
                <div role="tabpanel" class="tab-pane active" id="price">
                    <div class="result-medicine" id="shop-result" >
						
						<article class="row">
							<form class="form-inline large-search form-search form-emphasis" role="form" method="post"  action="getshop.php">
								<div class="col-md-6 col-md-offset-2">
									<div class="form-group table-input">
									   <label class="sr-only" for="name">Tablet Name</label>
									   <input type="text" class="form-control typeahead tt-query" autocomplete="off" spellcheck="false" name="name" id="name" placeholder="Enter Brand Name or Generic Name">
									</div>
								</div>	
							</form>
						</article>
					
						<article class="row" id="div-dis-tha">
							<div class="col-md-1 col-md-offset-2">
							<h4>Division</h4>
							</div>
								<div class="col-md-7">
								
									<div class="btn-group" data-toggle="buttons" id="division"> 
											<?php
										 /*
												while ($row = mysql_fetch_array($division)){ 
												$divsion_name = $row["division_name"];										
												echo "<label class=\"btn btn-primary\">";
												echo "<input type=\"radio\" name=\"division\" class=\"track-order-change\" id=". strtolower($divsion_name) ." value=".$row['division_name']." onchange='showDistrict(this.value)'>";
												echo  $divsion_name;
												echo "</label>";
												}

										*/												
											?>
										<!--	
											<label class="btn btn-primary">
											  <input type="radio" name="radios" class="track-order-change" id="chittagong">
											  Chittagong
											</label>
										-->
									</div>
								</div>
						</article>						
					</div>
                </div>
				
				<!--Event Tab-->
              <div role="tabpanel" class="tab-pane" id="events">
			
			  
			  
			  
			  <!-- Events -->
			  <?php
			  /*
				function seoUrl($string) {
					//Lower case everything
					$string = strtolower($string);
					//Make alphanumeric (removes all other characters)
					$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
					//Clean up multiple dashes or whitespaces
					$string = preg_replace("/[\s-]+/", " ", $string);
					//Convert whitespaces and underscore to dash
					$string = preg_replace("/[\s_]/", "-", $string);
					return $string;
				}
			  ?>
			  <?php										
				 	while ($row = mysql_fetch_array($events)){ 
					$events_name = $row["events_name"];	
					$events_time = $row["events_time"];	
					$events_address = $row["events_address"];	
					$events_phone = $row["events_phone"];	
					$events_contact_time = $row["events_contact_time"];	
					$events_email = $row["events_email"];	
					
					$eventid = seoUrl($row["events_name"]);
					
					echo '<div class="row event-single" id="'. $eventid .'">';
					echo '<div class="col-md-12">';
						echo '<h3>' . $events_name . '</h3>';
						echo '<div class="fb-share-button" data-href="http://bhalo-achee.com'. $eventid .'" data-layout="button_count"></div>';
					echo '</div>';
					echo '<div class="col-md-4">';					
						echo '<h5><b>Events Time:</b> ' . $events_time . '</h5>';								
						echo '<h5><b>Phone:</b> ' .  $events_phone . '</h5>';
						echo '<h5><b>Email:</b> ' .  $events_email . '</h5>';					
					echo '</div>';
					echo '<div class="col-md-8">';			
						echo '<h5><b>Contact Time:</b> ' .  $events_contact_time . '</h5>';
						echo '<h5><b>Address:</b> ' .  $events_address  . '</h5>';
						
					 echo '</div>';	
							
				  echo '</div>';
					
					 
					
					}	
*/					
	?>			 
			 
			<!-- All Events -->
			<?php foreach($events as $event){?>
				<div class="row event-single" id="'. $eventid .'">
					<div class="col-md-12">
						<h3><?php echo $event->events_name;?></h3>
						<div class="fb-share-button" data-href="<?php echo site_url();?>"/"<?php echo $event->events_id;?>" data-layout="button_count"></div>
					</div>
					<div class="col-md-4">				
						<h5><b>Events Time:</b> <?php echo $event->events_time;?></h5>							
						<h5><b>Phone: </b><?php echo $event->events_phone;?></h5>
						<h5><b>Email: </b><?php echo $event->events_email;?></h5>					
					</div>
					<div class="col-md-8">			
						<h5><b>Contact Time: </b> <?php echo $event->events_contact_time;?></h5>
						<h5><b>Address: </b><?php echo $event->events_address;?></h5>
					</div>							
				  </div>
			 <?php }?>  
				
			
			  <!-- Events End -->
			  
			  </div>
              <div role="tabpanel" class="tab-pane" id="doctor">
			
				<div class="row">
					<div class="col-md-12">
					<h2>Find Doctors by District
						<div class="btn-group" data-toggle="buttons" id="division"> 
								<?php							
									/* while ($row = mysql_fetch_array($districts)){ 
									$district_name = $row["district_name"];										
									echo "<label class=\"btn btn-primary\">";
									echo "<input type=\"radio\" name=\"district\" class=\"track-order-change \" id=". strtolower($district_name) ." value=".$row['district_name']." onchange='showDistrict(this.value)'>";
									echo  $district_name;
									echo "</label>";
									}		 */							
								?>
			
						</div>
					
					</div>			
				</div>
			  <!-- Doctors -->
			  <h3>Doctor By Category</h3>
			  
			  <?php foreach($events as $event){?>
			  <?php										
					/* while ($row = mysql_fetch_array($doc_category)){ 
					$doc_category_id = $row["doctors_category_id"];	
					$doc_category_name = $row["doctors_category_name"];	
					$doc_count = $row["doctors_count"];	
					
					echo '<div class="row">';
					echo '<div class="col-md-12">';
						echo '<div class="col-md-4">';						
							//echo '<p><a href="' . $doc_category_name . '">' . $doc_category_name . '</a>(' . $doc_count . ')</p>';
							echo '<a href="doctors.php?doctors_category_id='. $doc_category_id.'">' . $doc_category_name . '</a>(' . $doc_count . ')<br />';
						echo '</div>';
					echo '</div>';								
				  echo '</div>';
					}			 */						
				?>
				 <?php }?> 
				<div class="row doctor-ajax">
				
				</div>
				
				
				
				</div>
				
              <div role="tabpanel" class="tab-pane" id="healthcare">
			  
				 <h3>Healthcare Centers</h3>
				 
				
				 <?php foreach($company_category as $company_cat){?>
					<div class="row">
							<div class="col-md-12">
								<div class="col-md-4">						
								 <p><a href="' . $doc_category_name . ' ">doc_category_name</a>(doc_count)</p>
									<a href="healthcare.php?company_cat_id=<?php echo $company_cat->company_id;?>"><?php echo $company_cat->company_name;?></a><br />
								</div>
							</div>								
						  </div>
				<?php }?>  
			  
			  </div>
              <div role="tabpanel" class="tab-pane" id="discount">
					<h3>Find Discount By Category</h3>
					<div class="btn-group" data-toggle="buttons" id="division"> 
					  <?php										
						/* 	while ($row = mysql_fetch_array($company_category)){ 
							$company_cat_id = $row["company_cat_id"];	
							$company_cat_name = $row["company_cat_name"];	
							
							echo "<label class=\"btn btn-primary\">";
							echo "<input type=\"radio\" name=\"district\" class=\"track-order-change \" id=". strtolower($company_cat_name) ." value=".$row['company_cat_name']." onchange='showDistrict(this.value)'>";
							echo  $company_cat_name;
							echo "</label>";

							}		 */							
						?>
					</div>
		<!--Discount---->
		
		
			<h2>Latest Discount </h2>
		
			  <?php		
/* 
			  
					while ($row = mysql_fetch_array($discount)){ 
					$discount_name = $row["discount_name"];				
					$discount_time = $row["discount_time_start"];				
								
					
					$discountid = seoUrl($row["discount_name"]);
					
					echo '<div class="row event-single" id="'. $discountid .'">';
					echo '<div class="col-md-12">';
						echo '<h3>' . $discount_name . '</h3>';
						echo '<div class="fb-share-button" data-href="http://bhalo-achee.com'. $discountid .'" data-layout="button_count"></div>';
					echo '</div>';
					echo '<div class="col-md-4">';					
						echo '<h5><b>Discount starts on:</b> ' . $discount_time . '</h5>';								
									
					echo '</div>';
			
				  echo '</div>';
					
					 
					
					}				 */					
				?>
				
			
			  <!-- Events End -->
			  </div>
              <div role="tabpanel" class="tab-pane" id="top-rating">No Top Rating</div>
			  
              <div role="tabpanel" class="tab-pane" id="blog">
			  
			  <!-- All Blog and News -->
			  <h3>Blog</h3>	
			  
				 <?php foreach($blogs as $blog){?>
					<div class="row">
						<div class="col-md-12">
						<h3><a href="blog-single.php?article_id=<?php echo $blog->blog_id;?>"> <?php echo $blog->blog_title;?></a></h3>
								<p> <?php echo $blog->blog_description;?></p>					    
						</div>								
					</div>
				 <?php }?>  
			 
				
			  </div>
			  <div role="tabpanel" class="tab-pane" id="contact">
			  <!-- Contact Tab -->
				<div class="row">
					<div class="col-md-4">
					<h4>Contact for RSB<h5>(Rating on Social Branding)</h5></h4>
						<form role="form">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="submittext">Submit Text:</label>
								<input type="textarea" class="form-control" id="submittext">
							</div>
							<div class="g-recaptcha" data-sitekey="6LfkZgkTAAAAAD1ji_rJ5623vxgk7-uwVSa2Ik3i"></div>
							  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
					
					<div class="col-md-4"> 
					<h4>Contact for other reasons</h4>
					<form role="form">
						<div class="form-group">
							<label for="subject">Subject:</label>
							<input type="text" class="form-control" id="subject">
						</div>
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email">
						</div>						
						<div class="form-group">
							<label for="phone">Phone Number:</label>
							<input type="text" class="form-control" id="phone">
						</div>
						<div class="form-group">
							<label for="submittext">Submit Text:</label>
							<input type="textarea" class="form-control" id="submittext">
						</div>
						<div class="g-recaptcha" data-sitekey="6LfkZgkTAAAAAD1ji_rJ5623vxgk7-uwVSa2Ik3i"></div>
						  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					
					</div>
					
					<div class="col-md-4">
					<h4>Contact for Advertisement</h4>
						 <form role="form">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="phone">Phone Number:</label>
								<input type="text" class="form-control" id="phone">
							</div>
							<div class="form-group">
								<label for="submittext">Submit Text:</label>
								<input type="textarea" class="form-control" id="submittext">
							</div>
						<div class="g-recaptcha" data-sitekey="6LfkZgkTAAAAAD1ji_rJ5623vxgk7-uwVSa2Ik3i"></div>
							  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			  <!-- Contact Tab -->
				
			  </div>
            </div>

          </div>
    
				</article>
				
				<article>
					<div class="slider1">
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					  <div class="slide"><img src="assets/images/beximco.jpg"></div>
					</div>
				</article>
			</section>
		</div>

	 	<!--End Container -->	
		<!--Footer Start Here -->

	</div>

		
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
			
			  <!-- Events Modal -->
			  <div class="row">
				<!-- Trigger the modal with a button -->
				<button type="button" title="Hooray!" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#myModal">+</button>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					  </div>
					  <div class="modal-body">
						<div class="">
							  <legend>Add New Event</legend>
							<?php
							$attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
							echo form_open("employee/index", $attributes);?>
							<fieldset>

								<div class="form-group">
									<div class="row colbox">

										<div class="col-lg-4 col-sm-4">
											<label for="employeeno" class="control-label">Add New Post</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="employeeno" name="employeeno" placeholder="Enter Title Here" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
											<span class="text-danger"><?php echo form_error('employeeno'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="employeename" class="control-label">Post Content</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="employeename" name="employeename" placeholder="Enter Content Here" type="text" class="form-control"  value="<?php echo set_value('employeename'); ?>" />
											<span class="text-danger"><?php echo form_error('employeename'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
										<input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
										<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Clear" />

										<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

									</div>
								</div>
							</fieldset>
							<?php echo form_close(); ?>
							<?php echo $this->session->flashdata('msg'); ?>
							
						</div>
					  </div>

					</div>

				  </div>
				</div>
				</div>
				
			  </div>
              <div role="tabpanel" class="tab-pane" id="doctor">
			
				<div class="row">
					<div class="col-md-12">
					<h2>Find Doctors by District
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
			  <!-- Doctors -->
			  <h3>Doctor By Category</h3>
			  
				<?php foreach($doctors_category as $category){?>	
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">						
							<p><a href="#"><?php echo $category->doctor_category_name;?></a>(<?php echo $category->doctors_count;?>)</p>							
						</div>
					</div>								
				  </div>

					
				 <?php }?> 
		
				
				</div>
				
              <div role="tabpanel" class="tab-pane" id="healthcare">
			  
				 <h3>Healthcare Centers</h3>
				 
				<?php foreach($companys as $company){?>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-4" id="finalResult">						
								<p><a href="healthcare/index"><?php echo $company->company_name;?></a><br />
							</div>								
						</div>								
					</div>
				 <?php }?> 
				 
			  <div class="row">
				<!-- Trigger the modal with a button -->
				<button type="button" title="Hooray!" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#healthcare-modal">+</button>

				<!-- Modal -->
				<div id="healthcare-modal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					  </div>
					  <div class="modal-body">
						<div class="">
							  <legend>Add New Healthcare</legend>
							<?php echo form_open("home/company");?>
							<fieldset>

								<div class="form-group">
									<div class="row colbox">

										<div class="col-lg-4 col-sm-4">
											<label for="companyname" class="control-label">Company Name</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="companyname" name="companyname" placeholder="companyname" type="text" class="form-control"  value="<?php echo set_value('companyname'); ?>" />
											<span class="text-danger"><?php echo form_error('companyname'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="companyaddress" class="control-label">Company Address</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="companyaddress" name="companyaddress" placeholder="companyaddress" type="text" class="form-control"  value="<?php echo set_value('companyaddress'); ?>" />
											<span class="text-danger"><?php echo form_error('companyaddress'); ?></span>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="companycontact" class="control-label">Company Contact</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="companycontact" name="companycontact" placeholder="companycontact" type="text" class="form-control"  value="<?php echo set_value('companycontact'); ?>" />
											<span class="text-danger"><?php echo form_error('companycontact'); ?></span>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="companybusinesstype" class="control-label">Company Business Type</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="companybusinesstype" name="companybusinesstype" placeholder="companybusinesstype" type="text" class="form-control"  value="<?php echo set_value('companybusinesstype'); ?>" />
											<span class="text-danger"><?php echo form_error('companybusinesstype'); ?></span>
										</div>
									</div>
								</div>
								
								
								<div class="form-group">
									<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
										<input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
										<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Clear" />

										<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

									</div>
								</div>
							</fieldset>
							<?php echo form_close(); ?>
							<?php echo $this->session->flashdata('msg'); ?>
							
						</div>
					  </div>

					</div>

				  </div>
				</div>


				</div>
			  </div>
              <div role="tabpanel" class="tab-pane" id="discount">
					<h3>Find Discount By Category</h3>
					<div class="btn-group" data-toggle="buttons" id="division"> 
						<?php foreach($doctors_category_only as $doc_cat){?>		
							<label class="btn btn-primary">
								<input type="radio" name="doc_category" class="track-order-change" id="<?php echo $doc_cat->doctor_category_name;?>" value="<?php echo $doc_cat->doctor_category_name;?>">
								 <?php echo $doc_cat->doctor_category_name;?>
							</label>			    
						
					 <?php }?>  
					</div>
					
					
		<!--Discount---->
		
			<h2>Latest Discount </h2>
			<?php foreach($all_discount as $discount){?>	
				<div class="row event-single" id="<?php echo $discount->discount_id;?>">
					<div class="col-md-12">
						<h3><?php echo $discount->discount_name;?></h3>
						<div class="fb-share-button" data-href="<?php echo site_url();?>'<?php echo $discount->discount_id;?>" data-layout="button_count"></div>
					</div>
					<div class="col-md-4">					
						<h5><b>Discount starts on:</b> <?php echo $discount->discount_time_start;?></h5>
					</div>
				</div>
		
			<?php }?>  
			  
			
			  <!-- Discount End -->
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
			 
				<div class="row">
				<!-- Trigger the modal with a button -->
				<button type="button" title="Hooray!" class="btn btn-info btn-lg" data-toggle="modal" data-target="#blog-modal">+</button>

				<!-- Blog Modal -->
				<div id="blog-modal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						
					  </div>
					  <div class="modal-body">
						<div class="">
							  <legend>Add New Post</legend>
							
							<fieldset>
							<?= form_open('home/add_new_entry') ?>
								<div class="form-group">
									<div class="row colbox">

										<div class="col-lg-4 col-sm-4">
											<label for="blog_title" class="control-label">Add New Post</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											<input id="blog_title" name="blog_title" placeholder="Enter Title Here" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
											<span class="text-danger"><?php echo form_error('blog_title'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="blog_description" class="control-label">Post Content</label>
										</div>
										<div class="col-lg-8 col-sm-8">
											
											<textarea id="blog_description" name="blog_description" placeholder="Enter Content Here" type="textarea" class="form-control"  value="<?php echo set_value('employeename'); ?>">Enter text here...</textarea>
											
											
											<span class="text-danger"><?php echo form_error('blog_description'); ?></span>
										</div>
									</div>
								</div>
								
								
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											<label for="blog_category" class="control-label">Post Category</label>
										</div>
										<div class="col-lg-8 col-sm-8">									
											<?php
											$attributes = 'class = "form-control" id = "blog_category"';
											echo form_dropdown('blog_category',$blog_category,set_value('blog_category'),$attributes);?>
											<span class="text-danger"><?php echo form_error('blog_category'); ?></span>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-sm-4">
											
										</div>
										<div class="col-lg-8 col-sm-8"><!-- the Submit input field -->
										<input class="btn btn-default" type="submit"  name="submit" value="submit" />
											
										</div>
									</div>
								</div>
								
							</fieldset>
							<?php echo form_close(); ?>
							<?php echo $this->session->flashdata('msg'); ?>
							
						</div>
					  </div>

					</div>

				  </div>
				</div>
				</div>
				
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
<?php foreach ($doctor_list_from_doctor as $key => $product) { ?>
<!--Doctors Details-->
<div class="row single-doctor">
	<div class="doctor-desc">
		<div class="col-md-12 doctor-name">
			<h4><?php echo $product->doctor_name ; ?> <sup>0 RSB (Auto add from history update by admin)<sup></h4>
		</div>
		
		<div class="col-md-12 doctor-description">
			<div class="col-md-4 doctor-image">
				<img src="" alt="" height="200" width="200"/>
			</div>
			
			<div class="col-md-4">
				<p>Title/Degree *: <?php echo $product->doctor_title ; ?></p>
				<p>Specialist*: Cardiologist</p>
				<p>New Visit Fee: 500</p>
				<p>Revisit Fee*: 300</p>
								
			</div>
			
			<div class="col-md-4">
			<p>Phone: <?php echo $product->doctor_phone ; ?></p>
				<p>Email: <?php echo $product->doctor_title ; ?></p>
				<p>Call/SMS Appointment: 01720223388</p>
				<p>Website: www.example.com</p>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 doctor-time">
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
  
 <!--
<div class="expand-container">
    <a class="expander" href="#">click me</a>
    <div class="content">
        <p>Donec porta porttitor tellus sit amet cursus. Morbi nulla odio,
        blandit ac interdum at, consectetur eget purus. Ut cursus rhoncus. <p>
    
        <div class="expand-container">    
            <a class="expander" href="#">click me</a>
            <div class="content">
                <p>Donec porta porttitor tellus sit amet cursus. Morbi nulla odio,
                blandit ac interdum at, consectetur eget purus. Ut cursus rhoncus. <p> 

                <div class="expand-container">    
                    <a class="expander" href="#">click me</a>
                    <div class="content">
                        <p>Donec porta porttitor tellus sit amet cursus. Morbi nulla odio,
                        blandit ac interdum at, consectetur eget purus. Ut cursus rhoncus. <p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  

 
 
 <div id="thumbs">
    <div class="thumb">1
        <div class="more">th1 1111111 Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.<br /> Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.</div>
    </div>
    <div class="thumb">2
        <div class="more">th2 2222222 Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.<br /> Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.</div>
    </div>
    <div class="thumb">3
        <div class="more">th3 3333333 Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.<br /> Fusce turpis lacus, placerat non nibh sed, malesuada placerat justo. Nam et quam eget enim pharetra mattis nec nec diam! Donec arcu lectus, sollicitudin sit amet tempus nec, tristique ac odio. Nunc tristique lectus sit amet leo viverra, vel dignissim ipsum ornare. Ut auctor lacus ac eros tristique, in placerat libero lacinia. Nam lectus ante, congue ac dui a, egestas cursus turpis! Sed eget sagittis erat! Duis lacinia a tellus in dictum. Nunc aliquam vehicula ipsum id tempus.</div>
    </div>

</div>
<div style="clear: both;"></div>



<div style="background-color: #ccc; height: 200px; margin-top: 50px;"></div>
	  -->
<?php } ?>

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
		<script src="<?php echo base_url('assets/js/typeahead.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bxslider/jquery.bxslider.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/hogan-3.0.2.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
		
	<script type="text/javascript">// <![CDATA[
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
		// ]]>
	</script>
    </body>
</html>
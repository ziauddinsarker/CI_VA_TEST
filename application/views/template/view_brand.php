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
					
					<?php foreach($divisions as $division){?>
						<label class="btn btn-primary">
						<input type="radio" name="division" class="track-order-change" id="<?php echo $division->division_name;?>" value="<?php echo $division->division_name;?>" onchange="showDistrict(this.value)">
						<?php echo $division->division_name;?>
						</label>
					<?php }?>
	
					</div>
				</div>
				
				<div id="ajax-content-container"></div>
		</article>						
	</div>

</div>
$(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/autocomplete/GetCountryName",
            data: {
                keyword: $("#country").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['name'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#country').val($(this).text());
    });
});






	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
	
	$('#dist-barisal').hide();
	$('#thana-Barguna').hide();
	//button show hide	
	$('input[name="division"]').change( function() {
		//Dhaka
		if ($('#barisal').is(":checked")){
			$('#dist-barisal').show();		
			$('#division').hide();	
		} else {			
			$('#dist-barisal').collapse('hide');
		}
	});
	
	$('input[name="district"]').change( function() {
		//Dhaka
		if ($('#Barguna').is(":checked")){
			$('#thana-Barguna').show();		
			$('#dist-barisal').hide();
			$('#division').hide();	
		} else {			
			$('#thana-Barguna').collapse('hide');
		}
	});
	
	
	




		$(document).ready(function(){
		  $('.slider1').bxSlider({
			slideWidth: 200,
			minSlides: 2,
			maxSlides: 5,
			slideMargin: 10
		  });
		});

		$(document).ready(function(){
		
			$('input.typeahead').typeahead({
				name: 'typeahead',
				//header:'<h2>Name</h2>',
				valueKey: 'brand_name_fk',
				minLength: 3,
				template: '<p>{{brand_name_fk}} - {{strength_name_fk}} - ({{form_name_fk}})</p>',
				engine: Hogan,
				remote:'db/search.php?key=%QUERY',
				limit : 10
			}).on('typeahead:selected', function($e, datum) {  // suggestion selected
			
			//.on('typeahead:selected',function(event,suggestions){	$myTextarea.append(suggestions.value, ' ');$('.typeahead').val('');});
			
					 var brandname = datum['brand_name_fk'];
					 var strengthname = datum['strength_name_fk'];
					 var formname = datum['form_name_fk'];
			
					  console.log('Brand: ' + brandname + 'Strength:'+ strengthname + 'Form:'+ formname ) ;
					  
					  //var brand = datum['brand_name_fk']);
					  //document.write(brand);
		  });
		});
		
		// - {{strength_name_fk}} - ({{form_name_fk}})

		/*
		function fetchfromMysqlDatabase() {
			  $.ajax({
				type: "GET",
				dataType: "html",
				url: "getrecords.php",
				cache: false,
				beforeSend: function() {
				   $('#res3').html('loading please wait...');
				},
				success: function(htmldata) {
				   $('#res3').html(htmldata);
				}
			  });
			}
*/
	
		/*
		*
		* Show the Districs on the homepage when clicking on the division 
		*
		*/
		
		/*
		function showDistrict(str)
		{
		if (str=="")
		  {
		  document.getElementById("div-dis-tha").innerHTML="";
		  return;
		  } 
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("div-dis-tha").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","db/getdistrict.php?q="+str,true);
		xmlhttp.send();
		}
		
		*/
		
		
		/*
		*
		* Show the Thana on the homepage when clicking on the Districs 
		*
		*/
		/*
		function showThana(str)
		{
			window.str;
			
			
		if (str=="")
		  {
		  document.getElementById("div-dis-tha").innerHTML="";
		  return;
		  } 
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  
		  
		  
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("div-dis-tha").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","db/getthana.php?thana="+str,true);
		xmlhttp.send();
		}
		
		//Show Shop
		function showShop(str)
		{
		if (str=="")
		  {
		  document.getElementById("shop-result").innerHTML="";
		  return;
		  } 			  
		
		// var txt=$('input:text[name=name]').val();
		  var name = document.getElementById("name").value;
		  
		window.thana = str;
		var queryString = "q=" + str + "&name=" + name;
		
		//xmlhttp.open("GET","theme/getmove.php"+queryString,true);
		  
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("shop-result").innerHTML=xmlhttp.responseText;
			}
		  }
		  
		xmlhttp.open("GET","db/getshop.php?"+queryString,true);
		xmlhttp.send();
		}
		

	/*
	$(document).ready(function() {
		var track_load = 0; //total loaded record group(s)
		var loading  = false; //to prevents multipal ajax loads
		var total_groups = <?php echo $total_groups; ?>; //total record group(s)
		
		$('#results').load("db/autoload_process.php", {'group_no':track_load}, function() {track_load++;}); //load first group
		
		$(window).scroll(function() { //detect page scroll
			
			if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
			{
				
				if(track_load <= total_groups && loading==false) //there's more data to load
				{
					loading = true; //prevent further ajax loading
					$('.animation_image').show(); //show loading image
					
					//load data from the server using a HTTP POST request
					$.post('db/autoload_process.php',{'group_no': track_load}, function(data){
										
						$("#results").append(data); //append received data into the element

						//hide loading image
						$('.animation_image').hide(); //hide loading image once data is received
						
						track_load++; //loaded group increment
						loading = false; 
					
					}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
						
						alert(thrownError); //alert with HTTP error
						$('.animation_image').hide(); //hide loading image
						loading = false;
					
					});
					
				}
			}
		});
	});
	*/

	/*
  var busy = false;
  var limit = 10
  var offset = 0;
	var thana = window.str;

  function displayRecords(lim, off) {
	$.ajax({
	  type: "GET",
	  async: false,
	  url: "db/getshoprecords.php",
	  data: "limit=" + lim + "&offset=" + off + "&thana=" + thana,
	  cache: false,
	  beforeSend: function() {
		$("#loader_message").html("").hide();
		$('#loader_image').show();
	  },
	  success: function(html) {
		$("#infinite-result-shop").append(html);
		$('#loader_image').hide();
		if (html == "") {
		  $("#loader_message").html('<button class="btn btn-default" type="button">No more records.</button>').show()
		} else {
		  $("#loader_message").html('<button class="btn btn-default" type="button">Loading please wait...</button>').hide();
		}
		window.busy = false;


	  }
	});
  }

  $(document).ready(function() {
	// start to load the first set of data
	if (busy == false) {
	  busy = true;
	  // start to load the first set of data
	  displayRecords(limit, offset);
	}


	$(window).scroll(function() {
	  // make sure u give the container id of the data to be loaded in.
	  if ($(window).scrollTop() + $(window).height() > $("#infinite-result-shop").height() && !busy) {
		busy = true;
		offset = limit + offset;

		// this is optional just to delay the loading of data
		setTimeout(function() { displayRecords(limit, offset); }, 200);

		// you can remove the above code and can use directly this function
		// displayRecords(limit, offset);

	  }
	});

  });

*/
	

	$('#openBtn').click(function(){
		$('.modal-body').load('/render/62805',function(result){
			$('#myModal').modal({show:true});
		});
	});
		
		
		
		
		
		
		
		
				
						$(window).scroll(function () {        	
							if ($(window).scrollTop() == ( $(document).height() - $(window).height())) {
								loadData();
							}
						});

						function loadData() {
							$.ajax({
								type: "post",
								url: "http://127.0.0.1/CI_VA/home/company_json_array",
								cache: false,				
								data:'',
								success: function(response){
									
									var obj = JSON.parse(response);
									try{
										var str = '';
										var items=[]; 	
										$.each(obj[0], function(i,val){														
												items.push($('<li/>').text(val.company_name));
										});	
										
										$('#finalResult').fadeOut('slow', function() {
											$(this).append(str).fadeIn('slow').fadeIn(3000);
											
											$('#finalResult').css({backgroundColor: ''});
											$('#finalResult').append.apply($('#finalResult'), items);
											
										}).css({backgroundColor: '#D4ED91'});
																
									}catch(e) {		
										alert('Exception while request..');
									}		
								},
								error: function(){						
									alert('Error while request..');
								}
							 });
							

						};

						
						
						
						
						
					
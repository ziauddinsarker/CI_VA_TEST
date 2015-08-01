
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
				
				<?php				
				// display pagination
				
				echo "<p><a href='medicine.php'>View All</a> | <b>View Page:</b> ";
				for ($i = 1; $i <= $total_pages; $i++)
				{
					echo "<a href='medicine.php?page=$i'>$i</a> ";
				}
				echo "</p>";
					
				// display data in table
				echo "<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\"><thead>";
				echo "  <tr>
						<th>Brand Name</th>
						<th>Generic Name</th>
						<th>Company</th>
						<th>Form</th>
						<th>Strength</th>
						<th>Package</th>
						<th>Price</th>
					</tr> 
					</thead>
					<tbody>";

				// loop through results of database query, displaying them in the table	
				for ($i = $start; $i < $end; $i++)
				{
					// make sure that PHP doesn't try to show results that don't exist
					if ($i == $total_results) { break; }
				
					// echo out the contents of each row into a table
					echo "<tr class=\"odd gradeX\">";
					echo '<td>' . mysql_result($result, $i, 'brand_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'generic_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'company_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'form_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'strength_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'packsize_name') . '</td>';
					echo '<td>' . mysql_result($result, $i, 'price') . '</td>';
					echo '<td><a href="edit-medicine.php?brand_strength_form_price_id=' . mysql_result($result, $i, 'brand_strength_form_price_id') . '">Edit</a> | <a href="delete-medicine.php?brand_strength_form_price_id=' . mysql_result($result, $i, 'brand_strength_form_price_id') . '">Delete</a></td>';
					echo "</tr>";
					
				}
				// close table>
				echo "</tbody></table>"; 
				
				// pagination
				
			?>
<p><a href="new.php">Add a new Medicine</a></p>
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
      
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

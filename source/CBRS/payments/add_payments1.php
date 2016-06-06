<!DOCTYPE html >
<html >
   <head>
      <title>Add Payments</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
	  <script type="text/javascript" src="mob.js"></script>
   </head>
   
  <!--Display the details of a relevant reservation ID-->
  
  
   <body>
      <?php include '../adminnavbar.php';?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <h1>
         Add Payments</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <?php
                        if(isset($_POST['find'])){ // if only the "find details" button is cicked ,this code will run
                        	$res_no = $_POST['res_no'];
                        
                        	include '../dbconnect.php';
                        	
                        		//display reservations details in a table
                        
                        		// Select all data , display them in a table//
								
                        		$select = "SELECT * FROM reservation_table WHERE id=$res_no";
                        		$result = mysqli_query($conn, $select);
                        
                        		if (!$result) {
                        		header('Location: sql_error.php');
                        		}
                        		if ( mysqli_num_rows($result) > 0) {
                        
                        		// print table heads//
                        
                        			echo ('<div class="table-responsive"><table border=1 class="table table-bordered" style="text-align: center;">
                        			<thead style="background-color:#e0a839;">
                        			<tr>
                        			<th>Reservation No</th>
                        			<th>Name</th>
                        			<th>NSB ID</th>
                        			<th>NIC NO</th>
                        			<th>Branch</th>
                        			<th>Circuit Bungalow</th>
                        			<th>No.of people</th>
                        			<th>Arrival Date</th>
                        			<th>Arrival Time</th>
                        			<th>Departure Date</th>
                        			<th>Departure Time</th>
                        			<th>Amount</th>
                        			<th>receipt no</th>
                        
                        
                        			</tr></thead>');
                        
                        			echo("<tbody>");
                        
                        			// output data from row by row
									
                        			while($row = mysqli_fetch_assoc($result)) {
                        
                        				echo (
                        				"<tr>
                        					<form method=\"post\" action=\"\">
                        						<td>" . $row["id"] . "</td>
                        						<td>" . $row["Name"] . "</td>
                        						<td>" . $row["NSB_ID"] . "</td>
                        						<td>" . $row["NIC_NO"] . "</td>
                        						<td>" . $row["Branch"] . "</td>
                        						<td>" . $row["Circuit_Bungalow"] . "</td>
                        						<td>" . $row["No_of_People"] . "</td>
                        						<td>" . $row["Arrival_Date"] . "</td>
                        						<td>" . $row["Arrival_Time"] . "</td>
                        						<td>" . $row["Departure_Date"] . "</td>
                        						<td>" . $row["Departure_Time"] . "</td>
                        						<td>" . $row["Amount"] . "</td>
                        	
                        						<td>" . $row["receipt_no"] . "</td>
                        	
                        	
                        					</form>
                        				</tr>");
                        
                        			}
                        
                        		echo ("</tbody></table></div>");
								
                        	/*details table end here*/
							
                        	?>
							
                     <!-- form for updating payments-->
					 
                     <form class="form-horizontal" name="myform" action="add_payments2.php" method="post" >
                        <div class="form-group">
                           <label  class="control-label col-sm-2" >Reservation No:</label>
                           <?php
                              if(isset($_POST['find'])) {
                              $id = $_POST['res_no'];
                              echo $id;
                              	}
                              ?>
                           <input type="hidden" name="reser_no" id="myvalue" value= <?php echo $_POST['res_no']?> >
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2">Invoice No:</label>
                           <input type="text" name="inv_no" pattern="^[0-9]+$" maxlength="10" minlength="10" title="Please Enter A Valid Invoice Number" class="form-inline" id="usr" required>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2">Mobile No:</label>
                           <input type="text" name="mob_no"  title="Please Enter A Valid Phone Number" onchange="mobcheck()" class="form-inline" id="mob" required>
                        </div>
                        <div class="col-sm-offset-2 form-inline" >
                           <button type="submit" name="update" class="btn btn-default"  >Update Payment</button>
                           <a style="padding-left:20px;font-weight:bold;" href="add_payments.php"> GO BACK </a>
                        </div>
                  </div>
                  </form>
                  <!--form ends here -->
				  
                  <?php
                     } 
                     
                     else {
                     	// print this, if no reservations are found 
                     	echo ("<p>\"Sorry there are no Reservations\"</p>");
                     }
                     
                     mysqli_close($conn);
                     
                     }
                     ?>	
               </div>
            </div>
         </div>
         </div>
      </section>
   </body>
</html>
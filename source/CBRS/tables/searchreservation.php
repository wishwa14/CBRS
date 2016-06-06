<!DOCTYPE html >
<html >
   <head>
      <title>Reservation Table</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
      <?php include '../adminnavbar.php';?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <div class="col-sm-3 col-md-3 pull-right">
            <form style="margin-top:20px;" method="post" action="searchreservation.php">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="srch" id="srch-term">
                  <div class="input-group-btn">
                     <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
               </div>
            </form>
         </div>
         <h1>
         Reservation Table</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <?php
                        include '../dbconnect.php';
                        
                        $search=$_POST['srch'];
                        
                        	//display reservations details in a table//
                        
                        	// Select all data , display them in a table//
                        	$select = "SELECT * FROM reservation_table WHERE `Circuit_Bungalow` = '$search' OR NIC_NO='$search' OR id='$search' OR NSB_ID='$search' OR Name='$search' ";
                        	$result = mysqli_query($conn, $select);
                        	
                        	if (!$result) {
                            header('Location: sql_error.php');
                        	}
                        
                        	
                        	if ( mysqli_num_rows($result) > 0) {
                        					
                        	// print table heads//
                        		
                        		echo ('<div class="table-responsive"><table border=1 class="table table-bordered" style="text-align: center;">
                        			<thead style="background-color:#e0a839;">
                        			<tr>
                        				<th>Res. No</th>
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
                        				<th>Cancel</th>
                        				
                        			</tr></thead>');
                        	 
                        	 
                        			echo("<tbody>");
                        			// output data from row by row
                        			while($row = mysqli_fetch_assoc($result)) {
                        				//echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
                        				echo (
                        				"<tr>
                        					<form method=\"post\" action=\"delete_reservation.php\">
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
                        						
                        						<td>
                        							
                        							<input name=\"resid\" type=\"hidden\" id=\"resid\" value=\"".$row["id"]."\"\>
                        							<input class=\"delete1\" name=\"delete\" type=\"submit\" id=\"delete\" value=\"Delete\">
                        						</td>
                        					</form>
                        				</tr>");
                        				
                        			}
                        		
                        		echo ("</tbody></table></div>");
                        		} 
                        
                        		else {
                        			
                        			
                        			echo ("<p class=reservation_table1>\"Sorry there are no Reservations\"</p>");
                        		}
                        
                        mysqli_close($conn);
                        
                        
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>

<!DOCTYPE html >
<html >
   <head>
      <title>Cancellation Table</title>
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
            <form style="margin-top:20px;" method="post" action="searchcancellation.php">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="srch" id="srch-term">
                  <div class="input-group-btn">
                     <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
               </div>
            </form>
         </div>
         <h1>
         Cancellation Table</h2>
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
                        	$select = "SELECT * FROM cancel_reservation WHERE res_id='$search' OR delete_by='$search'";
                        	$result = mysqli_query($conn, $select);
                        	
                        	if (!$result) {
                           header('Location: sql_error.php');
                        	}
                        
                        	
                        	if ( mysqli_num_rows($result) > 0) {
                        					
                        	// print table heads//
                        		
                        		echo ('<div class="table-responsive"><table border=1 class="table table-bordered";>
                        			<thead style="background-color:#e0a839;">
                        			<tr>
                        				<th>Res. No</th>
                        				<th>Reason</th>
                        				<th>Canceled By</th>
                        				<th>Canceled_Date</th>
                        				
                        				
                        			</tr></thead>');
                        	 
                        	 
                        			echo("<tbody>");
                        			// output data from row by row
                        			while($row = mysqli_fetch_assoc($result)) {
                        				//echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
                        				echo (
                        				"<tr>
                        					
                        						<td>" . $row["res_id"] . "</td>
                        						<td>" . $row["comment"] . "</td>
                        						<td>" . $row["delete_by"] . "</td>
                        						<td>" . $row["canceled_date"] . "</td>
                        						
                        						
                        						
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

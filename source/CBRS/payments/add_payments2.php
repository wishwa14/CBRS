<!DOCTYPE html >
<html >
   <head>
      <title>Add Payments</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
   
   <!--Update the reservation table with the correct amount-->
   
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
                        if(isset($_POST['update'])){/* if only the "add payment" button is cicked ,this code will run..
                        	This code updates the table while sending a message */
                        	
                        	$reser_no = $_POST["reser_no"];
                        
                        	$receipt_no = $_POST["inv_no"];
                        
                        	$mo = $_POST["mob_no"];
                        	
                        
                        	include '../dbconnect.php';
                        	//check whether the reservation number given by user is equal to a reservation number in the reservation_table.
                        	$abc1= "SELECT * FROM reservation_table WHERE id = $reser_no";
                        	$result1 = mysqli_query($conn, $abc1);
                        	
                        	if (mysqli_num_rows($result1) > 0) {
                        		
                        		//If the two numbers are same insert the receipt number to the record with the relevent reservation number and bungalow.//
                        		$abc = "UPDATE reservation_table SET receipt_no = '$receipt_no' WHERE id = $reser_no";
                        		$result2 = mysqli_query($conn, $abc);
								
								$ab = "UPDATE temp_reservation_table SET receipt_no = '$receipt_no' WHERE id = $reser_no";
                        		$resul = mysqli_query($conn, $ab);
                        		
                        		$msg="Insert into ozekimessageout(receiver,msg,status) values($mo,'Your Reservation has been confirmed','send')";
                        
                        	mysqli_query($conn,$msg);
                        	}	
                        	else {
                        		//if the two numbers don't match, show an error message.
                        		echo ("<p>wrong reservation number</br><button onclick='history.go(-1);'>Back </button></p>");
                        		
                        	}
                        	
                        	
                        
                        	$select = "SELECT * FROM reservation_table WHERE id=$reser_no";
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
                        		//details table end here//
                        			
                        		echo ("<p>Record has been updated</p>");	
                        		
                        	}
                        	mysqli_close($conn);
                        		
                        }
                        	else {	
                        		    echo ("<p>Error updating record</p>");
                        	}
                        
                        
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
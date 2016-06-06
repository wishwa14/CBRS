<!DOCTYPE html >
<html >
   <head>
      <title>Waiting List</title>
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
            <form style="margin-top:20px;" method="post" action="searchwaiting.php">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="srch" id="srch-term">
                  <div class="input-group-btn">
                     <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
               </div>
            </form>
         </div>
         <h1>
         Waiting List</h2>
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
                        
                        $bun = (isset($_GET['bun']) ? $_GET['bun'] : 'ambalanthota');
                        
                        /* select bungalow control */
                        $select_bun_control = '<form class="form-inline"  role="form"><div class="form-inline"><select class="form-control" name="bun" id="bun">';
                        $bun_list = array("ambalanthota", "anuradhapura", "badulla", "bandarawela", "beliatta", "chawakachcheri", "dambulla", "galle", "kandy", "katharagama", "mahiyangana", "maravila", "nuwaraEliya", "nuwaraEliyaNew");
                        $bun_list_length = count($bun_list);
                        for($x = 0; $x < $bun_list_length; $x++) {
                        	$select_bun_control.= '<option value="'.$bun_list[$x].'"'.($bun_list[$x] != $bun ? '' : ' selected="selected"').'>'.$bun_list[$x].'</option>';
                        }
                        
                        $select_bun_control.= '</select>';
                        
                        $controls = '<form method="get">'.$select_bun_control.'&nbsp;<input class="btn btn-default" type="submit" name="submit" value="Go"  /></form></div></form>';
                        
                        	//display reservations details in a table//
                        
                        	// Select all data , display them in a table//
                        	$select = "SELECT * FROM w_list WHERE `Circuit_Bungalow` = '$bun' ";
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
                        				<th>Mobile</th>
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
                        					<form method=\"post\" action=\"delete_waiting.php\">
                        						<td>" . $row["id"] . "</td>
                        						<td>" . $row["Name"] . "</td>
                        						<td>" . $row["NSB_ID"] . "</td>
                        						<td>" . $row["NIC_NO"] . "</td>
                        						<td>" . $row["Branch"] . "</td>
                        						<td>" . $row["Circuit_Bungalow"] . "</td>
                        						<td>" . $row["mobile"] . "</td>
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
                        		echo '<section style=" padding-top: 10px; padding-bottom: 20px;
                        				padding-left: 0px; padding-right: 105px; "><div class="con1 drop_down_list1">'.$controls.'</div></section>';	
                        		echo ("</tbody></table></div>");
                        		} 
                        
                        		else {
                        			
                        			echo '<section style=" padding-top: 10px; padding-bottom: 20px;
                        			padding-left: 0px; padding-right: 105px; "><div class="con1 drop_down_list1">'.$controls.'</div></section>';	
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
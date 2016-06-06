<!DOCTYPE html >
<html >
   <head>
      <title>Blacklist</title>
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
         <h1>
         Blacklist</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
			
               <!-- Blacklist table starts here-->
			   
               <div class="col-lg-7 col-md-7 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <?php
                        include '../dbconnect.php';
                        
                        
                        	//display reservations details in a table
                        
                        	// Select all data , display them in a table
							
                        	$select = "SELECT * FROM blacklist";
                        	$result = mysqli_query($conn, $select);
                        	
                        	if (!$result) {
                           header('Location: sql_error.php');
                        	}
                        
                        	
                        	if ( mysqli_num_rows($result) > 0) {
                        					
                        	// print table heads
                        		
                        		echo ('<div class="table-responsive"><table border=1 class="table table-bordered" >
                        			<thead style="background-color:#e0a839;">
                        			<tr >
                        				<th>NSB ID</th>
                        				<th>Name</th>
                        				<th>Cancel</th>
                        				
                        				
                        			</tr></thead>');
                        	 
                        	 
                        			echo("<tbody>");
									
                        			// output data from row by row
									
                        			while($row = mysqli_fetch_assoc($result)) {
                        				//echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
                        				echo (
                        				"<tr>
                        					<form method=\"post\" action=\"delete_from_blacklist.php\">
                        						<td>" . $row["nsb_id"] . "</td>
                        						<td>" . $row["name"] . "</td>
                        						<td>
                        							
                        							<input name=\"id\" type=\"hidden\" id=\"id\" value=\"".$row["id"]."\"\>
                        							<input class=\"delete1\" name=\"delete\" type=\"submit\" id=\"delete\" value=\"Delete\">
                        						</td>
                        					</form>	
                        				</tr>");
                        				
                        			}
                        		
                        		echo ("</tbody></table></div>");
                        		} 
                        
                        		else {
                        			
                        			
                        			echo ("<p>Blacklist is empty.</p>");
                        		}
                        
                        		
                        mysqli_close($conn);
                        
                        ?>		
                  </div>
               </div>
               <!-- Blacklist table ends here-->
			   
               <div class="col-lg-5 col-md-5 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 20px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
					 
                     <!-- form for updating the blacklist-->
					 
                     <form class="form-horizontal" name="myform" action="add_to_blacklist.php" method="post" >
                        <div class="form-group">
                           <label class="control-label col-sm-3">NSB ID: </label>
                           <input type="text" name="nsb_id" pattern="^[0-9]+$" maxlength="4" minlength="4" title="Please enter e valid NSB ID" class="form-inline" id="nsb_id" required>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-3">Full Name: </label>
                           <input type="text" name="name" pattern="^[a-zA-Z ]+$"  minlength="8"  title="Please enter a valid full name" class="form-inline " style="width:250px;" id="name" required>
                        </div>
                        <div class="col-sm-offset-3 form-inline" >
                           <button type="submit" name="update" class="btn btn-default"  >Submit</button>
                        </div>
                     </form>
					 
                     <!--form ends here -->
					 
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
<!DOCTYPE html >
<html >
   <head>
      <title>Receipt</title>
   </head>
   <body style="background-color: #FFCC66" >
      <?php include '../navbar1.php'; ?>
      <br>
      <br>
      <div class="row">
         <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <h3>Make Reservation</h3>
               <hr>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <div class="panel panel-info">
                  <div class="panel-heading">Reservtion Receipt</div>
                  <div class="panel-body">
                     <?php
                        //catch the data sent from the reservation form in reservation_details1.php & reservation_details.php //
                        $name= $_POST["name"];                       //Name
                        $nsb_id= $_POST["nsb_id"];                   //NSB ID
                        $nic= $_POST["nic"];                         //NIC NO
                        $branch= $_POST["branch"];                   //Branch
                        $cir_bun= $_POST["cir_bun"];                 //Circuit Bungalow
                        $no_of_people= $_POST["no_of_people"];       //No. of People
                        $mobile=$_POST["contact_no"];
                        $a_date= $_POST["a_date"];                   //Arrival Date
                        $a_time= $_POST["a_time"];                   //Arrival Time
                        $d_date= $_POST["d_date"];                   //Departure Date
                        $d_time= $_POST["d_time"];                   //Departure Time
                        $amount_due =$no_of_people* 25;
                        
                        include '../dbconnect.php';
                        
                        //checking the blacklist
                        $get_id = "SELECT * from blacklist WHERE nsb_id='$nsb_id'";
                        $result1=mysqli_query($conn, $get_id);
                        
                        if (mysqli_num_rows($result1) > 0){
                        	header('Location: blacklist.php');
                        }
                        else{
                        /*sql query to get the details of the reservation, which is equal to $cir_bun(circuit bungalow given by the person who is reserving)*/
                        $get_bun = "SELECT Arrival_date, Arrival_time, Departure_date, Departure_time from reservation_table WHERE Circuit_Bungalow='$cir_bun'";
                        $result = mysqli_query($conn, $get_bun);
                        
                        
                        if (mysqli_num_rows($result) > 0)  {
                        	$state = true;
                        	$x = $a_date;	//arrival date from the reservation form
                        	//echo $x . ' $x <br>';
                        	$y = $d_date;	//departure date from the reservation form
                        	//echo $y . ' $y <br>';
                        	$xt = $a_time;	//arrival time from the reservation form
                        	//echo $xt . ' $xt <br>';
                        	$yt = $d_time;	//departure time from the reservation form
                        	//echo $yt . ' $yt <br>';
                        
                        	while (($db_row = mysqli_fetch_assoc($result)) and ($state)) {
                        
                        		$a = $db_row["Arrival_date"];	//arrival date from the db
                        		//echo $a . ' $a <br>';
                        		$d = $db_row["Departure_date"];	//departure date form the db
                        		//echo $d . ' $d <br>';
                        		$at = $db_row["Arrival_time"];	//arrival time from the db
                        		//echo $at . ' $at <br>';
                        		$dt = $db_row["Departure_time"];	//departure time from the db
                        		//echo $dt . ' $dt <br>';
                        		if ($x == $a) {
                        			$msg = "sorry. on $a $cir_bun bungalow is already reserved.";
                        			//return false;
                        			$state = false;
                        		}
                        		elseif ($x < $a) {
                        			if ($y < $a) {
                        				//echo "okay. you are good to go.";
                        				//return true;
                        				continue;
                        			}
                        			elseif ($y > $a) {
                        				$msg = "sorry. there is an existing reservation from $a to $d";
                        				//return false;
                        				$state = false;
                        			}
                        			else {
                        				//$at_hours = date("H", $at);
                        				if ($at < 11){
                        					$msg = "sorry. an existing guest arrives to the bungalow in the morning on $a";
                        					//return false;
                        					$state = false;
                        				}
                        				else {
                        					//$yt_hours = date("H", $yt);
                        					if ($yt < 11) {
                        						//echo "okay. you are good to go";
                        						//return true;
                        						continue;
                        					}
                        					else {
                        						$msg = "sorry. an existing guest arrives to the bungalow after 11 am on $a.";
                        						//return false;
                        						$state = false;
                        					}
                        				}						
                        			}
                        		}
                        		elseif ($x < $d) {
                        			$msg = "sorry. from $x to $y $cir_bun bungalow is already reserved.";
                        			//return false;
                        			$state = false;
                        		}
                        		else {
                        			if ($x == $d) {
                        				//check $d leaves before 11 am
                        				//$dt_hours = date("H", $dt);	//time that existng guest leaves on $d.
                        				//$xt_hours = date("H", $xt);	//time that new guest hope to arrive on $d.	
                        				if ($dt < 11) {
                        					if ($xt < 11) {
                        						$msg = "sorry. guest leaves at $dt on $d. If you like you can come after 11 a.m.";
                        						//return false;
                        						$state = false;
                        					}
                        					else {
                        						//echo "okay. you are good to go.";
                        						//return true;
                        						continue;
                        					}
                        				}
                        				else {
                        					$msg = "sorry. there is a resevation on $d ";
                        					//return false;
                        					$state = false;
                        				}
                        			}
                        			else {
                        				//echo "okay. you are good to go.";
                        				//return true;
                        				continue;
                        			}
                        		}
                        	}
                        	if ($state == true) {
                        		
                        		include "add_back_pcancel.php";
								
								
                        		
								
								echo "<button class=\"btn btn-info\" onclick=\"myFunction()\">Print Reciept</button>";
								
								echo "<script type='text/javascript' language='javascript'>
											function myFunction() {
											window.print();
                        }
   
										</script>";
                        		
                        		
                        	}
                        	else {
                        		/*sql query to insert reseravation to the waiting list of the circuit bungalow*/
                        		$insert = "INSERT INTO w_list(Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', $amount_due,NOW())";
                        		//$sql1 = "INSERT INTO temp_w_list (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', $amount_due,NOW())";
                        		
								
                        		if (mysqli_query($conn, $insert)) {
                        			//echo "New record created successfully<br>";
                        			$insert_temp_r_table = "INSERT INTO temp_w_list SELECT * FROM w_list WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun'";		
									mysqli_query($conn, $insert_temp_r_table);
                        			/*beginning of paragraph*/
                        		echo "<p class='message_after_adding_reservation'>$msg<br>Your record has been added to the waiting list.<br></p>";
                        			/*end of paragraph*/
                        		}
                         
                        		else {
                        			header ("location:sqlerror.php");
                        		}
                        		
                        	}
                        }
                        else {
                        		
                        		include "add_back_pcancel.php";
								
								echo "<button class=\"btn btn-info\" onclick=\"myFunction()\">Print Reciept</button>";
								
								echo "<script type='text/javascript' language='javascript'>
											function myFunction() {
											window.print();
                        }
   
										</script>";
                        		
                        		
                        }
                        }
                        
                        mysqli_close($conn);
                        ?>
                     
                     <p><a href='registration.php'>Go Back</a></p>
                  </div>
                  <div class="col-md-3"></div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
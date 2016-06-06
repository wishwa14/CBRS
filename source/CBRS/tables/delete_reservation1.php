<?php
   session_start();
   include_once '../class.user.php';
   $user = new User(); $uid = $_SESSION['uid'];
   if (!$user->get_session()){
    header("location:../adminhome.php");
   }
   
   if (isset($_GET['q'])){
    $user->user_logout();
    header("location:../home.php");
    }
   
   ?>
<!DOCTYPE html >
<html >
   <head>
      <title>Delete Reservation</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
      <?php 
         include '../adminnavbar.php'; 
         ?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <h1>
         Delete reservation</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <h3>Reservation has been cancelled.</h3>
                     <?php
                        include '../dbconnect.php';
                        
                        $res_id = $_POST["res_no"];
                        $reason= $_POST["reason"];
                        $name = $user->get_fullname($uid);
                        
                        // checks if the deleted reservation's payment done
						
                        $paid="SELECT * FROM reservation_table WHERE id='$res_id' and receipt_no='Null'";
                        $result6 = mysqli_query($conn,$paid);
                        if (!$result6) {
                            header('Location: sql_error.php');
                        	}
                        if (mysqli_num_rows($result6) ==0) {
                        
                        	echo "<h5>Notice: The amount paid for this reservation will be held back for another journey.</h5>" ;	
                        	
                        }
                        
                        //Insert the details about the cancellation process into the cancel reservation table
						
                        $addreason="INSERT INTO cancel_reservation VALUES ('$res_id','$reason','$name','".date('Y-m-d')."','".date('H:i:s')."')";
                        mysqli_query($conn,$addreason);
                        
                        // get arrival date, departure date, bungalow from the record that is to be deleted.
						
                        $date_range = "SELECT id,Circuit_Bungalow,mobile,Arrival_Date,Departure_Date FROM reservation_table WHERE id = '$res_id' ";
                        $result = mysqli_query($conn, $date_range);
                        $res_row = mysqli_fetch_assoc($result);
                        
                        $id = $res_row["id"];
                        $a_date = $res_row["Arrival_Date"];
                        $d_date = $res_row["Departure_Date"];
                        $bun = $res_row["Circuit_Bungalow"];
                        $mobile = $res_row["mobile"];
                        
                      
                        //send a message to the relevant party mentioning about the cancellation
						
                        $msg="Insert into ozekimessageout(sender,receiver,msg,status) values('$name','$mobile','$reason','send')";
                        mysqli_query($conn,$msg);
						
						//if there is a receipt number add to the paid_cancel table
						$select_receipt_no = "SELECT receipt_no FROM reservation_table WHERE id = '$id'";
						$get_receipt = mysqli_query($conn, $select_receipt_no);
						$receipt = mysqli_fetch_assoc($get_receipt);
						$chk_receipt = $receipt["receipt_no"];
						if ($chk_receipt > 0) {
							$insert_pcancel = "INSERT INTO paid_cancel SELECT NSB_ID, amount, receipt_no FROM reservation_table WHERE id = '$id'";
							mysqli_query($conn, $insert_pcancel);
						}
                        
                        // delete the reservation table record
						
                        $delete_record = "DELETE FROM reservation_table WHERE id='$id'";
                        $result1 = mysqli_query($conn, $delete_record);
                        
                        //get the most relevant w_list record 
						
                        $wlist_record = "SELECT * FROM w_list WHERE Circuit_Bungalow = '$bun' AND (Arrival_Date BETWEEN '$a_date' AND '$d_date' OR Departure_Date BETWEEN '$a_date' AND '$d_date') ORDER BY id LIMIT 1";
                        $result2 = mysqli_query($conn, $wlist_record);
                        
                        
                        if (mysqli_num_rows($result2) == 1) {
                        	
                        	$w_row = mysqli_fetch_assoc($result2);
                        	$w_id = $w_row["id"];
                        	$w_name = $w_row["Name"];
                        	$w_nsb_id = $w_row["NSB_ID"];
                        	$w_nic_no = $w_row["NIC_NO"];
                        	$w_branch = $w_row["Branch"];
                        	$w_bun = $w_row["Circuit_Bungalow"];
                        	$w_mobile = $w_row["mobile"];
                        	$w_no_people = $w_row["No_of_People"];
                        	$w_a_date = $w_row["Arrival_Date"];
                        	$w_a_time = $w_row["Arrival_Time"];
                        	$w_d_date = $w_row["Departure_Date"];
                        	$w_d_time = $w_row["Departure_Time"];
                        	$w_amount = $w_row["Amount"];
                        	
                        	
                        	
                        	//check whether there are any other record in the reservation_table that overplap with the w_list record
							
                        	$check_res_table = "SELECT Arrival_Date,Departure_Date, Circuit_Bungalow FROM reservation_table WHERE Circuit_Bungalow = '$w_bun' AND (Arrival_Date BETWEEN '$w_a_date' AND '$w_d_date' OR Departure_Date BETWEEN '$w_a_date' AND '$w_d_date')";
                        	$result3 = mysqli_query($conn, $check_res_table);
                        	
                        	if (mysqli_num_rows($result3) == Null) /*if there are no overlapping records*/{
                        		//echo "no overlaping records in res_table";
								include "../form/add_back_pcancel_2.php";
								//$update_res_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount) VALUES ('$w_name','$w_nsb_id','$w_nic_no','$w_branch','$w_bun','$w_no_people','$w_a_date','$w_a_time','$w_d_date','$w_d_time','$w_amount')";
                        		//$result4 = mysqli_query($conn, $update_res_table);
                        
                        		$msg1="Insert into ozekimessageout(sender,receiver,msg,status) values('$w_name','$w_mobile','Your Reservation Has been Added To the Reservation Table','send')";
                        		mysqli_query($conn,$msg1);
                        		//delete the waiting list record.
                        		$del_w_list_record = "DELETE FROM w_list WHERE id = '$w_id'";
                        		$result5 = mysqli_query($conn, $del_w_list_record);
                        		
                        	}
                        	else /*there are overlaping records*/{
                        		//echo "there are overlaping records";
                        
                        	}
                        }
                        else {
                        	//echo "no one waited to see this cancellation.";
                        }
                        
                        
                        mysqli_close ($conn);
                        ?>
                     <a href="reservation_table.php"> Go back to the reservation table </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
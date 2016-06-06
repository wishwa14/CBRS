 <?php
   include '../dbconnect.php';
   
   
   
   $sql = "SELECT id,Circuit_Bungalow,mobile,Arrival_Date,Departure_Date,Booking_Date,receipt_no FROM reservation_table";
   $dlt_result = mysqli_query($conn, $sql);
   
   if (mysqli_num_rows($dlt_result) > 0) {
   	//echo "1</br>";
   	while($date = mysqli_fetch_assoc($dlt_result)) {
   
   		$dlt_date = date('d-m-Y', strtotime($date["Booking_Date"]));
   		$dlt_mobile = $date["mobile"];
   		$dlt_receipt_no  = $date["receipt_no"];
   		//echo $date["id"]." ".$dlt_date."</br>";
   		
   		//check if the reservation record is 7 days old and not payment yet.
   		if ((date("d-m-Y") - $dlt_date) == 7 AND $dlt_receipt_no == 0 ) {
   			//echo "equal to 7"." ".$dlt_date."<br>";
   			
   			//send the message mentioning the cancellation.
   			/*
   			$msg1="Insert into ozekimessageout(receiver,msg,status) values('$dlt_mobile','$reason1','send')";
   			mysqli_query($conn,$msg1);
   			*/
   			
   			$dlt_bun = $date["Circuit_Bungalow"];
   			$dlt_a_date = $date["Arrival_Date"];
   			$dlt_d_date = $date["Departure_Date"];
   			$dlt_id = $date["id"];
   			
   			//echo $dlt_id." ".$dlt_date."<br/>";
   			
   			
   			
   			//delete the reservation record.
   			$delete = "DELETE FROM reservation_table WHERE id = $dlt_id"; 
   			mysqli_query($conn, $delete);
   			
   			
   			/* Add the waiting list record behalf of the cancelled record. */
   			
   			//get the most relevant w_list record 
   			
   			$wlist_record = "SELECT * FROM w_list WHERE Circuit_Bungalow = '$dlt_bun' AND (Arrival_Date BETWEEN '$dlt_a_date' AND '$dlt_d_date' OR Departure_Date BETWEEN '$dlt_a_date' AND '$dlt_d_date') ORDER BY id LIMIT 1";
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
   	
   				//echo $w_a_date."<br/>";
   				//echo $w_d_date."<br/>";
   				//echo $w_bun."<br/>";
   				
   				
   				//check whether there are any other record in the reservation_table that overplap with the w_list record
   				
   				$check_res_table = "SELECT id,Arrival_Date,Departure_Date, Circuit_Bungalow FROM reservation_table WHERE Circuit_Bungalow = '$w_bun' AND (Arrival_Date BETWEEN '$w_a_date' AND '$w_d_date' OR Departure_Date BETWEEN '$w_a_date' AND '$w_d_date')";
   				$result3 = mysqli_query($conn, $check_res_table);
   	
   				if (mysqli_num_rows($result3) == Null) /*if there are no overlapping records*/{
   					//echo "no overlaping records in res_table";
   					
					include "../form/add_back_pcancel_2.php";
   					//$update_res_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount) VALUES ('$w_name','$w_nsb_id','$w_nic_no','$w_branch','$w_bun','$w_no_people','$w_a_date','$w_a_time','$w_d_date','$w_d_time','$w_amount')";
   					//$result4 = mysqli_query($conn, $update_res_table);
   					
   		
   					//delete the waiting list record.
   					$del_w_list_record = "DELETE FROM w_list WHERE id = '$w_id'";
   					$result5 = mysqli_query($conn, $del_w_list_record);
   					
   					$reason2 = "Your reservation has added to the reservation table from the waiting list. PLease make the payment within  days to confirm your reservation.";
   					//send the message to the person who made the reservationadded from the waiting list.
   					$msg1="Insert into ozekimessageout(receiver,msg,status) values('$w_mobile','$reason2','send')";
   					mysqli_query($conn,$msg1);
   					
   				
   				}
   				else  /*if there are overlapping records*/ {				
   					continue;
   					//echo "there are overlapping records";
   					//$ovrlp = mysqli_fetch_assoc($result3);
   					//echo $ovrlp["id"]." ".$ovrlp["Arrival_Date"]." ".$ovrlp["Departure_Date"];
   				}
   			}
   			else {
   				return false;
   			}
   		}
   		else {
   			//echo "0<br/>";
   			continue;
   		}
   	}
   }
   ?>
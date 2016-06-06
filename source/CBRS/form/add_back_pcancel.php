<?php

include "../dbconnect.php";

//check paid_cancel table to find if there are any previous cancellations
$chk_p_cancel = "SELECT * FROM paid_cancel WHERE NSB_ID = '$nsb_id'";
$result_new = mysqli_query($conn, $chk_p_cancel);

if (mysqli_num_rows($result_new) == 0 )/*if there are no paid cancellations*/ {
	
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW())";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW())";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun'";		
		mysqli_query($conn, $insert_temp_r_table);

		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
			$s = "SELECT id FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			/*beginning of paragraph*/
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b> ".$row['id']." </b><br><br>
				Name   :<b>$name</b><br><br>
				NSB_ID :<b>$nsb_id</b><br><br>
				NIC_NO :<b>$nic</b><br><br>
				Branch :<b>$branch</b><br><br>
				Circuit_Bungalow:<b>$cir_bun</b><br><br>
				No_of_People :<b>$no_of_people</b><br><br>
				Arrival_Date :<b>$a_date</b><br><br>
				Departure_Date :<b>$d_date</b><br><br>
				Amount due:<b>$amount_due</b><br><br>
				Please make the payment within 7 days to confirm the reservation. </p>";
			/*end of paragraph*/
		/*}

		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}
		*/
}
else if (mysqli_num_rows($result_new) == 1)/*if there is a paid cancellations*/ {
	//$get_record = "SELECT * FROM paid_cancel";
	//$result2 = mysqli_query($conn, $get_record);
	$prow = mysqli_fetch_assoc($result_new);

	
////*if the amounts(amount_due of the reservation and amount in the paid_cancel table) are the same.*////
	if ($amount_due == $prow["amount"] ) {
		$receipt_no = $prow["receipt_no"];
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		
		//Delete record from the paid_cancel table.
		$dlt_p_cancel = "DELETE FROM paid_cancel WHERE NSB_ID ='$nsb_id'";
		mysqli_query($conn, $dlt_p_cancel);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
			$s = "SELECT id FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			/*beginning of paragraph*/
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b> ".$row['id']." </b><br><br>
				Name   :<b>$name</b><br><br>
				NSB_ID :<b>$nsb_id</b><br><br>
				NIC_NO :<b>$nic</b><br><br>
				Branch :<b>$branch</b><br><br>
				Circuit_Bungalow:<b>$cir_bun</b><br><br>
				No_of_People :<b>$no_of_people</b><br><br>
				Arrival_Date :<b>$a_date</b><br><br>
				Departure_Date :<b>$d_date</b><br><br>
				Amount :<b>$amount_due</b><br><br>
				<b>Payment is done.</b>Your payment from the previous cancellation is granted for this reservation. </p>";
			/*end of paragraph*/
		/*}
 
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/	
	}


////*if the amount_due of the reservation is lesser than amount in the paid_cancel table.*////	
	else if ($prow["amount"] > $amount_due )  {
		$bal1 = ($prow["amount"] - $amount_due);
		$receipt_no = $prow["receipt_no"];
		
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		
		//enter the $bal1 in the paid_cancel table.
		$update_p_cancel = "UPDATE paid_cancel SET amount = $bal1 WHERE NSB_ID= '$nsb_id'";
		mysqli_query($conn, $update_p_cancel);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
			$s = "SELECT id FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			/*beginning of paragraph*/
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b> ".$row['id']." </b><br><br>
				Name   :<b>$name</b><br><br>
				NSB_ID :<b>$nsb_id</b><br><br>
				NIC_NO :<b>$nic</b><br><br>
				Branch :<b>$branch</b><br><br>
				Circuit_Bungalow:<b>$cir_bun</b><br><br>
				No_of_People :<b>$no_of_people</b><br><br>
				Arrival_Date :<b>$a_date</b><br><br>
				Departure_Date :<b>$d_date</b><br><br>
				Amount :<b>$amount_due</b><br><br>
				<b>Payment is done.</b> Your payment from the previous cancellation is granted for this reservation. Balance will hold for another journey. </p>";
			/*end of paragraph*/
		/*}
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/
	}
	
	
////*if the amount_due of the reservation is greater than amount in the paid_cancel table.*////
	else if ($prow["amount"] < $amount_due )  {
		$bal2 = ($amount_due - $prow["amount"]);
		
		//insert the record to reservation table and to temp_reservation table. Receipt no will not be added. Only yhe receipt number of the $bal2 will be added.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW())";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW())";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun'";		
		mysqli_query($conn, $insert_temp_r_table);
		
		//delete record from paid_cancel.
		$dlt_p_cancel2 = "DELETE FROM paid_cancel WHERE NSB_ID ='$nsb_id'";
		mysqli_query($conn, $dlt_p_cancel2);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
			$s = "SELECT id FROM reservation_table WHERE NSB_ID='$nsb_id' AND Arrival_Date='$a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			/*beginning of paragraph*/
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b> ".$row['id']." </b><br><br>
				Name   :<b>$name</b><br><br>
				NSB_ID :<b>$nsb_id</b><br><br>
				NIC_NO :<b>$nic</b><br><br>
				Branch :<b>$branch</b><br><br>
				Circuit_Bungalow:<b>$cir_bun</b><br><br>
				No_of_People :<b>$no_of_people</b><br><br>
				Arrival_Date :<b>$a_date</b><br><br>
				Departure_Date :<b>$d_date</b><br><br>
				Amount you must pay :<b>$bal2</b><br><br>
				Your payment from the previous cancellation is granted for this reservation. Only the balance you have to pay. Confirm your reservation before 7 days by completing the payment.</p>";
			/*end of paragraph*/
		/*}
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/
	}
}
?>
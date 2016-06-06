<?php

include "../dbconnect.php";

//check paid_cancel table to find if there are any previous cancellations
$chk_p_cancel = "SELECT * FROM paid_cancel WHERE NSB_ID = '$w_nsb_id'";
$result_new = mysqli_query($conn, $chk_p_cancel);

if (mysqli_num_rows($result_new) == 0 )/*if there are no paid cancellations*/ {
	
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$w_name', '$w_nsb_id', '$w_nic_no', '$w_branch', '$w_bun','$w_mobile', '$w_no_people', '$w_a_date', '$w_a_time', '$w_d_date', '$w_d_time', '$w_amount', NOW())";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date' AND Circuit_Bungalow='$w_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		/*
		$from_r_table = "SELECT * FROM reservation_table WHERE (NSB_ID='$nsb_id' AND Arrival_Date='$a_date' AND Circuit_Bungalow='$cir_bun')";
		$inserttemp = mysqli_query($conn, $from_r_table);
		$frmrtable = mysqli_fetch_assoc($inserttemp);
		
		$r_id = $frmrtable["id"];						    //id
		$r_name = $frmrtable["Name"];                       //Name
		$r_nsb_id = $frmrtable["NSB_ID"];                   //NSB ID
		$r_nic = $frmrtable["NIC_NO"];                      //NIC NO
		$r_branch = $frmrtable["Branch"];                   //Branch
		$r_cir_bun = $frmrtable["Circuit_Bungalow"];        //Circuit Bungalow
		$r_no_of_people = $frmrtable["No_of_People"];       //No. of People
		$r_mobile = $frmrtable["mobile"];			        //contact no
		$r_a_date = $frmrtable["Arrival_Date"];             //Arrival Date
		$r_a_time = $frmrtable["Arrival_Time"];             //Arrival Time
		$r_d_date = $frmrtable["Departure_Date"];           //Departure Date
		$r_d_time = $frmrtable["Departure_Time"];           //Departure Time
		$r_bkg_date = $frmrtable["Booking_Date"];		    //booking date
		$r_amount_due = $frmrtable["Amount"];			    //amount
		$r_receipt_no = $frmrtable["receipt_no"];		    //receipt no.
		
		$insert_temp_r_table = "INSERT INTO temp_reservation_table (id, Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$r_id','$r_name','$r_nsb_id','$r_nic','$r_branch','$r_cir_bun','$r_no_of_people','$r_mobile','$r_a_date','$r_a_time','$r_d_date','$r_d_time','$r_bkg_date','$r_amount_due','$r_receipt_no')";
		mysqli_query($conn, $insert_temp_r_table);
		*/
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
		/*	$s = "SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			*//*beginning of paragraph*//*
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b>".$row['id']." </b><br><br>
				Name   :<b>".$row['Name']."</b><br><br>
				NSB_ID :<b>".$row['NSB_ID']."</b><br><br>
				NIC_NO :<b>".$row['NIC_NO']."</b><br><br>
				Branch :<b>".$row['Branch']."</b><br><br>
				Circuit_Bungalow:<b>".$row['Circuit_Bungalow']."</b><br><br>
				No_of_People :<b>".$row['No_of_People']."</b><br><br>
				Arrival_Date :<b>".$row['Arrival_Date']."</b><br><br>
				Departure_Date :<b>".$row['Departure_Date']."</b><br><br>
				Amount due:<b>".$row['Amount']."</b><br><br>
				Please make the payment within 7 days to confirm the reservation. </p>";
			*//*end of paragraph*/
		/*}

		/*else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}
		*/
}
else if (mysqli_num_rows($result_new) == 1)/*if there is a paid cancellation*/ {
	//$get_record = "SELECT * FROM paid_cancel";
	//$result2 = mysqli_query($conn, $get_record);
	$prow = mysqli_fetch_assoc($result_new);

	
////*if the amounts(amount_due($w_amount) of the reservation and amount in the paid_cancel table) are the same.*////
	if ($w_amount == $prow["amount"] ) {
		$receipt_no = $prow["receipt_no"];
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$w_name', '$w_nsb_id', '$w_nic_no', '$w_branch', '$w_bun','$w_mobile', '$w_no_people', '$w_a_date', '$w_a_time', '$w_d_date', '$w_d_time', '$w_amount', NOW(),'$receipt_no')";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date' AND Circuit_Bungalow='$w_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		
		//Delete record from the paid_cancel table.
		$dlt_p_cancel = "DELETE FROM paid_cancel WHERE NSB_ID ='$w_nsb_id'";
		mysqli_query($conn, $dlt_p_cancel);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
		/*	$s = "SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			*//*beginning of paragraph*//*
			echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b>".$row['id']." </b><br><br>
				Name   :<b>".$row['Name']."</b><br><br>
				NSB_ID :<b>".$row['NSB_ID']."</b><br><br>
				NIC_NO :<b>".$row['NIC_NO']."</b><br><br>
				Branch :<b>".$row['Branch']."</b><br><br>
				Circuit_Bungalow:<b>".$row['Circuit_Bungalow']."</b><br><br>
				No_of_People :<b>".$row['No_of_People']."</b><br><br>
				Arrival_Date :<b>".$row['Arrival_Date']."</b><br><br>
				Departure_Date :<b>".$row['Departure_Date']."</b><br><br>
				Amount due:<b>".$row['Amount']."</b><br><br>
				Receipt no:<b>".$row['receipt_no']."</b><br><br>
				<b>Payment is done.</b>Your payment from the previous cancellation is granted for this reservation. </p>";
			*//*end of paragraph*/
		/*}
 
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/	
	}


////*if the amount_due($w_amount) of the reservation is lesser than amount in the paid_cancel table.*////	
	else if ($prow["amount"] > $w_amount )  {
		$bal1 = ($prow["amount"] - $w_amount);
		$receipt_no = $prow["receipt_no"];
		
		//insert the record to reservation table and to temp_reservation table.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$w_name', '$w_nsb_id', '$w_nic_no', '$w_branch', '$w_bun','$w_mobile', '$w_no_people', '$w_a_date', '$w_a_time', '$w_d_date', '$w_d_time', '$w_amount', NOW(), '$receipt_no')";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date' AND Circuit_Bungalow='$w_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		
		//enter the $bal1 in the paid_cancel table.
		$update_p_cancel = "UPDATE paid_cancel SET amount = $bal1 WHERE NSB_ID= '$w_nsb_id'";
		mysqli_query($conn, $update_p_cancel);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
		/*	$s = "SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			*//*beginning of paragraph*/
			/*echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b>".$row['id']." </b><br><br>
				Name   :<b>".$row['Name']."</b><br><br>
				NSB_ID :<b>".$row['NSB_ID']."</b><br><br>
				NIC_NO :<b>".$row['NIC_NO']."</b><br><br>
				Branch :<b>".$row['Branch']."</b><br><br>
				Circuit_Bungalow:<b>".$row['Circuit_Bungalow']."</b><br><br>
				No_of_People :<b>".$row['No_of_People']."</b><br><br>
				Arrival_Date :<b>".$row['Arrival_Date']."</b><br><br>
				Departure_Date :<b>".$row['Departure_Date']."</b><br><br>
				Amount due:<b>".$row['Amount']."</b><br><br>
				Receipt no:<b>".$row['receipt_no']."</b><br><br>
				<b>Payment is done.</b> Your payment from the previous cancellation is granted for this reservation. Balance will hold for another journey. </p>";
			*//*end of paragraph*/
		/*}
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/
	}
	
	
////*if the amount_due of the reservation is greater than amount in the paid_cancel table.*////
	else if ($prow["amount"] < $w_amount )  {
		$bal2 = ($w_amount - $prow["amount"]);
		
		//insert the record to reservation table and to temp_reservation table. Receipt no will not be added. Only yhe receipt number of the $bal2 will be added.
		$insert_r_table = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date) VALUES ('$w_name', '$w_nsb_id', '$w_nic_no', '$w_branch', '$w_bun','$w_mobile', '$w_no_people', '$w_a_date', '$w_a_time', '$w_d_date', '$w_d_time', '$w_amount', NOW())";
		mysqli_query($conn, $insert_r_table);
		
		//$insert_temp_r_table = "INSERT INTO temp_reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow,mobile, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount,Booking_Date,receipt_no) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun','$mobile', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', '$amount_due', NOW(), '$receipt_no')";
		$insert_temp_r_table = "INSERT INTO temp_reservation_table SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date' AND Circuit_Bungalow='$w_bun'";
		mysqli_query($conn, $insert_temp_r_table);
		
		//delete record from paid_cancel.
		$dlt_p_cancel2 = "DELETE FROM paid_cancel WHERE NSB_ID ='$w_nsb_id'";
		mysqli_query($conn, $dlt_p_cancel2);
		
		//If the reservation is successfull show the reservation receipt.
		//if (mysqli_query($conn, $insert_r_table)) {
		/*	$s = "SELECT * FROM reservation_table WHERE NSB_ID='$w_nsb_id' AND Arrival_Date='$w_a_date'";
			$k= mysqli_query($conn,$s);
			$row = mysqli_fetch_assoc($k);
			
			*//*beginning of paragraph*/
			/*echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br><br>
				Res ID :<b>".$row['id']." </b><br><br>
				Name   :<b>".$row['Name']."</b><br><br>
				NSB_ID :<b>".$row['NSB_ID']."</b><br><br>
				NIC_NO :<b>".$row['NIC_NO']."</b><br><br>
				Branch :<b>".$row['Branch']."</b><br><br>
				Circuit_Bungalow:<b>".$row['Circuit_Bungalow']."</b><br><br>
				No_of_People :<b>".$row['No_of_People']."</b><br><br>
				Arrival_Date :<b>".$row['Arrival_Date']."</b><br><br>
				Departure_Date :<b>".$row['Departure_Date']."</b><br><br>
				Amount you must pay :<b>$bal2</b><br><br>
				Your payment from the previous cancellation is granted for this reservation. Only the balance you have to pay. Confirm your reservation before 7 days by completing the payment.</p>";
			*//*end of paragraph*/
		/*}
		else {
			echo "Error: " . $insert_r_table . "<br>" . mysqli_error($conn);
		}*/
	}
}
?>
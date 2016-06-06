<?php
   //include the db conncections.
   include '../dbconnect.php';
   
   $reason = "You have two remaining days to complete your payment. If you don't pay within two days your reservation will be cancelled.";
   
   $bk_sql = "SELECT mobile,Booking_Date FROM reservation_table";
   $bk_result = mysqli_query($conn, $bk_sql);
   
   if (mysqli_num_rows($bk_result) > 0) {
   	//echo "1</br>";
   	while($date = mysqli_fetch_assoc($bk_result)) {
   
   		$bk_date = date('d-m-Y', strtotime($date["Booking_Date"]));
   		$bk_mobile = $date["mobile"];
   		//echo $date["id"]." ".$bk_date."</br>";
   		
   		if ((date("d-m-Y") - $bk_date) == 5 ) {
   			//echo "equal to 5"." ".$bk_date."<br>";
   			$msg="Insert into ozekimessageout(receiver,msg,status) values('$bk_mobile','$reason','send')";
   			mysqli_query($conn,$msg);
   		}
   		else {
   			continue;
   			//return false;
   		}
   	}
   }
   else {
   	//echo "0<br/>";
   	continue;
   }
   
   ?>
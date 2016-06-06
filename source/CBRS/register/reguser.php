<?php
   //include the db conncections.
   include '../dbconnect.php';
   
   $nsb_id = $_POST["nsb_id"];
   $name = $_POST["name"];
   $uname = $_POST["uname"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   
   //check whethter the state value is equal to 0. If the valuse is 0 then he can register.
   $check_nsb_id = "SELECT state FROM users1 WHERE uid = '$nsb_id'";
   $result = mysqli_query($conn, $check_nsb_id);
   $row = mysqli_fetch_assoc($result);
   $state_value = $row["state"];			
   
   
   if (mysqli_num_rows($result) == 0) {
   	
   	include '../navbar1.php';
   	echo "<p>wrong nsb id</p>";
   }	
   else if ($state_value == "n") {
	   
   	//converting textual password to hashed digest
   	$md5_password = md5($password);
	
   	//updating the record where NSB_ID equals to nsb_id in users1 table
   	$sql = "UPDATE users1 SET uname='$uname', upass='$md5_password', fullname='$name', uemail='$email', state = 'y' WHERE uid='$nsb_id'";
   	$result1 = mysqli_query($conn,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
     
   	//if the registration is successfull.
   	header("location:../home.php");
   	
   }
   else {
   	include '../navbar1.php';
   	echo "You have already registered.";
   }			
   
   ?>

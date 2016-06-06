<?php
	//connecting to the database
	
   include('dbcon.php');
   
   //deleting a message
   $get_id = $_GET['id'];
   $conn->query("delete from message where message_id = '$get_id'");
   header('location:fmessage.php');
   ?>
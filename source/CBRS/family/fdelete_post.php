<?php
	//connect to the database
	
   include('dbcon.php');
   
   
   //deleting a post
   $get_id = $_GET['id'];
   $get_pid = $_GET['pid'];
   
   $conn->query("delete from post where member_id='$get_id' AND post_id='$get_pid'");
   header('location:fhome.php');
   ?>
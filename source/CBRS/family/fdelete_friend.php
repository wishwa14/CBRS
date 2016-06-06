<?php
	//connecting to the database
   include('dbcon.php');
   
   //delete a friend
   $id = $_GET['id'];
   	$conn ->query("delete from friends where friends_id = '$id'");
   	header('location:ffriends.php');
   ?>
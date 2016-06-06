<?php
	//connecting to the database
	
   include('dbcon.php');
   
   //deleting photos
   $get_id = $_GET['id'];
   $conn->query("delete from photos where photos_id='$get_id'");
   header('location:fphoto.php');
   ?>
<?php

	//connecting to the database
	
   include('dbcon.php');
   
   //creating a session
   include('session.php');
   
   //Update status
   
   $content = $_POST['content'];
   $conn->query("insert into post (content,date_posted,member_id) values('$content',NOW(),'$session_id')");
   header('location:fhome.php');
   ?>
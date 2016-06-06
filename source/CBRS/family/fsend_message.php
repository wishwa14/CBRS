-<?php

	//connect to the database
	
   include('dbcon.php');
   
   //creating a session
   include('session.php');
   
   //sending a message
   $friend_id  = $_POST['friend_id'];
   $my_message  = $_POST['my_message'];
   $conn->query("insert into message(reciever_id,content,date_sended,sender_id) values('$friend_id','$my_message',NOW(),'$session_id')");
   ?>
<script>alert('Message Sent');</script>
<script>window.location = 'fmessage.php'; </script>
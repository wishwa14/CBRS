<?php include('dbcon.php'); ?> <!--connecting to the database -->
<?php include('session.php'); ?>
<?php
	//Add a new friend
	
   $my_friend_id = $_POST['my_friend_id'];
   $conn ->query("insert into friends (my_id,my_friend_id) values('$session_id','$my_friend_id')");
   	header('location:ffriends.php'); 
   ?>
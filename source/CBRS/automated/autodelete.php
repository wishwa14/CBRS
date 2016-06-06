<?php
   include '../dbconnect.php';
   
   //delete records from the reservartion table which are expired already
   
   $sql = "DELETE FROM reservation_table WHERE Arrival_Date< NOW()";
   
   mysqli_query($conn,$sql);
   
   ?>
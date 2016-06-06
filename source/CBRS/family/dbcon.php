	<?php $conn = new PDO('mysql:host=localhost;dbname=cbrs', 'root', ''); 
	 // Create connection
  
   
   // Check connection
   if (!$conn) {
       
   	header('Location: sql_error.php');
   }
   else {
   	//echo ("successfully connected<br>");
   }
	?>

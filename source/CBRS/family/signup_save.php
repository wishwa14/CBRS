<body>
   <?php
	//connecting to the database
      include('dbcon.php');
	  
	 //Adding a new member to the family system
	 
      $username = $_POST['username'];
      $password = $_POST['password'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      
      $conn->query("insert into members (username,password,firstname,lastname,email,gender,image) values ('$username','$password','$firstname','$lastname','$email','$gender','images/No_Photo_Available.jpg')");	
      ?>
   <script>
      alert('Sign UP Success Please Login Your Account');
      window.location = 'index.php';
   </script>
</body>
</html>
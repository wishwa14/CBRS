<head>
   <title>Blacklist</title>
   <style>
      body {
      background-color: #ff9900;
      }
   </style>
</head>
<body>
   <?php include '../adminnavbar.php';?>
   <section style=" padding-top: 10px; padding-bottom: 20px;
      padding-left: 104px; padding-right: 105px; ">
      <h1>
      Blacklist</h2>
      <hr noshade>
   </section>
   <section>
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 "  >
               <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                  padding-left: 30px; padding-right: 30px;">
                  <?php
				  //connect to the database
                     include "../dbconnect.php";
                     
                     if(isset($_POST['update'])){
                     	$nsb_id = $_POST['nsb_id'];
                     	$name = $_POST['name'];
                     	
                     	//read all the blacklist details from the database
						
                     	$select = "SELECT * FROM blacklist WHERE nsb_id = $nsb_id";
                     	$result = mysqli_query($conn, $select);
                     
                     	if (!$result) {
                     		header('Location: sql_error.php'); //Redirect to another page if there is any database failure 
                     	}
                     
                     
                     	if ( mysqli_num_rows($result) > 0) {
                     		?>
                  <h3> <strong>Entered ID is already there!</strong> </h3> <!--A message will show up if the record is already existed in the database-->
                  <h4> Please check the blacklist table again. </h4>
                  <a style="font-weight:bold;" href="blacklist.php"> GO BACK TO BLACKLIST TABLE</a>
                  <?php
                     }else{
                     	
                     	$query= "INSERT INTO blacklist( `nsb_id`, `name`) VALUES ('$nsb_id','$name')"; //If there is no record the newly enterd nsb_id will entered in to the blacklist                     	$result1 = mysqli_query($conn, $query);
                     	
                     	if (!$result) {
                     		header('Location: sql_error.php');
                     	}else{
                     
                     	?>
                  <h3>Blacklist has been updated. </h3>
                  <a style="font-weight:bold;" href="blacklist_form.php"> GO BACK TO BLACKLIST TABLE</a>
                  <?php
                     }
                     }
                     }
                     ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>
</html>
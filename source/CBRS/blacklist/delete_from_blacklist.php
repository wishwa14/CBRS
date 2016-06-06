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
                     include "../dbconnect.php"; //connect to  the database
                     
					 
					 //deleting a record from the blacklist
					 
                     if(isset($_POST['delete'])){ 
					 
                     	$id= $_POST["id"];
                     	$select = "DELETE FROM blacklist WHERE id=$id";
                     	$result = mysqli_query($conn, $select);
                     
                     	if (!$result) {
                     		header('Location: sql_error.php');
                     	}else{
                     
                     		?>
                  <h3>Blacklist has been updated. </h3>
                  <a style="font-weight:bold;" href="blacklist_form.php"> GO BACK TO BLACKLIST TABLE</a>
                  <?php
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
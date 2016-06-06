<!DOCTYPE>
<html>
   <head>
      <title>Blacklist Log In</title>
      <script type="text/javascript" language="javascript"> 
	  
	  <!--Validating the blacklist login form-->
         
		 function submitreg() {
         var form = document.administrator;
         if(form.uname.value == ""){
         alert( "Enter User name" );
         return false;
         }
         else if(form.upass.value == ""){
         alert( "Enter password" );
         return false;
         }
         else if(form.nsb_id.value == ""){
         alert( "Enter your NSB ID" );
         return false;
         }
         }
      </script>
   </head>
   <body >
      <?php include '../navbar1.php'?>
      <div class="container">
         <div class="row">
		 
            <!-- Login form starts-->
			
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <h3>Log Into Blacklist</h3>
               <hr noshade>
               <div class="panel panel-info">
                  <div class="panel-heading">Log In</div>
                  <div class="panel-body">
                     <form  name="myform"  method="post" >
                        <div class="form-group">
                           <label >Username:</label>
                           <input type="text" name="uname"  class="form-control" id="usr" required>
                        </div>
                        <div class="form-group">
                           <label >Password:</label>
                           <input type="password" name="upass"  class="form-control" id="usr" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-info">Login</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
      </div>
	  
      <!-- Login form ends-->
      <?php
         include '../dbconnect.php'; //connect to the database
         
         if(isset($_POST['update'])){
         $uname = $_POST["uname"];
         $upass = $_POST["upass"];
         //$nsb_id = $_POST["nsb_id"];
         
         if ($uname == "welfare" AND $upass == 1234567890 ) { //Giving access to the blacklist for the welfare manager
         	header("location:blacklist_form.php");
         	
         }
         else {
			 //alert on a unauthorized login
         	echo 	"<script type='text/javascript' language='javascript'>
         						alert('wrong username or password');   
         
         					</script>";
         }
         
         }
         ?>
   </body>
</html>
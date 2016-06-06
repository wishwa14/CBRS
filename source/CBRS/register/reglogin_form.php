<?php
   include '../dbconnect.php';
   if(isset($_POST['submit'])){
   $uname = $_POST["uname"];
   $upass = $_POST["upass"];
 
   
   if ($uname == "admin" AND $upass == 11111) {
   	header("location:reguser_form.php");
   	
   }
   else {
   	
   	echo 	"<script type='text/javascript' language='javascript'>
   						alert('wrong username or password');
   						
   					</script>";
   	
   }
   
   }
   ?>
<!DOCTYPE>
<html>
   <head>
      <script type="text/javascript" src="js/notifIt.js"></script>
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">
      <title>Administrator</title>
      <script type="text/javascript" language="javascript">
         function submitlogin() {
             var form = document.administrator;
         if(form.uname.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter email or username",
         
         });
         //alert("Invalid Name");
         document.getElementById("uname").value = "";
         return false;		
         
         }
         else if(form.upass.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter The Password",
         
         });
         //alert("Invalid Name");
         document.getElementById("upass").value = "";
         return false;		
         }
         }
         
      </script>
   </head>
   <body >
      <?php include '../navbar1.php'?>
      <div class="container">
         <div class="row">
		 
            <!--Admin Register Login form starts-->
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <h3>Administrator</h3>
               <hr noshade>
               <div class="panel panel-info">
                  <div class="panel-heading">Administrator</div>
                  <div class="panel-body">
                     <form method="post"  name="administrator" action="reglogin_form.php">
                        <div class="form-group">
                           <label for="uname">User name</label>
                           <input type="text" class="form-control" id="uname" name="uname" placeholder="username">
                        </div>
                        <div class="form-group">
                           <label for="upass">Password</label>
                           <input type="password" class="form-control" id="upass" name="upass" placeholder="password">
                        </div>
                       
                        <button onclick="return(submitlogin());" type="submit" name="submit" class="btn btn-info">Login to Register</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
	  
      <!-- Login form ends-->
	  
   </body>
</html>
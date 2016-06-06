<!DOCTYPE>
<html>
   <head>
      <title>Verify Password</title>
   </head>
   <?php
      include '../navbar1.php';
      require_once 'mailFunction.php';
      
      
      $name=$_POST["name"];
      $email=$_POST["email"];
      
      
      include '../dbconnect.php';
      
      
      $sql="SELECT uname,upass FROM users1 WHERE fullname='$name' AND uemail='$email'";
      $result=mysqli_query($conn,$sql);
      
      $row=mysqli_fetch_assoc($result);
      
      
      sendMail("$email","CBRS","NSB" ,"Password Recovery", "username: ".$row['uname']." Password: ".$row['upass']."");
      ?>
   <div class="container">
      <div class="row">
	  
         <!--Password Recovery redirect interface-->
		 
         <div class="col-md-3"></div>
         <div class="col-md-6">
            <h3>Forgot Your Password ?</h3>
            <hr noshade>
            <div class="panel panel-info">
               <div class="panel-heading">Forgot Your Password ?</div>
               <div class="panel-body">
                  <div class="alert alert-danger" style="margin-top:35px">
                     <p> Please log into your email and verify your account.</p>
                  </div>
                  <div class="form-group">
                     <p> <a href="http://www.md5decrypt.org/" target="_blank">Click And Enter The Code To Get Your Password</a></p>
                     <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-info"onclick="window.location.href='../family/family.php'">Go Back And Login</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
   </div>
   

   
   </body>
</html>
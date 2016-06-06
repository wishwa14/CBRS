<?php
   include '../navbar1.php';
   require_once 'mailFunction.php';
   
   
   $name=$_POST["name"];
   $email=$_POST["email"];
   $subject=$_POST["subject"];
   $query=$_POST["query"];
   
   include '../dbconnect.php';
   
   $sql="INSERT INTO queries VALUES ('$name','$email','$subject','$query')";
   
   mysqli_query($conn,$sql);
   
   sendMail("wishwa14@gmail.com","$email","$name" ,"$subject", "$query");
   ?>
   
<!-- Interface After Sending the mail-->
   
<section style=" padding-top: 10px; padding-bottom: 20px;
   padding-left: 104px; padding-right: 105px; ">
   <h1>
   Help</h2>
   <hr noshade>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 "  >
            <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
               padding-left: 30px; padding-right: 30px;">
               <h3>Your mail has been sent</h3>
			     <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-info" style="margin-top:-35px; margin-left:10px;color:black;" onclick="window.location.href='help.php'">Go Back</button>
                     </div>
            </div>
         </div>
      </div>
   </div>
</section>
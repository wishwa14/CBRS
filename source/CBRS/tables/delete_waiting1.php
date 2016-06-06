<?php
   session_start();
   include_once '../class.user.php';
   $user = new User(); $uid = $_SESSION['uid'];
   if (!$user->get_session()){
    header("location:../adminhome.php");
   }
   
   if (isset($_GET['q'])){
    $user->user_logout();
    header("location:../home.php");
    }
    
   ?>
<!DOCTYPE html >
<html >
   <head>
      <title>Delete Waiting Record</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
      <?php
         include '../adminnavbar.php'; 
         
         $res_id = $_POST["res_no"];
         
         $reason= $_POST["reason"];
         
         $name = $user->get_fullname($uid);
         
         
         include '../dbconnect.php';
         
         //Insert the details about the cancellation process into the cancel reservation table
         
         $addreason="INSERT INTO cancel_reservation VALUES ('$res_id','$reason','$name','".date('Y-m-d')."','".date('H:i:s')."')";
         mysqli_query($conn,$addreason);
         
         $mobile="SELECT * FROM w_list WHERE id=$res_id";
         $result=mysqli_query($conn,$mobile);
         $row=mysqli_fetch_assoc($result);
         $mo=$row['mobile'];
         
		 //send a message to the relevant party regarding the cancellation
		 
         $msg="Insert into ozekimessageout(sender,receiver,msg,status) values('$name','$mo','$reason','send')";
         
         mysqli_query($conn,$msg);
         
         
         $deleterecord="DELETE FROM w_list WHERE id=$res_id";
         mysqli_query($conn,$deleterecord);
         
         
         
         mysqli_close ($conn);
         
         
         
         ?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <h1>
         Delete Waiting Record</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <h3>Waiting Record has been deleted.</h3>
                     <a href="waiting_table.php"> Go back to the Waiting List </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
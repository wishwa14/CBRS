<?php
   session_start();
   	include_once 'class.user.php';
   	$user = new User();
   
   	if (isset($_REQUEST['submit'])) {
   		extract($_REQUEST);
   	    $login = $user->check_login($emailusername, $password);
   	    if ($login) {
   	        /* Registration Success*/
   	       header("location:adminhome.php");
   	    } 
   		else {
   			/*registration failed*/
   			echo 	"<script type='text/javascript' language='javascript'>
   						alert('wrong username or password');
   
   					</script>";
   			/*header("location:home1.php");*/
   		}
   	}
   
   ?>
<!DOCTYPE>
<html>
   <head>
      <script type="text/javascript" src="js/notifIt.js"></script>
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">
      <title>Home</title>
      <script type="text/javascript" language="javascript">
         function submitlogin() {
             var form = document.login;
         if(form.emailusername.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter email or username",
         
         });
         //alert("Invalid Name");
         document.getElementById("exampleInputEmail1").value = "";
         return false;		
         
         }
         else if(form.password.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter The Password",
         
         });
         //alert("Invalid Name");
         document.getElementById("exampleInputPassword1").value = "";
         return false;		
         }
         }
         
      </script>
   </head>
   <body >
      <?php include 'navbar.php'?>
      <div class="row artical1">
         <div class="container">
            <div class="row">
			
               <!-- Login form starts-->
               <div class="col-md-3">
                  <p style="font-size:21px;margin-top:13px;">Login</p>
                  <hr noshade>
                  <div class="panel panel-info">
                     <div class="panel-heading">Login</div>
                     <div class="panel-body">
                        <form method="post" action="home.php" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">User Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="emailusername" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                           </div>
                           <button type="submit" onclick="return(submitlogin());" name="submit" class="btn btn-info">Login</button>
                           <a style="margin-left:20px;"href="register/reglogin_form.php" >Register Now</a>
                           <p class="change_link" style="margin-top:10px;">
                              <a href="forgotpasswrd/rcvrpasswrd.php" class="to_register">Forgot Your Password?</a>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
			   
               <!-- Login form ends-->
			   
			   <!--content-->
			   
               <div class="col-md-6">
                  <p style="font-size:21px;margin-top:13px;">Circuit Bungalow Reservations System - CBRS</p>
                  <hr noshade>
                  <p style="font-size:21px;margin-top:13px;">A Place like Home....</p>
                  <p>With a history spanning over 45 years, NSB your family bank provides you a great opportunity to spend your vacation with your lovely family in our circuit bungalows around Sri Lanka. There are a 14 circuit bungalows with beautiful views of the surroundings while waiting for you.
                     The uniquely designed bungalows brought simplicity with comfortable rooms, kitchens, living areas and delicious food will offer you, the simplicity to the average blend well with nature, and consists of charming chalets mostly made of recyclable substance. We will ensure of optimization our resources to efficiently and effectively to serve you, with its beautiful beaches, warm and friendly workers, strong nature, culture and adventure offering. Here we present the opportunity to enjoy the comforts of home away from the urban hubbub combined with all the facilities. Its home away from home.
                     We hope to raise these benefits to the NSB employees without any discrimination with passion and excellence. You can make your reservation under rules and regulations of the bank with in few minutes. Make sure to have an excellent vacation consisting wonderful experience with you loved ones
                  </p>
               </div>
               <div class="col-md-3">
                  <img src="Templates/fam.jpg" width="250" height="150" class="img-responsive center-block" style="padding-top:67px" />
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h3>Accomadation</h3>
                  <hr noshade>
                  <p>A type of real estate property that consists of a small,   story home with an enclosed porch for very reasonable prices.and most of bungalows built in environment friendly way.we always try to provide you very friendly customer service and we highly consider about your security.Always provide you comfortable and clean environments.Come and enjoy your holiday.</p>
                  <img src="Templates/vacation3.jpg" width="250"  height="150" class="img-responsive center-block" />
               </div>
               <div class="col-md-4">
                  <h3>Dining</h3>
                  <hr noshade>
                  <p>Rice and curries cooked with a blend of spices, herbs and coconut milk is the islands main meal. For breakfast and dinner, rice is replaced with hoppers, string hoppers, roti, or koththu which are all made with rice flour and eaten with red and white curries. Sri Lankan like their chillies and the redder the curry, the more chillies it will have.</p>
                  <img src="Templates/bb2.jpg" width="250" height="150" class="img-responsive center-block" />
               </div>
               <div class="col-md-4">
                  <h3>Things To Do</h3>
                  <hr noshade>
                  <p>Drive down from the hill district towards beach country, near the famous Udawalawe Reserve. Elephants are in abundance here and come strolling alongside the roads. Make several stops to observe these mighty creatures before arriving for the evening. Stay at an eco-lodge in a tented camp in Kuda Oya, on the banks of the river near the reserve.</p>
                  <img src="Templates/td3.jpg" width="250" height="150" class="img-responsive center-block" />
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<?php
   session_start();
   include_once 'class.user.php';
   $user = new User(); $uid = $_SESSION['uid'];
   if (!$user->get_session()){
    header("location:adminhome.php");
   }
   
   if (isset($_GET['q'])){
    $user->user_logout();
    header("location:home.php");
    }
    
   ?>
<!DOCTYPE>
<html>
   <head>
      <title>Home</title>
      <link rel="stylesheet" href="css/bootstrap.css">
	  
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
  
      <link rel="stylesheet" href="ahome.css">
      <style>
         .dropdown-menu>li>a:hover, .nav>li>a:hover {
         background-color: #e0e0e0 !important;
         }
      </style>
   </head>
   <body style="background-color:#FFCC66">
      <nav class="navbar navbar-default">
         <div class="container">
		 
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a  href="adminhome.php">
               <img alt="Brand" src="Templates/twin.png" width="140" height="140" class="img-responsive" style="margin-top:5px" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li ><a href="adminhome.php">Home</a></li>
                  <li role="presentation"><a href="bungalows/bungalows1.php">Bungalows</a></li>
                  <li role="presentation"><a href="form/registration1.php">Make Reservations</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rules And Regulations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="rules/commonrules1.php">Common Rules</a></li>
                        <li><a href="rules/reservationrules1.php">Reservations Rules</a></li>
                        <li><a href="rules/paymentrules1.php">Payment Rules</a></li>
                        <li><a href="rules/cancelrules1.php">Cancellation Rules</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Check Reservations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="tables/reservation_table.php">Reservation Table</a></li>
                        <li><a href="tables/cancel_table.php">Cancellation Table</a></li>
                        <li><a href="tables/waiting_table.php">Waiting List</a></li>
                        <li><a href="payments/add_payments.php">Add payments</a></li>
                        <li><a href="report/report.php">View Reports</a></li>
                     </ul>
                  </li>
                  <li role="presentation"><button type="button"style="margin-top:7px" class="btn btn-info" onclick="window.location.href='home.php?q=logout'">Logout</button></a></li>
               </ul>
            </div>
			
            <!-- /.navbar-collapse -->
			
			
         </div>
		 
		 
         <!-- /.container-fluid -->
		 
      </nav>
	  
      <!-- slide show starts-->
      <div id="myCarousel" class="carousel slide topimg" data-ride="carousel">
	  
         <!-- Indicators -->
		 
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
		 
         <!-- Wrapper for slides -->
		 
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="Templates/aaa12.jpg" alt="bungalow" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="Templates/yellow2.jpg" alt="accomadation" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="Templates/cook2.jpg" alt="food" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="Templates/kat32.jpg" alt="hills" class="img-responsive center-block">
            </div>
         </div>
		 
         <!-- Left and right controls -->
		 
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
	  
      <!--slide-show ends-->
	  
      <div class="row artical1">
         <div class="container">
            <div class="row">
			
               <!-- Button selection starts-->
			   
               <div class="col-md-3">
                  <p style="font-size:21px;margin-top:13px;">Reservation Details</p>
                  <hr noshade>
                  <button type="button" class="btn btn-info btn-block buttonlist" onclick="window.location.href='tables/reservation_table.php'" >View Reservation Table</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='tables/cancel_table.php'">View Cancellation Table</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='tables/waiting_table.php'" >View Waiting List</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='payments/add_payments.php'">Add Payments</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='viewcalendar/view_calendar1.php'">View Calendar</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='report/report.php'">View Reports</button>
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='blacklist/blacklistlog.php'">Blacklist</button>
               </div>
			   
               <!-- button selection ends-->
			   
               <div class="col-md-6">
                  <p style="font-size:21px;margin-top:13px;">Circuit Bungalow Reservations System - CBRS</p>
                  <hr noshade>
                  <p style="font-size:23px;margin-top:13px;">Hello <?php echo $user->get_fullname($uid); ?></p>
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
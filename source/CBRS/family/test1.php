<!DOCTYPE>
<html>
   <head>
      <title>Verify Password</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
      <script src="myfunctions.js"></script>
      <link rel="stylesheet" href="ahome.css">
   </head>
   <body style="background-image:url(Templates/fb4.jpg)">
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
               <a  href="#">
               <img alt="Brand" src="Templates/twin.png" width="140" height="140" class="img-responsive" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../home.php">Home<span class="sr-only"></span></a></li>
                  <li role="presentation"><a href="../bungalows/bungalows.php">Bungalows</a></li>
                  <li role="presentation"><a href="#">Make Reservations</a></li>
                  <li class="Rules And Regulations">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rules And Regulations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="../rules/commonrules.php">Common Rules</a></li>
                        <li><a href="../rules/reservationrules.php">Reservations Rules</a></li>
                        <li><a href="../rules/paymentrules.php">Payment Rules</a></li>
                        <li><a href="../rules/cancelrules.php">Cancellation Rules</a></li>
                     </ul>
                  </li>
                  <li role="presentation"><a href="../family/family.php">Family</a></li>
                  <li role="presentation"><a href="../help/help.php">Help</a></li>
                  <li role="presentation"><button type="button"style="margin-top:7px" class="btn btn-info" onclick="window.location.href='../view_calendar.php'">View Calendar</button></a></li>
               </ul>
            </div>
			
            <!-- /.navbar-collapse -->
			
         </div>
		 
         <!-- /.container-fluid -->
		 
      </nav>
      <div class="row family">
         <div class="container">
            <div class="panel">
               <div class="panel-body" style= "background-color:#faf2e0">
                  <div class="col-md-7">
				  
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
						
                        <div class="carousel-inner slideimages" role="listbox">
                           <div class="item active">
                              <img src="Templates/fa422.jpg" alt="f4" class="img-responsive center-block">
                           </div>
                           <div class="item">
                              <img src="Templates/fa32.jpg" alt="fa32" class="img-responsive center-block">
                           </div>
                           <div class="item">
                              <img src="Templates/fa12.jpg" alt="fa1" class="img-responsive center-block">
                           </div>
                           <div class="item">
                              <img src="Templates/fa22.jpg" alt="fa2" class="img-responsive center-block">
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
					 
                  </div>
				  
                  <!-- form starts-->
				  
                  <div class="col-md-1"></div>
                  <div class="col-md-3 " style="margin-top:40px">
                     <img alt="Brand" src="Templates/liy.png" width="100" height="100" class="img-responsive center-block" style="margin-top:-25px">
                     <div class="alert alert-info" style="margin-top:35px">
                        <p> Please log into your email and verify your account.</p>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <button type="submit" class="btn btn-info"onclick="window.location.href='../family/family.php'">Go Back And Login</button>
                        </div>
                     </div>
                  </div>
               </div>
			   
               <!-- form ends-->
			   
               <div class="col-md-1"></div>
            </div>
			
            <!-- panel body ends-->
			
         </div>
		 
         <!-- panel ends-->
		 
      </div>
	  
      <!--container ends-->
	  
      </div><!--row family ends-->
      <?php
         require_once 'mailFunction.php';
         
         
         $name=$_POST["name"];
         $email=$_POST["email"];
         
         
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "cbrs";
         
         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         
         // Check connection
		 
         if (!$conn) {
             header('Location: sql_error.php');
         }
         else {
         	//echo ("successfully connected<br>");
         }
         
         $sql="SELECT username,password FROM members WHERE firstname='$name' AND email='$email'";
         $result=mysqli_query($conn,$sql);
         
         $row=mysqli_fetch_assoc($result);
         
         
         sendMail("$email","CBRS","NSB" ,"Password Recovery", "username: ".$row['username']." Password: ".$row['password']."");
         ?>
   </body>
</html>
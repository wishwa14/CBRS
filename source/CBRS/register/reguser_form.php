<!DOCTYPE>
<html>
   <head>
      <title>Register</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
      <!-- notification file-->
      <script type="text/javascript" src="kawvalidate.js"></script>
	  
      <link rel="stylesheet" href="ahome.css">
	  
      <!-- Form Validation File -->
      <style>
         .error { border: 1px solid #b94a48!important; background-color: #fee!important; }
         .dropdown-menu>li>a:hover, .nav>li>a:hover {
         background-color: #e0e0e0 !important;
         }
      </style>
      <script type="text/javascript" src="js/notifIt.js"></script>
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">
   </head>
   <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js" type="text/javascript"></script>
   <script src="//ajax.aspnetcdn.com/ajax/jQuery.validate/1.11.1/jquery.validate.js" type="text/javascript"></script>
   <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
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
               <a  href="../home.php">
               <img alt="Brand" src="../Templates/twin.png" width="140" height="140" class="img-responsive" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../home.php">Home<span class="sr-only"></span></a></li>
                  <li role="presentation"><a href="../bungalows/bungalows.php">Bungalows</a></li>
                  <li role="presentation"><a href="../form/registration.php">Make Reservations</a></li>
                  <li role="presentation"><a href="../rules/commonrules.php">Rules And Regulations</a></li>
                  <li role="presentation"><a href="../family/family.php">Family</a></li>
                  <li role="presentation"><a href="../help/help.php">Help</a></li>
                  <li role="presentation"><button type="button"style="margin-top:7px" class="btn btn-info" onclick="window.location.href='../viewcalendar/view_calendar.php'">View Calendar</button></a></li>
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
	  
      <div class="row">
         <div class="container">
		 
            <!-- Admin Registration form starts-->
			
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <h3>Registration</h3>
               <hr noshade>
               <div class="panel panel-info">
                  <div class="panel-heading">Registration</div>
                  <div class="panel-body">
                     <form  id="registrationForm" action="" method="post" name = "myform" role="form">
                        <div class="form-group">
                           <label for="nsb_id">NSB ID</label>
                           <input type="text" class="form-control" required id="nsb_id" name="nsb_id" placeholder="nsb id" onchange="nsbIDcheck();">
                        </div>
                        <div class="form-group">
                           <label for="name">Full Name</label>
                           <input type="text" class="form-control" id="name" required name="name" placeholder="Full name" onchange="validateName();">
                        </div>
                        <div class="form-group">
                           <label for="uname">User Name</label>
                           <input type="text" class="form-control" id="uname"  required name="uname" placeholder="User name" onchange="validateName1();">
                        </div>
                        <div class="form-group">
                           <label for="email">email</label>
                           <input type="email" class="form-control" id="email" required name="email" placeholder="email" onchange="ValidateEmail();">
                        </div>
                        <div class="form-group">
                           <label for="password">password</label>
                           <input type="password" class="form-control" id="password" required name="password" placeholder="password" onblur="CheckPasswordStrength();">
                        </div>
                        <div class="form-group">
                           <label for="password2">Confirm password</label>
                           <input type="password" class="form-control" id="password1" required name="password1" placeholder="password" onblur="confirmpwd();">
                        </div>
                        <button onclick="return(submitreg());" type="submit" name="submit" class="btn btn-info">Register</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
	  
      <!-- Registration form ends-->
	  
      <script type="text/javascript">
         $("form").validate({
               
           showErrors: function(errorMap, errorList) {
               // Clean up any tooltips for valid elements
               $.each(this.validElements(), function (index, element) {
                   var $element = $(element);
                   $element.data("title", "") // Clear the title - there is no error associated anymore
                       .removeClass("error")
                       .tooltip("destroy");
               });
               // Create new tooltips for invalid elements
               $.each(errorList, function (index, error) {
                   var $element = $(error.element);
                   $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                       .data("title", error.message)
                       .addClass("error")
                       .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
               });
           },
         
         });
      </script>
   </body>
</html>

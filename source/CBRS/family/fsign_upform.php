<!DOCTYPE>
<html>
   <head>
      <title>Home</title>

  
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <!-- Error message style of the Data validation for the null characters-->
      <style>
         .error { border: 1px solid #b94a48!important; background-color: #fee!important; }
      </style>

      <!-- java script file for the notification plugin-->
      <script type="text/javascript" src="js/notifIt.js"></script>

      <!-- CSS file for the notification plugin-->
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">

      <!-- java script file of the sign up form validation  -->
      <script type="text/javascript" src="famformvali.js"></script>

   </head>

   <body style="background-image:url(Templates/fb4.jpg)">

      <!-- jquery library included -->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- jquery validation library included-->
      <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
      <!-- Twitter bootstrap java script files included-->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

      <!--nav bar starts -->      
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
                  <li role="presentation"><button type="button"style="margin-top:7px" class="btn btn-info" onclick="window.location.href='../view_calendar.php'">View Calendar</button></a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <!--nav bar ends here -->

      <div class="row family">
         <div class="container">
            <div class="panel">
               <div class="panel-body" style= "background-color:#faf2e0">
                  <div class="col-md-7">
                     <!-- slide show starts-->
                     <div id="myCarousel" class="carousel slide topimg" data-ride="carousel" style="margin-top:135px;margin-left:20px">
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

                  <!--sign up form starts here-->
                  <div class="col-md-1"></div>
                  <div class="col-md-3" style="margin-top:40px">
                     <img alt="Brand" src="Templates/liy.png" width="100" height="100" class="img-responsive center-block" style="margin-top:-35px">
                     <h3>Sign Up</h3>
                     <hr noshade>
                     <p></p>
                     <form class="form-horizontal" method="post" action="signup_save.php" action="login.php">
                        <div class="form-group">
                           <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                           <div class="col-sm-10">
                              <input name="username" id="username" required type="text" onblur="validateName('username');" placeholder="Username" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                           <div class="col-sm-10">
                              <input id="passwordsignup" name="password" required="required" onchange="CheckPasswordStrength();" type="password" placeholder="eg. X8df!90EO"/>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="passwordsignup" class="youpasswd" data-icon="u">First Name </label>
                           <div class="col-sm-10">
                              <input id="firstname" name="firstname" id="firstname" onchange="validateName('firstname');" required="required" type="text" placeholder="First Name"/>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="passwordsignup" class="youpasswd" data-icon="u">Last Name </label>
                           <div class="col-sm-10">
                              <input id="lastname" name="lastname" required="required" onchange="validateName('lastname');" type="text" placeholder="Last Name"/>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="passwordsignup" class="youpasswd" data-icon="u">Email Address </label>
                           <div class="col-sm-10">
                              <input id="email" name="email" required="required" type="email" onchange= "ValidateEmail();" placeholder="Email"/>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="passwordsignup" class="youpasswd" data-icon="">Gender</label>
                           <div class="col-sm-10">
                              <select id="passwordsignup"  name="gender">
                                 <option></option>
                                 <option>Male</option>
                                 <option>Female</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <center>
                              <button type="submit" class="btn btn-info">Sign in</button>
                           </center>
                           <br>
                           <p class="change_link">  
                              Already a member ?
                              <a href="family.php"> Go and log in </a>
                           </p>
                        </div>
                     </form>
                  </div>
                  <!-- signup form ends-->
                  
                  <!-- Java script function of the validation for the null values using jquery and tooltips-->
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
                  <div class="col-md-1"></div>
               </div>
               <!-- panel body ends-->
            </div>
            <!-- panel ends-->
         </div>
         <!--container ends-->
      </div>
      <!--row family ends-->
   </body>
</html>
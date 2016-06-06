<!DOCTYPE>
<html>
   <head>
      <title>Help</title>
	  
	   <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
	  <link rel="stylesheet" href="../ahome.css">

      <!-- Error message style of the Data validation for the null characters-->
      <style>
         .error { border: 1px solid #b94a48!important; background-color: #fee!important; }
      </style>

      <!-- java script file for thenotification plugin-->
      <script type="text/javascript" src="js/notifIt.js"></script>

      <!-- CSS file for the notification plugin-->
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">


   </head>


   <body >

      <!-- Nav bar file-->
	  
     
	  
	  
      <!-- jquery library included -->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- jquery validation library included-->
      <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
      <!-- Twitter bootstrap java script files included-->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

      <!-- java script functions for the name and the email field validation -->
	  
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
               <a href="../home.php">
               <img alt="Brand" src="../Templates/twin.png" width="140" height="140" class="img-responsive" style="margin-top:5px" >
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
               <img src="../Templates/aaa12.jpg" alt="bungalow" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="../Templates/yellow2.jpg" alt="accomadation" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="../Templates/cook2.jpg" alt="food" class="img-responsive center-block">
            </div>
            <div class="item">
               <img src="../Templates/kat32.jpg" alt="hills" class="img-responsive center-block">
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
   </body>
   
      <script type="text/javascript">
         function validatename(){
           var name = document.getElementById("name").value;
           var letters = /^[a-zA-Z\s]*$/;
           if(name.match(letters)){
             return true;
           
           }
         
           else{
             notif({
               type : 'warning',
               msg  : 'Invalid Name',
               bgcolor: "#F80000 ",
               width: 200,
               height: 40
             });
             return false
           }
         }
         
         function ValidateEmail() 
         {
           var $email = $('form input[name="email'); //change form to id or containment selector
           var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if ($email.val() == '' || !re.test($email.val()))
           {
              notif({
               type : 'warning',
               msg  : 'Invalid Email address',
               bgcolor: "#F80000 ",
               width: 200,
                 height: 40
             });
             document.getElementById("email").value = "";
             return false
           }
         
         }
         
      </script>

      <!-- 'Contact us' information starts-->
      <div class="row">
         <div class="container">
            <div class="col-md-4">
               <h3>Call Us</h3>
               <hr noshade>
               <p>Ranjith Gunathilake</p>
               <p>Manager Welfare</p>
               <p>011- 2913870</p>
               <p>071-4884320</p>
            </div>
            <div class="col-md-4">
               <h3>Visit Us</h3>
               <hr noshade>
               <p>NATIONAL SAVINGS BANK</p>
               <p>Savings House</p>
               <p>255, Galle Road</p>
               <p>Colombo 03</p>
               <p>SriLanka</p>
            </div>
            <div class="col-md-4">
               <h3>Mail Us</h3>
               <hr noshade>
               <p>manager.welfare@nsb.lk</p>
            </div>
         </div>
      </div>
      <!-- 'Contact us' information ends-->


      <!-- 'Contact us' form starts-->
      <div class="row">
         <div class="container">
            <div class="col-md-6">
               <h3 class="text-center">Contact Us</h3>
               <hr noshade>
               <p>If you have anymore problems regarding Reservation,Cancellation, Payments or any other don't hesitate to contact us.</p>
               <form class="form-horizontal" method="post" action="help1.php">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required onchange="validatename();">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required onchange="ValidateEmail();">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Add Your Query</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" name="query" id="query" rows="3" required></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="send" class="btn btn-info">Send</button>
                     </div>
                  </div>
               </form>
               <!-- contact us form ends -->


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
            </div>

            <!-- Included the google map to the page-->
            <div class="col-md-6">
               <h3 class="text-center">Get Directions</h3>
               <hr noshade>
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2800.7306745137207!2d79.84970017894581!3d6.910764814932937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451808131778" width="600" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </body>
</html>
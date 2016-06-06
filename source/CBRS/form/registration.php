<!DOCTYPE>
<html>
   <head>
      <title>Reservation Details</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
      <script type="text/javascript" src="reservation_details_js.js"></script>
      <link rel="stylesheet" href="ahome.css">
      <link rel="stylesheet" href="reg.css">
      <link rel="stylesheet" type="text/css" href="calender1.css">
	  
      <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->
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
               <a href="../home.php">
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
		 
            <!-- Reservation form starts-->
            <div class="col-md-8">
               <div class="container">
                  <div class="col-xs-12 col-md-7">
                     <div class="modal-content" style="margin-top:25px">
                        <div class="modal-header" style= "background-color:#faf2e0">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                           <h4 class="modal-title">Make Your Reservation Now </h4>
                        </div>
                        <form  id="registrationForm" action="check_waitinglist.php" method="post" name = "myform" style= "background-color:#faf2e0;margin-top:15px"  class="form-horizontal" role="form">
                           <div class="modal-body">
                              <div class="form-group">
                                 <label class="control-label col-md-3"  for="name">Full Name: </label>
                                 <div class="col-md-7">
                                    <input
                                       type="text" class="form-control" id="name" name="name" required size="30" placeholder="Enter Your Name" onchange="validateName();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="nsb_id">NSB ID: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" id="nsb_id" name="nsb_id" required  size="30" placeholder="Enter Your ID"  onchange="nsbIDcheck();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="nic">NIC NO: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" name="nic" id="nic" required  size="30" placeholder="Enter Your NIC Number" onchange="NICcheck();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="branch">Branch: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" name="branch" id="branch"  placeholder="Enter Your Branch" required size="30" onchange="branch_check();" >
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3 " for="cir_bun">Circuit Bungalow:</label>
                                 <div class="col-md-7">
                                    <select class="form-control" name="cir_bun" id="cir_bun">
                                       <option>ambalanthota</option>
                                       <option>anuradhapura</option>
                                       <option>badulla</option>
                                       <option>bandarawela</option>
                                       <option>beliatta</option>
                                       <option>chawakachcheri</option>
                                       <option>dambula</option>
                                       <option>galle</option>
                                       <option>kandy</option>
                                       <option>katharagama</option>
                                       <option>mahiyangana</option>
                                       <option>maravila</option>
                                       <option>nuwaraEliya</option>
                                       <option>nuwaraEliyaNew</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="no_of_people">Number of People: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" name="no_of_people" id="no_of_people"  placeholder="Enter Number Of People" required  size="30" onchange="no_of_people_check();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="email">Email: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" id="email" name="email" required  placeholder="Enter Your Email" size="30" onchange="ValidateEmail();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="contact_no">Mobile No: </label>
                                 <div class="col-md-7">
                                    <input type="text" class="form-control" name="contact_no" id="contact_no"  placeholder="Enter Your Mobile Number" required size="30" onchange="mobcheck();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="a_date">Arrival Date: </label>
                                 <div class="col-md-7">
                                    <input type="date" class="form-control" name="a_date" id="a_date" required onchange="date_check();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="a_time">Arrival Time: </label>
                                 <div class="col-md-7">
                                    <input type="time" class="form-control" name="a_time" id="a_time" required>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="d_date">Departure Date: </label>
                                 <div class="col-md-7">
                                    <input type="date" class="form-control" name="d_date" id="d_date" required  onchange="date_check1();">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-md-3" for="d_time">Departure Time: </label>
                                 <div class="col-md-7">
                                    <input type="time" class="form-control" name="d_time" id="d_time" required>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-offset-3 col-md-4">
                                    <button type="submit" class="btn btn-primary
                                       btn-md btn-block" value="Submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
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
            </div>
			
            <!--Reservation-->
			
            <div class="col-md-4">
               <div class="row">
                  <img src="Templates/fa5.jpg" alt="fa1" class="img-responsive center-block" style="margin-top:25px"/>
               </div>
               <div class="row">
                  <div class="panel">
                     <div class="panel-body" style= "background-color:#faf2e0">
                        <h3>Check Availability</h3>
                        <hr>
						
						<!--Draw the Calendar-->
						
                        <?php
                           include 'calender1.php';
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--container ends-->
   </body>
</html>
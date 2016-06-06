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
      <script src="myfunctions.js"></script>
      <link rel="stylesheet" href="../ahome.css">
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
               <a  href="../adminhome.php">
               <img alt="Brand" src="../Templates/twin.png" width="140" height="140s" class="img-responsive" style="margin-top:0px" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../adminhome.php">Home</a></li>
                  <li role="presentation"><a href="../bungalows/bungalows1.php">Bungalows</a></li>
                  <li role="presentation"><a href="../form/registration1.php">Make Reservations</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rules And Regulations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="../rules/commonrules1.php">Common Rules</a></li>
                        <li><a href="../rules/reservationrules1.php">Reservations Rules</a></li>
                        <li><a href="../rules/paymentrules1.php">Payment Rules</a></li>
                        <li><a href="../rules/cancelrules1.php">Cancellation Rules</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Check Reservations<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="../tables/reservation_table.php">Reservation Table</a></li>
                        <li><a href="../tables/cancel_table.php">Cancellation Table</a></li>
                        <li><a href="../tables/waiting_table.php">Waiting List</a></li>
                        <li><a href="../payments/add_payments.php">Add payments</a></li>
                        <li><a href="../report/report.php">View Reports</a></li>
                     </ul>
                  </li>
                  <li role="presentation"><button type="button" style="margin-top:7px" class="btn btn-info" onclick="window.location.href='../home.php?q=logout'">Logout</button></a></li>
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
	  
      <!--slide-show ends-->
	  
   </body>
</html>
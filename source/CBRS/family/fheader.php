<!DOCTYPE>
<html>
   <head>
      <link rel="stylesheet" href="css/bootstrap.css">
	  
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
     
      <link rel="stylesheet" href="ahome.css">
      <link rel="stylesheet" href="family.css">
      <style>
         .dropdown-menu>li>a:hover, .nav>li>a:hover {
         background-color: #e0e0e0 !important;
         }
      </style>
   </head>
   
   <!-- Connecting to the database-->
   <?php include('dbcon.php'); ?>
   
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
               <a  href="fhome.php">
               <img alt="Brand" src="Templates/liy.png" width="65" height="85" class="img-responsive" style="margin-top:-10px" >
               </a>
            </div>
			
            <!-- Collect the nav links and other content for toggling -->
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li ><a href="fhome.php">Home<span class="sr-only"></span></a></li>
                  <li role="presentation"><a href="fprofile.php">Profile</a></li>
                  <li role="presentation"><a href="fphoto.php">Photos</a></li>
                  <li role="presentation"><a href="ffriends.php">Friends</a></li>
                  <li role="presentation"><a href="fmessage.php">Message</a></li>
                  <li role="presentation"><a href="fgallery.php">Gallery</a></li>
                  <form class="navbar-form navbar-left" method="post" action="fsearch.php" role="search">
                     <div class="form-group">
                        <input type="text" name="search" class="form-control"  id="span5" placeholder="Search">
                     </div>
                     <button type="submit" class="btn btn-info">Search</button>
                  </form>
                  <li role="presentation"><a href="family.php"><button type="button" style="margin-top:-7px" class="btn btn-info" >Logout</button></a></li>
               </ul>
            </div>
			
            <!-- /.navbar-collapse -->
			
         </div>
		 
         <!-- /.container-fluid -->
		 
      </nav>
</html>
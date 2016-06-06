<!DOCTYPE html >
<html >
   <head>
      <title>Nuwara Eliya Bungalow</title>
      <link rel="stylesheet" type="text/css" href="calender.css">
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
      <?php include '../navbar1.php';?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 110px; padding-right: 105px; ">
         <h1>
         Nuwara Eliya Bungalow</h2>
         <hr noshade>
      </section>
      <section>
      <div class="container">
      <div class="row">
	  
         <!-- bungalow details -->
		 
         <div class="col-lg-6 col-md-6 col-sm-12 "  >
            <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
               padding-left: 30px; padding-right: 30px;">
               <h2>Bungalow Details</h2>
               <p style="text-align:justify; font-size:15px">This is one of the oldest bungalows
                  that belongs to NSB. It is built in Nuwara eliya in 1907. It has 5 bedrooms, 2 bathrooms, 
                  a kitchen, a living room and a dining room. This bungalow is surrounded with a beautiful
                  garden with many vegetables and flowers. You can have fresh vegetables while staying in
                  the bungalow. The bungalow is surrounded with a splendid view of a tea estate. The 
                  temperature of the area can be as low as 12 °C at night. Heaters and hot water is
                  available for you need. 
               </p>
               <img src="img/nuwaraeliya/nuwaraeliya.jpg" width="100%" height="200"  />
            </div>
         </div>
		 
         <!-- calendar -->
		 
         <div class="col-lg-6 col-md-6 col-sm-12 "  >
            <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 0px;
               padding-left: 30px; padding-right: 30px; ">
               <h2>Check Availability</h2>
			   
               <!-- draw calendar -->
			   
               <?php
                  include 'calendar.php';
                  
                  calendar('nuwaraEliya');
                  ?>	
            </div>
         </div>
      </div>
      <div class="row" >
	  
         <!-- nearest attractions slideshow-->
		 
         <div class="col-lg-6 col-md-6 col-sm-12 " >
            <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px;
               padding-bottom: 30px; padding-left: 30px; padding-right: 30px;" >
               <h2 style=" padding-bottom: 20px;">Nearest Attractions</h2>
			   
               <!-- slide show starts-->
			   
               <div id="myCarousel1" class="carousel slide topimg" data-ride="carousel"  >
			   
                  <!-- Indicators -->
				  
                  <ol class="carousel-indicators">				  
                     <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel1" data-slide-to="1"></li>
                     <li data-target="#myCarousel1" data-slide-to="2"></li>
                     <li data-target="#myCarousel1" data-slide-to="3"></li>
                     <li data-target="#myCarousel1" data-slide-to="4"></li>
                  </ol>
				  
                  <!-- Wrapper for slides -->
				  
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <img src="img/nuwaraeliya/adams.jpg"  class="img-responsive center-block" height=430 width=100%>
                     </div>
                     <div class="item">
                        <img src="img/nuwaraeliya/devon.jpg"class="img-responsive center-block" height=430 width=100%>
                     </div>
                     <div class="item">
                        <img src="img/nuwaraeliya/end.jpg" class="img-responsive center-block" height=430 width=100%>
                     </div>
                     <div class="item">
                        <img src="img/nuwaraeliya/lake.jpg"class="img-responsive center-block" height=430 width=100%>
                     </div>
                     <div class="item">
                        <img src="img/nuwaraeliya/plains.jpg" class="img-responsive center-block" height=430 width=100%>
                     </div>
                  </div>
				  
                  <!-- Left and right controls -->
				  
                  <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
		 
         <!-- map-->
		 
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px;
               padding-bottom: 30px; padding-left: 30px; padding-right: 30px;" >
               <h2>Get Directions</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6660.797796954389!2d80.792477
				18031223!3d6.946149858406215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451739636657" 
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </body>
</html>
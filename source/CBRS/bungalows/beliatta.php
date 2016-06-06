<!DOCTYPE html >
<html >
<head>

<title>Beliatta Bungalow</title>

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

		<h1>Beliatta Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">Beliatta circuit bungalow is in Beliatta- Walasmulla 
				road and 100m away from the Beliatta junction. You can find an NSB ATM within a walking distance from 
				the bungalow. Since the bungalow is situated in the town, you can buy anything at nearby shops.
				The bungalow has 6 bedrooms,2 bathrooms, a living room, a dining room and a kitchen. And also it has
				a separate garage, where 3 vehicles can be parked. Visitors are able to explore many an attractions 
				within the surrounding area of Tangalle including a visit to the famous "Hummanaya" Blow Hole. </p>
			
				<img src="img/beliatta/beliatta.jpg" width="100%" height="200"  />
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

				calendar('beliatta');
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
					<div id="myCarousel11" class="carousel slide topimg" data-ride="carousel"  >
					<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#myCarousel11" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel11" data-slide-to="1"></li>
					<li data-target="#myCarousel11" data-slide-to="2"></li>
					<li data-target="#myCarousel11" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					
					<div class="item active">
					<img src="img/beliatta/whale.jpg" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/beliatta/surfing.jpg" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/beliatta/mulkirigala.jpg" class="img-responsive center-block" height=430 width=100%>
					</div>
					
					<div class="item">
					<img src="img/beliatta/hummanaya.jpg" class="img-responsive center-block" height=430 width=100%>
					</div>

					
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel11" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel11" role="button" data-slide="next">
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11222.125760714405!2d80.7
				3265736390223!3d6.046675963035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451736633638" 
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
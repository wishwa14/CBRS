<!DOCTYPE html >
<html >
<head>

<title>Bandarawela Bungalow</title>



<link rel="stylesheet" type="text/css" href="calender.css">
<style>
body {
    background-color: #ff9900;
}


</style>
</head>
<body>
<?php include '../adminnavbar.php';?>
<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 110px; padding-right: 105px; ">

		<h1>Bandarawela Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">This circuit bungalow situated next to the Blue 
				Wings Ayurveda Hotel. It is 500m away from the Bandarawela railway station and 200m away from 
				Beragala- HaliEla highway. The bungalow is surrounded with fascinating scenarios of the hill side.
				The unpredictable climate of the area gives you a thrilling experience throughout your stay.
				The temperature of the environment is between 12°C (in December) and 27°C (in May and June).
				There can be slight rains in the dawn and in the evening. The bungalow has 5 rooms with attached 
				bathrooms, a living room and a kitchen. Hot water and heaters available for your convenient.</p>
			
				<img src="img/bandarawela/bandarawela.jpg" width="100%" height="200"  />
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

				calendar('bandarawela');
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
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<div class="item active">
					<img src="img/bandarawela/addisom.jpg" alt="bungalow" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/bandarawela/bambarakanda.jpg" alt="accomadation" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/bandarawela/lipton.jpg" alt="food" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/bandarawela/diyaluma.jpg" alt="hills" class="img-responsive center-block" height=430 width=100%>
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3961.527497301471!2d80.989
				81836016038!3d6.827171593146953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451738791030"
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
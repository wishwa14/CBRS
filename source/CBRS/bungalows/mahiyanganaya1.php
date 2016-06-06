<!DOCTYPE html >
<html >
<head>

<title>Mahiyanganaya Bungalow</title>

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

		<h1>Mahiyanganaya Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">This is one of the oldest circuit bungalows
				that belongs to NSB. It is situated in Puhulyaya Road, which is in the city. The Bus 
				stand is 200m away from the bungalow. The bungalow has 3 bedrooms, a bathroom, a kitchen, 
				a living room and a dining room.  All your needs can be bought from the town with a 
				10 minute walk. The sacred Mahiyangana temple is 2km away from the premises. There are
				lots of places to explore around the area. Many tourist guides are available for tours
				in the town.</p>
			
				<img src="img/mahiyanganaya/mahiyanganaya.jpg" width="100%" height="200"  />
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

				calendar('mahiyanganaya');
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
					<img src="img/mahiyanganaya/galoya.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/mahiyanganaya/Dabana.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/mahiyanganaya/maduru.jpg" class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/mahiyanganaya/rantabe.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>
					
					<div class="item">
					<img src="img/mahiyanganaya/minipe.jpg" class="img-responsive center-block" height=430 width=100%>
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5596.233033160303!2d80.992
				82070465202!3d7.3388083606029015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451737830861" 
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
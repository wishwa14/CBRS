<!DOCTYPE html >
<html >
<head>

<title>Kandy Bungalow</title>



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

		<h1>Kandy Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">Kandy circuit bungalow is situated just a few meters away from Kandy town with a 
				breathtaking view of the Kandy lake and the sacred Temple of the Tooth. 
				This bungalow is surrounded with many religious temples and historical places of the Sri
				Lankan history. This 2 storey circuit bungalows includes 3 bedrooms, a bathroom, a living room,
				a kitchen with an attached dining room. It has a garage that can be used to park 3 vehicles
				at a time. While staying in this bungalow, you can have a morning walk around the Kandy lake 
				in the morning experiencing the cool and refreshing weather of the countryside.</p>
			
				<img src="img/kandy/kandy.jpg" width="100%" height="200"  />
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

				calendar('kandy');
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
					<img src="img/kandy/kandytemple.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/kandy/knuckles.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src= "img/kandy/peradeniya.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/kandy/pinnawala.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>
					
					<div class="item">
					<img src="img/kandy/polgolla.jpg"class="img-responsive center-block" height=430 width=100%>
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7915.152451495549!2d80.63866335851934!3d7.2
				88960434950206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1451545724521" 
				width="100%" height="430" frameborder="0" style="border:0; padding-left:0px" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
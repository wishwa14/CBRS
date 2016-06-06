<!DOCTYPE html >
<html >
<head>

<title>Ambalanthota Bungalow</title>



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

		<h1>Ambalanthota Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">Ambalanthota circuit bungalow is located 2km away 
				from the Tangalle- Hambanthota main road. It is built on the bank of the Walawe river with a
				magnificent view of the stream. The circuit bungalow has 3 double bedrooms, a living room, a
				kitchen and a lovely veranda facing the river. There is an open area in the premises for outdoor
				activities. The bungalow is next to a place, where boat rides are available. Whilst at the bungalow,
				guests are able to explore many attractions within the surrounding area.</p>
			
				<img src="img/ambalanthota/ambalanthota.jpg" width="100%" height="200"  />
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

				calendar('ambalanthota');
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
					<img src="img/ambalanthota/bundala.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/ambalanthota/mahapalessa.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/ambalanthota/mattala.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/ambalanthota/weerawilat.jpg" class="img-responsive center-block" height=430 width=100%>
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13343.534789474068!2d81.01740
				988535303!3d6.1230813904585775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451739018253"
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
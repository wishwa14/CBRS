<!DOCTYPE html >
<html >
<head>

<title>Galle Bungalow</title>

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

		<h1>Galle Bungalow</h2>
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
				<p style="text-align:justify; font-size:15px">Galle circuit bungalow is a one of the oldest
				circuit bungalows that belongs to NSB, which has a breathtaking and panoramic view of Galle 
				beach. The bungalow consists of 3 bedrooms with attached bathrooms, a dining room, a living 
				room, a kitchen and a garage. This bungalow is always filled with pleasant and fresh sea winds 
				that comes right away from the Indian Ocean.  And also you will be able to watch Toddy Tapping
				(the process of collecting juice from the bud of the coconut trees which results in Palm Wine 
				locally known as ‘RAA’)  from the coconut trees in the premises..</p>
			
				<img src="img/galle/galle.jpg" width="100%" height="200"  />
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

				calendar('galle');
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
					<img src="img/galle/duch.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/galle/gallefort.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/galle/gallel.jpg"  class="img-responsive center-block" height=430 width=100%>
					</div>

					<div class="item">
					<img src="img/galle/rumassala.jpg"class="img-responsive center-block" height=430 width=100%>
					</div>
					
					<div class="item">
					<img src="img/galle/unawatuna.jpg" class="img-responsive center-block" height=430 width=100%>
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
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11222.336894784876!2d80.2195
				4226301845!3d6.036490992128354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451739126669"
				width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
</body>
</html>
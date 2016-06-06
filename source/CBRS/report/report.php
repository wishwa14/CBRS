<!DOCTYPE html >
<html >
<head>

<title>Generate Report</title>
<link rel="stylesheet" type="text/css" href="report.css">

<style>
body {
    background-color: #ff9900;
}

tab { padding-left: 23em; }

</style>
</head>

<body>
<?php include '../adminnavbar.php';?>

<link rel="stylesheet" type="text/css" href="report.css">
<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 104px; padding-right: 105px; ">
	<div class="col-sm-2 col-md-2 pull-right">
        <form style="margin-top:20px; margin-right:-200px;">
			
            <div class="input-group-btn">
                <button class="btn btn-default"onclick="myFunction()">Print Report</button>
				<script>
					function myFunction() {
					window.print();
				}
				</script>
            </div>
        
        </form>
    </div>

	<h1>Generate Report</h2>
	<hr noshade>
	
</section>

<section>
    <div class="container">
		<div class="row">
		
            <div class="col-lg-12 col-md-12 col-sm-12 "  >
				<div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
				
				
				<?php

include '../dbconnect.php';

/* date settings */
$month = (int) (isset($_GET['month']) ? $_GET['month'] : date('m'));
$year = (int)  (isset($_GET['year']) ? $_GET['year'] : date('Y'));


/* select month control */
$select_month_control = ' <form class="form-inline"  role="form"><div class="form-inline"><select class="form-control" name="month" id="month">';
for($x = 1; $x <= 12; $x++) {
  $select_month_control.= '<option value="'.$x.'"'.($x != $month ? '' : ' selected="selected"').'>'.date('F',mktime(0,0,0,$x,1,$year)).'</option>';
}
$select_month_control.= '</select>';

/* select year control */
$year_range = 7;
$select_year_control = '<select class="form-control" name="year" id="year">';
for($x = ($year-floor($year_range/2)); $x <= ($year+floor($year_range/2)); $x++) {
  $select_year_control.= '<option value="'.$x.'"'.($x != $year ? '' : ' selected="selected"').'>'.$x.'</option>';
}
$select_year_control.= '</select>';

/* "next month" control */
$next_month_link = '<a href="?month='.($month != 12 ? $month + 1 : 1).'&year='.($month != 12 ? $year : $year + 1).'" class="control">Next Month &gt;&gt;</a>';

/* "previous month" control */
$previous_month_link = '<a href="?month='.($month != 1 ? $month - 1 : 12).'&year='.($month != 1 ? $year : $year - 1).'" class="control">&lt;&lt;  Previous Month</a>';

/* bringing the controls together */
$controls = '<form method="get">'.$select_month_control.$select_year_control.'&nbsp;<input  class="btn btn-default" type="submit" name="submit" value="Go"  /></form></div></form>';
$cont='<form method="get">'.$previous_month_link.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$next_month_link.' </form>';

/* print Title: name of the month and the year */
echo '<h2 class="molink">'.date('F',mktime(0,0,0,$month,1,$year)).' '.$year.'</h2>';



	//display reservations details in a table//

	// Select all data , display them in a table//
	if($month < 10) {
         $month = str_pad($month, 2, '0', STR_PAD_LEFT);
         }
	$select = "SELECT * FROM temp_reservation_table WHERE Arrival_Date LIKE '$year-$month%'";
	$result = mysqli_query($conn, $select);
	
	if (!$result) {
    die('Invalid query: ' . mysql_error());
	}
	$num_row= mysqli_num_rows($result) ;

	
	if ($num_row> 0) {
					
	// print table heads//
		
		echo ('<div class="table-responsive" style=" padding-top:50px;"><table border=1 class="table table-bordered" style="text-align: center;">
			<thead style="background-color:#e0a839;">
			<tr>
				<th>Res. No</th>
				<th>Name</th>
				<th>NSB ID</th>
				<th>NIC NO</th>
				<th>Branch</th>
				<th>Circuit Bungalow</th>
				<th>No.of people</th>
				<th>Arrival Date</th>
				<th>Arrival Time</th>
				<th>Departure Date</th>
				<th>Departure Time</th>
				<th>Amount</th>
				
				<th>receipt no</th>
				
				
			</tr></thead>');
	 
	 
			echo("<tbody>");
			// output data from row by row
			while($row = mysqli_fetch_assoc($result)) {
				//echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
				echo (
				"<tr>
					<form method=\"post\" action=\"delete_reservation.php\">
						<td>" . $row["id"] . "</td>
						<td>" . $row["Name"] . "</td>
						<td>" . $row["NSB_ID"] . "</td>
						<td>" . $row["NIC_NO"] . "</td>
						<td>" . $row["Branch"] . "</td>
						<td>" . $row["Circuit_Bungalow"] . "</td>
						<td>" . $row["No_of_People"] . "</td>
						<td>" . $row["Arrival_Date"] . "</td>
						<td>" . $row["Arrival_Time"] . "</td>
						<td>" . $row["Departure_Date"] . "</td>
						<td>" . $row["Departure_Time"] . "</td>
						<td>" . $row["Amount"] . "</td>
						
						<td>" . $row["receipt_no"] . "</td>
						
						
					</form>
				</tr>");
				
			}
		echo '<section style=" padding-top: 10px; padding-bottom: 20px;
				padding-left: 0px; padding-right: 105px; "><div class="con1 drop_down_list1">'.$controls.'</div></section>';	
		echo ("</tbody></table></div>");
		} 

		else {
			
			echo '<section style=" padding-top: 10px; padding-bottom: 20px;
			padding-left: 0px; padding-right: 105px; "><div class="con1 drop_down_list1">'.$controls.'</div></section>';	
			echo ("<p style=\"padding-top:30px; text-align:center\">Sorry, there are no Reservations</p>");
		}

		echo '<div class="cont">'.$cont.'</div>';
		//getting the number of reservations this month
		echo "<br><br><br><strong style=\" font-size:20px;\">This month's reservations : ".$num_row." </strong>";		
		
		
		//checking the monthly income
		$query = "SELECT SUM(Amount) AS value_sum FROM temp_reservation_table WHERE Arrival_Date LIKE '$year-$month%' and receipt_no!='Null'";
		$result1 = mysqli_query($conn, $query);
	
		if (!$result1) {
			die('Invalid query: ' . mysql_error());
		}
		 

	
		if ( mysqli_num_rows($result1) > 0) {
				
				$row = mysqli_fetch_assoc($result1);
				$sum_month = $row['value_sum'];
			}

		echo "<br><strong style=\" font-size:20px;\">This month's income : Rs. ".$sum_month." </strong>";		
				
		//checking the yearly income
		
		$query = "SELECT SUM(Amount) AS value_sum1 FROM temp_reservation_table WHERE Arrival_Date LIKE '$year%' and receipt_no!='Null'";
		$result2 = mysqli_query($conn, $query);
	
		if (!$result2) {
			die('Invalid query: ' . mysql_error());
		}
		 

	
		if ( mysqli_num_rows($result2) > 0) {
				
				$row = mysqli_fetch_assoc($result2);
				$sum_year = $row['value_sum1'];
			}

		echo "<br><strong style=\" font-size:20px;\">This year's income : Rs. ".$sum_year." </strong>";			
				
				
				

				/* get the number of reservations from reservation table, bungalow wise*/			
				function get_res($bun,$m,$y){
					
					include '../dbconnect.php';
					
					$select = "SELECT * FROM temp_reservation_table WHERE Arrival_Date LIKE '$y-$m%' and `Circuit_Bungalow` = '$bun' ";
					$result3 = mysqli_query($conn, $select);
					if (!$result3) {
						die('Invalid query: ' . mysql_error());
					}
					 
					return mysqli_num_rows($result3);
					
				}
				
				$m=$month;
				$y=$year;
				
				$ambalanthota = get_res('ambalanthota',$m,$y);
				$anuradhapura = get_res('anuradhapura',$m,$y);
				$badulla = get_res('badulla',$m,$y);
				$bandarawela = get_res('bandarawela',$m,$y);
				$beliatta = get_res('beliatta',$m,$y);
				$chawakachcheri = get_res('chawakachcheri',$m,$y);
				$dambulla = get_res('dambulla',$m,$y);
				$galle = get_res('galle',$m,$y);
				$kandy = get_res('kandy',$m,$y);
				$katharagama = get_res('katharagama',$m,$y);
				$mahiyanganaya = get_res('mahiyanganaya',$m,$y);
				$maravila = get_res('maravila',$m,$y);
				$nuwaraEliya = get_res('nuwaraEliya',$m,$y);
				$nuwaraEliyaNew = get_res('nuwaraEliyaNew',$m,$y);
				
				
				/*get the number of cancellations for each admin - monthly*/
				function get_can($admin,$m,$y){
					
					include '../dbconnect.php';
					
					$select = "SELECT * FROM cancel_reservation WHERE canceled_date LIKE '$y-$m%' and `delete_by` = '$admin' ";
					$result4 = mysqli_query($conn, $select);
					if (!$result4) {
						die('Invalid query: ' . mysql_error());
					}
					 
					return mysqli_num_rows($result4);
					
				}
				
				$wishwa = get_can('wishwa hettige',$m,$y);
				$kaweesha = get_can('kaweesha wijewickrama',$m,$y);
				$oshadi = get_can('oshadi wattuhewa',$m,$y);
				$dilushika = get_can('dilushika weerawardhana',$m,$y);
				$ayodya = get_can('ayodya balasooriya',$m,$y);
				$tharushi = get_can('tharushi samarajeewa',$m,$y);
				
				
				?>
				
				
				
				</div>
			</div>
			
			
			
			<!-- bar chart for reservation summary-->
			 <div class="col-lg-12 col-md-12 col-sm-12 "  >
				<div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
					
					<div class="container">
						<div class=" col-sm-12 "  >
							<h3>Reservations Summary</h3>
							<!-- draw yearly cancellations bar chart-->
					
							<script>
					
								$(document).ready(function() {
									$.getScript('http://www.chartjs.org/assets/Chart.js',function(){
    
									var data = {
										labels : ["Ambalanthota", "Anuradhapura", "Badulla", "Bandarawela", "Beliatta", "Chawakachcheri", 
											"Dambulla", "Galle", "Kandy", "Katharagama", "Mahiyangana", "Maravila", "Nuwara Eliya", "Nuwara Eliya New"],
										datasets : [
											{
											fillColor : "	#ffad00",
											strokeColor : "#ff9700",
											pointColor : "#000000",
											pointStrokeColor : "#000000",
										data : [<?php echo $ambalanthota?>,
												<?php echo $anuradhapura?>,
												<?php echo $badulla?>,
												<?php echo $bandarawela ?>,
												<?php echo $beliatta?>,
												<?php echo $chawakachcheri?>,
												<?php echo $dambulla?>,
												<?php echo $galle?>,
												<?php echo $kandy?>,
												<?php echo $katharagama?>,
												<?php echo $mahiyanganaya?>,
												<?php echo $maravila?>,
												<?php echo $nuwaraEliya?>,
												<?php echo $nuwaraEliyaNew?>
							
											]
										}
									]
									}
			
									var options = {
										animation: true
									};
  
									//Get the context of the canvas element we want to select
									var c = $('#myChart');
									var ct = c.get(0).getContext('2d');
									var ctx = document.getElementById("myChart").getContext("2d");
 					     /*********************/
									new Chart(ctx).Bar(data,options);
  
								})
							});
							</script>
							<canvas class="col-sm-4" id="myChart"class="well" style="padding-top:40px;
							padding-right: 30px; background-color:#faf2e0; height: 400px; width:100%"></canvas>
						</div>
					</div>		
				</div>
			</div>
			<!-- bar chart for reservation summary ends here-->
			
			
			<!-- bar chart for cancellation summary-->
			<div class="col-lg-12 col-md-12 col-sm-12 "  >
				<div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
				padding-left: 30px; padding-right: 30px;">
				
					<!-- monthly cancellations-->
					<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 "  >
						
							<h3>Monthly Cancellations</h3>
							<br>
							<canvas  id="myChart1"style="padding-top:40px; margin-top:20px;
							padding-right: 30px; background-color:#faf2e0; height: 500px; width:100%"></canvas>
							<script>
							
							$(document).ready(function() {
								$.getScript('http://www.chartjs.org/assets/Chart.js',function(){
    
									var data = {
										labels : ["Wishwa Hettige", "Kaweesha Wijayawickrama", "Oshadi Wattuhewa", "Dilushika Weerawardhana"," Ayodya Balasooriya ", "Tharushi Samarajeewa", ],
										datasets : [
											{
												fillColor : "	#ffad00",
												strokeColor : "#ff9700",
												pointColor : "#000000",
												pointStrokeColor : "#000000",
										data : [<?php echo $wishwa?>,
												<?php echo $kaweesha?>,
												<?php echo $oshadi?>,
												<?php echo $dilushika ?>,
												<?php echo $ayodya?>,
												<?php echo $tharushi?>
												]
											}
										]
									}
  
									var options = {
										animation: true
									};
  
										//Get the context of the canvas element we want to select
									var c = $('#myChart2');
									var ct = c.get(0).getContext('2d');
									var ctx = document.getElementById("myChart1").getContext("2d");
									/*********************/
									new Chart(ctx).Bar(data,options);
  
								})
							});
							</script>
						</div>
						
						<!-- yearly cancellations-->
						
						<div class="col-lg-6 col-md-6 col-sm-12 "  >
							
							
							<h3>Yearly Cancellations</h3>
									
									
							<div class="col-sm-5 col-md-5 pull-right">
								<form class="form-inline" name="myform"  method="post" style="margin-top:-35px; margin-bottom:42px;" >
									<div class="form-group">
										<select class="form-control" name="year1" id="year1" >
											<option value="" hidden><?php echo (int)  (isset($_POST['year1']) ? $_POST['year1'] : date('Y'));?></option>
											<option>2013</option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
											<option>2019</option>
											
										</select>
										<button type="submit" class="btn btn-default ">Go</button>
									</div>
									
								</form>
							</div>
								
							<?php
							
							$year1 = (int)  (isset($_POST['year1']) ? $_POST['year1'] : date('Y'));
							
							/*get the number of cancellations for each admin - yearly*/
				
							function get_can1($admin,$y){
						
								include '../dbconnect.php';
					
								$select = "SELECT * FROM cancel_reservation WHERE canceled_date LIKE '$y%' and `delete_by` = '$admin' ";
								$result = mysqli_query($conn, $select);
								if (!$result) {
									die('Invalid query: ' . mysql_error());
								}
					 
							return mysqli_num_rows($result);
					
							}
				
							$wishwa1 = get_can1('wishwa hettige',$year1);
							$kaweesha1 = get_can1('kaweesha wijewickrama',$year1);
							$oshadi1 = get_can1('oshadi wattuhewa',$year1);
							$dilushika1 = get_can1('dilushika weerawardhana',$year1);
							$ayodya1 = get_can1('ayodya balasooriya',$year1);
							$tharushi1 = get_can1('tharushi samarajeewa',$year1);
				
							
							
							
							?>		
							
							<!-- draw yearly cancellations bar chart-->		
							<canvas  id="myChart2" style="padding-top:40px;
							padding-right: 30px; background-color:#faf2e0; height: 500px; width:100%"></canvas>
							<script>
					
							$(document).ready(function() {
								$.getScript('http://www.chartjs.org/assets/Chart.js',function(){
    
									var data = {
										labels : ["Wishwa Hettige", "Kaweesha Wijayawickrama", "Oshadi Wattuhewa", "Dilushika Weerawardhana"," Ayodya Balasooriya ", "Tharushi Samarajeewa", ],
										datasets : [
											{
												fillColor : "	#ffad00",
												strokeColor : "#ff9700",
												pointColor : "#000000",
												pointStrokeColor : "#000000",
										data : [<?php echo $wishwa1?>,
												<?php echo $kaweesha1?>,
												<?php echo $oshadi1?>,
												<?php echo $dilushika1 ?>,
												<?php echo $ayodya1?>,
												<?php echo $tharushi1?>
												]
											}
										]
									}
  
									var options = {
										animation: true
									};
  
										//Get the context of the canvas element we want to select
									var c = $('#myChart2');
									var ct = c.get(0).getContext('2d');
									var ctx = document.getElementById("myChart2").getContext("2d");
									/*********************/
									new Chart(ctx).Bar(data,options);
  
								})
							});
							</script>
							
							
									
								
							
						</div>
					</div>		
				</div>
			</div>
			<!-- bar chart for cancellation summary ends here-->




			
		</div>
	</div>
</section>
</body>
</html>
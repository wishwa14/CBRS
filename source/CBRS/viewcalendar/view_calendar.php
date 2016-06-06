<?php
   include '../navbar1.php';
   
   ?>
<link rel="stylesheet" type="text/css" href="calender2.css">
<title>View Calendar</title>
<section style=" padding-top: 10px; padding-bottom: 20px;
   padding-left: 104px; padding-right: 105px; ">
   <h1>View Calendar</h1>
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
                  	
                  /* draws a calendar */
                  function draw_calendar($month,$year,$events = array()){
                  	
                  
                  	/* draw table */
                  	
                  	$calendar = '<table cellpadding="3" cellspacing="0" class="calendar">';
                  
                  	/* table headings */
                  	$headings = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                  	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
                  
                  	/* days and weeks vars now ... */
                  	$running_day = date('w',mktime(0,0,0,$month,1,$year));
                  	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
                  	$days_in_this_week = 1;
                  	$day_counter = 0;
                  	$dates_array = array();
                  
                  	/* row for week one */
                  	$calendar.= '<tr class="calendar-row">';
                  
                  	/* print "blank" days until the first of the current week */
                  	for($x = 0; $x < $running_day; $x++):
                  		$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
                  		$days_in_this_week++;
                  	endfor;
                  
                  	/* keep going with days.... */
                      for($list_day = 1; $list_day <= $days_in_month; $list_day++):
                      $calendar.= '';
                  /* add leading zero in the day number */
                      if($list_day < 10) {
                           $list_day = str_pad($list_day, 2, '0', STR_PAD_LEFT);
                           }
                  /* add leading zero in the month number */
                      if($month < 10) {
                           $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                           }
                   
                      $event_day = $year.'-'.$month.'-'.$list_day; 
                       
                      $calendar.= '<td class="calendar-day"><div style="position:relative;height:10px;">';
                       
                       
                      /* add in the day number */
                              $calendar.= '<div class="day-number">'.$list_day.'</div>';
                               
                              $event_day = $year.'-'.$month.'-'.$list_day;
                              
                              echo "<br />";
                              if(isset($events[$event_day])) {
                                  foreach($events[$event_day] as $event) {
                                      $calendar.= '<div class="event" >'.$event['id'].'</div>';
                  					
                  					
                                  }
                              }
                              else {
                                  $calendar.= str_repeat('<p>&nbsp;</p>',2);
                              }
                          $calendar.= '</div></td>';
                          if($running_day == 6):
                              $calendar.= '</tr>';
                              if(($day_counter+1) != $days_in_month):
                                  $calendar.= '<tr class="calendar-row">';
                              endif;
                              $running_day = -1;
                              $days_in_this_week = 0;
                          endif;
                          $days_in_this_week++; $running_day++; $day_counter++;
                      endfor;
                   
                  
                  	/* finish the rest of the days in the week */
                  	if($days_in_this_week < 8):
                  		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
                  			$calendar.= '<td class="calendar-day-np">&nbsp;</td>';
                  		endfor;
                  	endif;
                  
                  	/* final row */
                  	$calendar.= '</tr>';
                  	
                  
                  	/* end the table */
                  	$calendar.= '</table>';
                  
                  	/** DEBUG **/
                  	$calendar = str_replace('</td>','</td>'."\n",$calendar);
                  	$calendar = str_replace('</tr>','</tr>'."\n",$calendar);
                  	
                  	/* all done, return result */
                  	echo $calendar;
                  }
                  
                  
                  
                  function random_number() {
                  	srand(time());
                  	return (rand() % 7);
                  }
                  
                  
                  /* date settings */
                  $month = (int) (isset($_GET['month']) ? $_GET['month'] : date('m'));
                  $year = (int)  (isset($_GET['year']) ? $_GET['year'] : date('Y'));
                  $bun = (isset($_GET['bun']) ? $_GET['bun'] : 'ambalanthota');
                  
                  /* select month control */
                  $select_month_control = '<form class="form-inline"  role="form"><div class="form-inline"><select class="form-control" name="month" id="month">';
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
                  
                  /* select bungalow control */
                  $select_bun_control = '<select class="form-control" style="width:203px;" name="bun" id="bun">';
                  $bun_list = array("ambalanthota", "anuradhapura", "badulla", "bandarawela", "beliatta", "chawakachcheri", "dambulla", "galle", "kandy", "katharagama", "mahiyangana", "maravila", "nuwaraEliya", "nuwaraEliyaNew");
                  $bun_list_length = count($bun_list);
                  for($x = 0; $x < $bun_list_length; $x++) {
                  	$select_bun_control.= '<option value="'.$bun_list[$x].'"'.($bun_list[$x] != $bun ? '' : ' selected="selected"').'>'.$bun_list[$x].'</option>';
                  }
                  
                  $select_bun_control.= '</select>';
                  
                  /* "next month" control */
                  $next_month_link = '<a href="?month='.($month != 12 ? $month + 1 : 1).'&year='.($month != 12 ? $year : $year + 1).'&bun='.($bun).'" class="control">Next Month &gt;&gt;</a>';
                  
                  /* "previous month" control */
                  $previous_month_link = '<a href="?month='.($month != 1 ? $month - 1 : 12).'&year='.($month != 1 ? $year : $year - 1).'&bun='.($bun).'" class="control">&lt;&lt;   Previous Month</a>';
                  
                  /* bringing the controls together */
                  $controls = '<form method="get">'.$select_bun_control.$select_month_control.$select_year_control.'&nbsp;<input class="btn btn-info" type="submit" name="submit" value="Go"  /></form></div></form>';
                  $cont='<form method="get" style="margin-left:280px;"'.$previous_month_link.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$next_month_link.' </form>';
                  
                  /* get all events for the given month */
                  $events = array();
                    if($month < 10) {
                           $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                           }
                  
                  	$query = "SELECT id, Arrival_Date, Departure_Date FROM reservation_table WHERE Circuit_Bungalow='$bun' AND (Arrival_Date LIKE '$year-$month%' OR Departure_Date LIKE '$year-$month%')";
                  	//$query1 = "SELECT id, DATE_FORMAT(date2,'%Y-%m-%d') AS date2 FROM today_service WHERE date2 LIKE '$year-$month%'";
                  
                  	
                  	$result1 = mysqli_query($conn, $query) ;
                  	while($row = mysqli_fetch_assoc($result1)) {//Array ( [id] => 0 [date] => 2015-10-26 ) Array ( [id] => 0 [date] => 2015-10-01 )
                  		//print_r($row);
                  		$arr= array();
                  		$id=$row['id'];
                  		
                  		$d1=$row['Arrival_Date'];
                  		
                  		
                  		
                  		$d2=$row['Departure_Date'];
                  		
                  		$dateprefix=substr($d1,0,8);
                  		$dateprefix1=substr($d2,0,8);
                  		
                  		$d1=substr($d1,8,12);
                  		
                  		$d2=substr($d2,8,12);
                  		
                  		
                  		
                  		
                  		$d1=$d1/1;
                  		
                  		
                  		$d2=$d2/1;
                  		
                  		if($d1>$d2){
                  			for($d1;$d1<=31;$d1++){
                  				$fomartedday=$d1;
                  				$arr['id']=$id;
                  				if(strlen($d1)==1){
                  					$fomartedday='0'.$d1;
                  					
                  				}
                  				$arr['Arrival_Date']=$dateprefix.$fomartedday;
                  				
                  				$events[$dateprefix.$fomartedday][] = $arr;
                  				
                  				
                  			}
                  			for($d1=1;$d1<=$d2;$d1++){
                  				$fomartedday=$d1;
                  				$arr['id']=$id;
                  				if(strlen($d1)==1){
                  					$fomartedday='0'.$d1;
                  					
                  				}
                  				$arr['Arrival_Date']=$dateprefix1.$fomartedday;
                  				
                  				$events[$dateprefix1.$fomartedday][] = $arr;
                  				
                  				
                  			}
                  			
                  		}else{
                  			for($d1;$d1<=$d2;$d1++){
                  				$fomartedday=$d1;
                  				
                  				$arr['id']=$id;
                  				if(strlen($d1)==1){
                  					$fomartedday='0'.$d1;
                  					
                  				}
                  				$arr['Arrival_Date']=$dateprefix.$fomartedday;
                  				$events[$dateprefix.$fomartedday][] = $arr;
                  			}	
                  		}				
                  		
                  	
                  	
                  }
                  /* print Title: name of the month and the year */
                  echo '<h2 class="molink">'.date('F',mktime(0,0,0,$month,1,$year)).' '.$year.'</h2>';
                  
                  
                  /* print form to select the year and the month */
                  echo '<div class="con">'.$controls.'</div>';
                  
                  
                  
                  /* print the calander with the relavant month, year and marked reserved dates. */
                  draw_calendar($month,$year,$events);
                  echo '<div class="cont1">'.$cont.'</div>';
                  
                  
                  echo '<div style="clear:both;"></div>';
                  
                  
                  echo '<br /><br />';
                  
                  
                  ?>
            </div>
         </div>
      </div>
   </div>
</section>
</body>
</html>
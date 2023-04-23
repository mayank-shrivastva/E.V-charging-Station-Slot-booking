<?php
function build_calendar($month, $year) {
$mysqli = new mysqli('localhost', 'root','', 'bookingcalendar');
  /* 	*/
    $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    $numberDays = date('t', $firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];
    $dateToday = date('Y-m-d');

    $prev_month = date('m', mktime(0, 0, 0, $month-1, 1, $year));
    $prev_year = date('Y', mktime(0, 0, 0, $month-1, 1, $year));
    $next_month = date('m', mktime(0, 0, 0, $month+1, 1, $year));
    $next_year = date('Y', mktime(0, 0, 0, $month+1, 1, $year));
    $calendar = "<center><h2>$monthName $year</h2>";

    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=$prev_month&year=$prev_year'>PrevMonth</a>"; 
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";
    $calendar .= "<a class='btn btn-primary btn-xs' href='?month=$next_month&year=$next_year'>Next Month</a></center>";
    $calendar .= "<br><table class='table table-bordered'>";
    $calendar .= "<tr>";

    foreach($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }
$currentDay = 1;
    $calendar .= "</tr><tr>";
    
    if($dayOfWeek > 0) {
        for($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    while($currentDay <= $numberDays) {
        if($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $dayName = strtolower(date('I', strtotime($date)));
        $eventNum=0;
		$today=$date==date('Y-m-d')?"today":"";
		if($date<date('Y-m-d')){
			$calendar.="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
		} 
			else{
			$calendar.="<td class ='$today'><h4>$currentDay</h4><a href='book.php?dte=".$date."'
			class='btn btn-success btn-xs'>book</a></button>";
		}
			
		
		
		 $calendar."</td>";
		
		
        $currentDay++;
        $dayOfWeek++; 
    }

    if($dayOfWeek < 7) {
        $remainingDays = 7 - $dayOfWeek;
        for($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td class ='empty'></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";

    return $calendar;
}
?>
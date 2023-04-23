<?php
$mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');

if(isset($_GET['dte'])){
$date = $_GET['dte'];
 $stmt = $mysqli->prepare('select * from c1 where date= ?');
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            $stmt->close();
        }
    }
}
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$owner_email = $_POST['owner_email'];
$timeslot = $_POST['timeslot'];
$carmodel = $_POST['carmodel'];
$carnumber = $_POST['carnumber'];
$stmt = $mysqli->prepare("INSERT INTO c1 (name, timeslot, email, owner_email, date,carmodel,carnumber) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param('sssssss', $name, $timeslot, $email, $owner_email, $date,$carmodel,$carnumber);
$stmt->execute();
$msg = "<div class='alert alert-success'>Booking Successfull</div>";
$bookings[]=$timeslot;
$stmt->close();
$mysqli->close();
}

$duration = 60;
$cleanup = 0;
$start ="08:00";
$end= "24:00";
 
function timeslots($duration, $cleanup, $start, $end){
	$start = new DateTime($start);
	$end = new DateTime($end);
	$interval = new DateInterval("PT".$duration."M");
	$cleanupInterval = new DateInterval("PT".$cleanup."M");
	$slots = array();
	
	for($intStart = $start; $intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
		$endperiod = clone $intStart;
		$endperiod->add($interval);
		if($endperiod>$end){
			break;
}
 $slots[]= $intStart->format("H:iA")."-". $endperiod->format("H:iA");
 

	}
	return $slots;
}
?>
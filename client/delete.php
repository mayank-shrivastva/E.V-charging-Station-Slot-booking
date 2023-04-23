<?php
include 'config.php';
$sql = "DELETE FROM s1 where id=7";
if(mysqli_query($conn, $sql)){
	header("Location: charging-station.php");
}
?>
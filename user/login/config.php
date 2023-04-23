<?php

$conn = mysqli_connect("localhost", "root", "", "bookingcalendar");

if (!$conn) {
    echo "Connection Failed";
}
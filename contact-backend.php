<?php

 
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "bookingcalendar";
    
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
	$subject = $_POST['subject'];
    
    

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
     

    $query = "INSERT INTO `contact`(`name`, `email`, `msg` , `subject`) VALUES ('$name','$email','$msg', '$subject')";
    
    $result = mysqli_query($connect,$query);
     

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
}
header("Location: contact.php");
?>
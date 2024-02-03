<?php

if($_SERVER['SERVER_NAME']=="localhost"){
    $conn = new mysqli('localhost', 'root', '', 'bsafeapp_bsafe');
}else{
    $conn = new mysqli('localhost', 'bsafeapp_bsafe_root', 'Bs@fe#2024', 'bsafeapp_bsafe');
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
?>
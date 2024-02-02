<?php
	$conn = new mysqli('localhost', 'root', '', 'bsafeapp_bsafe');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
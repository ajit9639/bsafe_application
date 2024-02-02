<?php
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['login']) || trim($_SESSION['login']) == ''){
		//header('location: ../Registration/Login/login.php/');
	}

	$sql = "SELECT * FROM tbl_registration1 WHERE mobno = '".$_SESSION['login']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>
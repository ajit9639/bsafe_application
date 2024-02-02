<?php
	session_start();
	session_destroy();

	header('location: ../Registration/pages/Login/');
?>
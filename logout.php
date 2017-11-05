<?php
	session_start();
	unset($_SESSION['sess_username']);
	session_destroy();

	header("Location: signup.php");
	exit;
?>
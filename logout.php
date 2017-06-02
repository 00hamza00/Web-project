<?php
	$conn = new mysqli('localhost', 'root', '', 'database4');

	// check connection
	if (mysqli_connect_errno()) {
	exit('Connect failed: '. mysqli_connect_error());
	}

		
session_start();

session_unset();
header("location:test.php");
?>

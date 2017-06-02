<?php
	SESSION_START();
	unset($_SESSION['id']);
	session_destroy();
	@header("location:admin-login.php");
?>
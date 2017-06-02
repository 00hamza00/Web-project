<?php error_reporting(0);
	$db = mysql_connect("localhost", "root", "" ,"database4"); // your host, user, password
	  if(!$db) { echo mysql_error(); }
	$select_db = mysql_select_db("database4"); // database name
	  if(!$select_db) { echo mysql_error(); }
?>
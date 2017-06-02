<?php






require_once("assets/connection/connection.php");
error_reporting(E_ALL);

$username=$_POST['username'];
$password=$_POST['password'];

$query = mysql_query("select * from admin1 where username = '$username' and password = '$password'");

echo $query;
if($row = mysql_fetch_array($query))
{
	@SESSION_START();
    $_SESSION["id"]=$row["id"];
	@header("location:admin-index.php?");
}
else
{
	@header("location:admin-login.php?login=0");
}
?>
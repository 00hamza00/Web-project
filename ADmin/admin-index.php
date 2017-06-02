<?php
	require_once("assets/connection/connection.php");
	error_reporting(E_ALL);	
	SESSION_START();
	if(isset($_SESSION['id']))
	{
		$adminId = $_SESSION['id'];
		$adminData = mysql_fetch_array(mySql_query("select * from admin1 where id=$adminId"));
	}
	else
	{
		@header("location:deny.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Admin</title>
    
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body style="overflow:hidden">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-2 admin-menu">
			
				<div class="admin-name text-center">
					<p>Welcome <span><?php echo $adminData['username']?>!</span></p>
				</div>
				<div class="the-menu">
					<ul>
						<li><a href="admin-index.php">Home</a></li>
						<li><a href="view-games.php">View Game</a></li>
						<li><a href="delete-games.php">Delete Game</a></li>
						<li><a href="update-games">Update Game</a></li>
						<li><a href="add-games.php">Add Game</a></li>
						<li><a href="view-users.php">View Users</a></li>
						<li><a href="admin-logout-action.php">Log Out</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-10 data-wrapper pull-right">
				<img class="img-responsive" src="assets/images/bg-3.jpg" style="height:100%;">
			</div>
		</div>
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$(".admin-menu,.data-wrapper").height($(window).height());
		});
	</script>
  </body>
</html>
<?php
	require_once("assets/connection/connection.php");
	error_reporting(E_ALL);	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Crazy Gamer</title>
    
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body style="overflow:hidden">
	<div class="fixed-background">
		<div class="col-xs-12 col-sm-8 col-md-3 col-lg-3 student-login center-align">
			<h4><i class="fa fa-unlock fa-1x"></i> Login To your account</h4>
			<div class="error-message">Incorrect Username or Password</div>
			<div class="registration-fields">
				<form id="form" class="registration-fields" action="admin-login-action.php" name="admin-login" method="post" enctype="multipart/form-data">
					<input name="username" class="username" type="text" placeholder="Username"></input>
					<input name="password" class="password" type="password" placeholder="Password"></input>
					<button type="submit" value ="submit" class="btn btn-default admin-login-button">Log in</button>
				</form>
				
			</div>
		</div>
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$(".fixed-background").css({"height":$(window).height(),"width":$(window).width()});
			<?php if(isset($_GET['login']))
			{
				$login = $_GET['login'];
				?>
				if(<?php echo $login;?>==0)
				{
					$(".error-message").show();
				}
				<?php
			}
			?>
		});
	</script>
  </body>
</html>



	<?php
$connection=mysqli_connect("localhost","root","","database4");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT *
FROM `database4`.`games` ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{
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
					
				</div>
				<div class="the-menu">
					<ul>
						<li><a href="admin-index.php">Home</a></li>
						<li><a href="view-games.php">View Game</a></li>
						<li><a href="delete-games.php">Delete Game</a></li>
						<li><a href="update-games.php">Update Game</a></li>
						<li><a href="add-games.php">Add Game</a></li>
						<li><a href="view-users.php">View Users</a></li>
						<li><a href="admin-logout-action.php">Log Out</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-10 data-wrapper pull-right">
				<h3 class="mainHeading text-center" style="padding:20px 0px">Games</h3>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					
	
	

<table class="table" border="1">
<tr>
<th ><span>
Game</span></th>
<th><span>
Rating</span></th>
<th><span>
Link</span></th>
<th><span>
Picture</span></th>
<th><span>
Video</span></th>
<th><span>
Review</span></th>

</tr>

<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td>
<div><span><?php echo $row[1]; ?></span></div></td>
<td>
<div><span><?php echo $row[2]; ?></span></div></td>
<td>
<div><span><?php echo $row[3]; ?></span></div></td>
<td>
<div><span><?php echo $row[4]; ?></span></div></td>
<td>
<div><span><?php echo $row[5]; ?></span></div></td>
<td>
<div><span><?php echo $row[6]; ?></span></div></td>



</tr>
<?php
}}
?>
					</table>
				</div>
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
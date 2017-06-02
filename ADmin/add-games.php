
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
						<li><a href="add-game.php">Add Game</a></li>
						<li><a href="view-users.php">View Users</a></li>
						
						<li><a href="admin-logout-action.php">Log Out</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-10 data-wrapper pull-right">
				<h3 class="mainHeading text-center" style="padding:20px 0px">Games</h3>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					
					<form name="htmlform" enctype="multipart/form-data" method="post" action="add-games.php">
<table width="450px" border="0" bgcolor="#6699FF" align="center">
<tr>
<th valign="top" colspan="2" bgcolor="#666699">
Add New Games
</th>
</tr>
<tr>
<td valign="top">
<label for="game_name">Game Name</label>
</td>
<td valign="top">
<input type="text" name="game_name" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="rating">Rating</label>
</td>
<td valign="top">
<input type="text" name="rating" maxlength="80" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="link">Link</label>
</td>
<td valign="top">
<input type="text" name="link" maxlength="30" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="picture">Picture</label>
</td>
<td valign="top">
<input type="file" name="pic" maxlength="30" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="video">Video</label>
</td>
<td valign="top">
<input type="text" name="video" maxlength="30" size="30">
</td>
</tr>

<tr>
<td valign="top">
<label for="reviews">Reviews</label>
</td>
<td valign="top">
<textarea name="reviews" maxlength="1000" cols="25" rows="6"></textarea>
</td>
</tr>

<tr>
<td valign="top">
<label for="count">Count</label>
</td>
<td valign="top">
<input type="text" name="count" maxlength="30" size="30">
</td>
</tr>

<tr>
<td colspan="2" style="text-align:center">
<input type="submit" name="submit" value="Submit">
</td>
</tr>


</table>
</form>
</body>
</html>


<?php

if(isset($_POST["submit"])){
$db=mysqli_connect("localhost","root","","database4");
if ($db->connect_errno){
  die ("died");
}

$game_name = $_POST['game_name'];
$rating = $_POST['rating'];
$link = $_POST['link'];
$video = $_POST['video'];
$reviews = $_POST['reviews'];
$count=$_POST['count'];
$pic_name = $_FILES['pic']['name'];
$pic_type = $_FILES['pic']['type'];
$pic_size = $_FILES['pic']['size'];
$pic_tmpname= $_FILES['pic']['tmp_name'];

if($pic_size<10000000 && $pic_type=="image/jpeg" )
{
$destination= "uploads/".rand().$pic_name;
move_uploaded_file($pic_tmpname,$destination);
$query="INSERT INTO `games` (`game_id`, `game_name`, `rating`,`link` ,`picture`,`video`, `reviews`,`count`) VALUES (NULL, '$game_name', '$rating','$link','$destination','$video','$reviews','$count')";
mysqli_query($db,$query);
echo "". mysqli_error($db);
}
}

?>
					
					
						
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
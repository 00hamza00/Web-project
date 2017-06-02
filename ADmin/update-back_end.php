<?php

$connection=mysqli_connect("localhost","root","","database4");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}




if(isset($_POST["uid"])){
$id= $_POST['uid'];
ECHO "haihd";
$game_name = $_POST['game_name'];
$rating = $_POST['rating'];
$link = $_POST['link'];
$video = $_POST['video'];
$reviews = $_POST['reviews'];
$count=$_POST['count'];
/*$pic_name = $_FILES['pic']['name'];
$pic_type = $_FILES['pic']['type'];
$pic_size = $_FILES['pic']['size'];
$pic_tmpname= $_FILES['pic']['tmp_name'];*/

//if($pic_size<10000000 && $pic_type=="image/jpeg" )
//{
	$destination= "uploads/"; //.rand().$pic_name;
//move_uploaded_file($pic_tmpname,$destination);
//echo" id=".$id;

$query="UPDATE games SET game_name = '$game_name',
rating = '$rating',
picture = '$destination',
video = '$link',
reviews = '$reviews', 
count='$count'
WHERE game_id ='$id' ";
mysqli_query($connection,$query);

echo"Error=". mysqli_error($connection);
header("location:update-games.php");
}



?>

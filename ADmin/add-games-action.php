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
$query="INSERT INTO `database4`.`games` (`game_id`, `game_name`, `rating`, `picture`,
`videos`, `reviews`,`count`) VALUES (NULL, '$game_name', '$rating','$link','$destination','$video','$reviews','$count')";
mysqli_query($db,$query);
}
}

?>
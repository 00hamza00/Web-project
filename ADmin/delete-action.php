<?php
  $id = $_GET['uid'];
  echo $id;
  $connection= mysqli_connect("localhost","root","","database4");
  if($connection->connect_error)
  {
      echo "connection failed";
  }
//echo "rabia";
  $query="DELETE FROM games WHERE game_id=$id";
  $result=mysqli_query($connection,$query);
  if($result=='true')
  {
      echo "deleted successfully";
  }
else
{
    echo "not deleted";
}
  echo $result;
  mysqli_close($connection);
  header("location:delete-games.php");
?>
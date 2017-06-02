<?php
echo "hi";

$db=mysqli_connect("127.0.0.1","root","","database4");
if ($db->connect_errno){
  die ("died");
}


	$user_name=$_POST['user_name'];
	echo $user_name;
    $email=$_POST['email'];
	echo $user_name;
    $password=$_POST['password'];
	echo $user_name;
    $cpassword=$_POST['cpassword'];
	echo $user_name;

	$sql="INSERT INTO  `database4`.`users` (`user_name`,`email`,`password`) VALUES ('$user_name', '$email', 'md5($password)')";
	echo $sql;

if(mysqli_query($db,$sql))
    {
        echo "records added";
    }
    else
    {
        echo "error";
    }
      
	  mysqli_close($db);


?>
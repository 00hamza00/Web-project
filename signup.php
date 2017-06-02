<?php
session_start(); // Starting Session
$error=false; // Variable To Store Error Message
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   if (empty($_POST['user_name']) || empty($_POST['password'])||empty($_POST['email']))
   {
     echo "Username or Password is invalid";
   }
}
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword']; 
    $connection= new mysqli("localhost","root","","database4");
    if($connection->connect_error)
    {
		echo "Error Connecting";
	}
    echo "connection established";
    if($password!=$cpassword)
    {
        echo "error in registering please try again later";
    }
    else
    {
        
       $sql="INSERT INTO users (user_name,email,password) VALUES ('" . $user_name . "', '" . $email . "', '" . md5($password) . "')";
       if(mysqli_query($connection,$sql))
       {
          echo "records added";
       }
       else
       {
          echo "error";
       }
    }
	header('location:test.php');
    mysqli_close($connection);
  ?>
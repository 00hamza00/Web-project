<?php
  session_start();
  $error='';
  if(isset($_POST['submit']))
  {
      if(empty($_POST['password'])||empty($_POST['email']))
      {
         echo "email or Password is invalid";    
      }
      else
      {
         $email=$_POST['email'];
         $password=$_POST['password'];
          
          
          //connection with database
          $connection=mysqli_connect("localhost","root","","database4");
          if(mysqli_connect_error())
          {
              echo "error establishing connection";
          }
          else
          {
              echo "established connection";
              
              if(isset($email)&&isset($password))
              {
                  $pass="SELECT user_id, user_name FROM user where email='$email' and password='$password' ";
                  $result=mysqli_query($connection,$pass);
              }
              
              if(mysqli_num_rows($result)==1)
              {
                  while($row=mysqli_fetch_assoc($result))
                  {
                      $user_id=$row["user_id"];
                      $user_name=$row["user_name"];
                      
                      echo "successfully logged in"."<br>";
                  }
              }
              else
              {
                  include ("PC.html");
                  echo "0 results";
              }
          }
      }
    }
         
?>
<?php

      session_start();  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $email=$_REQUEST['email'];
      $password=$_REQUEST['password'];
      $connection=mysqli_connect("localhost","root","","database4");
      if($connection->connect_error)
      {
          echo "connection error";
      }
      else
      {
          //$user_name="SELECT username FROM user";
          $login="SELECT * FROM users WHERE email='$email'";
          $selectlogin=mysqli_query($connection,$login);
          $table_password="";
          $table_username="";
          if(mysqli_num_rows($selectlogin)>0)
          {
              while($row=mysqli_fetch_assoc($selectlogin))
              {
                  $table_password=$row['password'];
                  $encrypted_password=md5($password);
                  $table_username=$row['user_name'];
                  if($encrypted_password==$table_password)
                  {
                      $user_id=$row['user_id'];
					 $_SESSION['user_id']=$user_id;
					 $user_name=$row['user_name'];
					 $_SESSION['user_name']=$user_name;
					 header("location:test1.php?user_name".$table_username);
                      $query=http_build_query($_POST);
                      $header=("location:test1.php?".$query);
                      $_SESSION['user']=$table_username;
                  }
                  else
                  {
                      echo "incorrect login";
                  }
              }  echo 'sucessfull login';
			   echo $_SESSION['user_id'];
          }

      }
  }
  header("location:test1.php");
         
?>
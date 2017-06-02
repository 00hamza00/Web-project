





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
						<li><a href="">Update Game</a></li>
						<li><a href="add-games.php">Add Game</a></li>
						<li><a href="view-users.php">View Users</a></li>
				
						<li><a href="admin-logout-action.php">Log Out</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-10 data-wrapper pull-right">
				<h3 class="mainHeading text-center" style="padding:20px 0px">Games</h3>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					
						
<?php
                          $connection=new mysqli("localhost","root","","database4");
                              
                              if($connection->connect_error)
                              {
                                  echo "error connecting";
                              }
                                 
                                  $sql="SELECT * FROM games";
                                  $result=mysqli_query($connection,$sql);
                                  if(mysqli_num_rows($result)>0)
                                  {
                                   ?>
                                   <table class="table" border="2">
                                       <tr>
                                           <th>game id</th>
                                           &nbsp;&nbsp;
                                           <th>game name</th>
                                           &nbsp;&nbsp;
                                           <th>rating</th>
                                           &nbsp;&nbsp;
                                           <th>link</th>
                                           &nbsp;&nbsp;
                                           <th>picture</th>
                                           &nbsp;&nbsp;
                                           <th>video</th>
                                           &nbsp;&nbsp;
                                           <th>reviews</th>
                                           &nbsp;&nbsp;
                                           <th></th>
                                       </tr>
                                       <?php
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row[0];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[2];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[3];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[5];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[6];?>
                                                </td>
                                                <td>
                                                    <a href="delete-action.php?	uid=<?php echo $row[0];?>">DELETE</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                  }
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
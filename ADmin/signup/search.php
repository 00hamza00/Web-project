<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="search.php" method="get">
<input type="email" name="email" placeholder="enter email to search" required>
<input type="submit" name="search">

<?php
	if(isset($_GET["search"])){
$connection=mysqli_connect("localhost","root","","testdb");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$email=$_GET['email'];		
$query="SELECT *
FROM `u` Where user_email = '$email'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{
?>
<table border="1">
<tr>
<th>
User Name
</th>
<th>
User Email
</th>
<th>
User CNIC
</th>
<th>
User Phone No.
</th>
<th>
User Commetns
</th>
<th>
User Image
</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td>
<?php echo $row[1]; ?>
</td>
<td>
<?php echo $row[2]; ?>
</td>
<td>
<?php echo $row[3]; ?>
</td>
<td>
<?php echo $row[5]; ?>
</td>
<td>
<?php echo $row[4]; ?>
</td>
<td>
<img src="<?php echo $row[6]; ?>" height="100" width="100" />
</td>
</tr>
<?php
}}
else
{
	echo " <br><br><h3>No result Found</h3><br>Try searching Again...!!!";
}
	}
?>
</body>
</html>
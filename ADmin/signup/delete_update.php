<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Record Deletion Example</title>
</head>
<body>
<?php
$connection=mysqli_connect("127.0.0.1","root","","testdb");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT *
FROM `u` ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)
{
?>
<table border="1">
<tr>
<th ><span>
User Name</span></th>
<th><span>
User Email</span></th>
<th><span>
User CNIC</span></th>
<th><span>
User Phone No.</span></th>
<th><span>
User Commetns</span></th>
<th><span>
User Image</span></th>
<th><span>
Actions</span></th>
<th><span>
Update</span></th>

</tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td>
<div><span><?php echo $row[1]; ?></span></div></td>
<td>
<div><span><?php echo $row[2]; ?></span></div></td>
<td>
<div><span><?php echo $row[3]; ?></span></div></td>
<td>
<div><span><?php echo $row[5]; ?></span></div></td>
<td>
<div><span><?php echo $row[4]; ?></span></div></td>
<td>
<div><img src="<?php echo $row[6]; ?>" height="100" width="100" /></div></td>
<td>
<div><span><a href="delete.php?uid=<?php echo $row[0]; ?>"
onclick="return confirm("Do you really want to delete this record?")">DELETE</a></span></div></td>
<td>
<div><span><a href="update.php?uid=<?php echo $row[0]; ?>"
onclick="return confirm("Do you really want to delete this record?")">UPDATE</a></span></div></td>
</tr>
<?php
}}
?>
</table>
</body>
</html>
<?php
if(isset($_GET['uid'])){
$id = $_GET['uid'];
$connection=mysqli_connect("localhost","root","","testdb");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$query="DELETE FROM `testdb`.`u` WHERE `users`.`user_Id` = $id";
mysqli_query($connection,$query);}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$connection=mysqli_connect("localhost","root","","testdb");
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
?>
</table>
</body>
</html>
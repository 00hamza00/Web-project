<html>
<head>
<title> Update Example</title>
</head>
<body>
<?php
	if(isset($_GET['uid'])){
$id = $_GET['uid'];
$connection=mysqli_connect("localhost","root","","testdb");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT *
FROM `u`
WHERE `user_Id`= $id";
	$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1)
{
$row = mysqli_fetch_array($result);
?>
<form name="htmlform" enctype="multipart/form-data" method="post" action="update.php">
<table width="450px" border="0" bgcolor="#6699FF" align="center">
<input type="hidden" name="id" value="<?php echo $row[0]?>" >
<tr>
<th valign="top" colspan="2" bgcolor="#666699">
User Registration Form
</th>
</tr>
	<tr><td valign="top">

<label for="first_name"> id </label>
</td>
<td valign="top">
<input type="text" name="name" maxlength="50" size="30" value="<?php echo $row[0]?>" >
</td></tr>
<tr>

<td valign="top">

<label for="first_name"> Name </label>
</td>
<td valign="top">
<input type="text" name="name" maxlength="50" size="30" value="<?php echo $row[1]?>" >
</td>
</tr>
<tr>
<td valign="top">
<label for="email">Email Address </label>
</td>
<td valign="top">
<input type="text" name="email" maxlength="80" size="30" value="<?php echo $row[2]?>" >
</td>
</tr>
<tr>
<td valign="top">
<label for="first_name">CNIC No. </label>
</td>
<td valign="top">
<input type="text" name="cnic" maxlength="50" size="30" value="<?php echo $row[3]?>">
</td>
</tr>
<tr>
<td valign="top">
<label for="telephone">Telephone Number</label>
</td>
<td valign="top">
<input type="text" name="telephone" maxlength="30" size="30" value="<?php echo $row[4]?>">
</td>
</tr>
<tr>
<td valign="top">
<label for="comments">Comments on Your Self </label>
</td>
<td valign="top">
<textarea name="comments" maxlength="1000" cols="25" rows="6" > <?php echo $row[5]?></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" name="update" value="Update Record">
</td>
</tr>
</table>
</form>
<?php
}}
		
?>
</body>
</html>
<?php
if(isset($_POST['update'])){
echo $id = $_POST['id'];
$connection=mysqli_connect("localhost","root","","testdb") or die ("could not create connection"); 

echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $cnic = $_POST['cnic'];
echo $telephone = $_POST['telephone'];
echo $comments = $_POST['comments'];
echo "<br>";
echo $query="UPDATE `testdb`.`u` SET `user_Name` = '$name', `user_Email` = '$email', `user_CNIC` = '$cnic', `user_Telephone` = '$telephone', `user_Comments` = '$comments' WHERE `users`.`user_id` =$id";
mysqli_query($connection,$query);
	echo "<script>alert('Record updated');
		window.location = 'delete.php';</script>
		";
}
?>
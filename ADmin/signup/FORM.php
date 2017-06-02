<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forms Lab</title>
</head>
<body>
<form name="htmlform" enctype="multipart/form-data" method="post" action="FORM.php">
<table width="450px" border="0" bgcolor="#6699FF" align="center">
<tr>
<th valign="top" colspan="2" bgcolor="#666699">
User Registration Form
</th>
</tr>
<tr>
<td valign="top">
<label for="first_name">First Name *</label>
</td>
<td valign="top">
<input type="text" name="first_name" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top"">
<label for="last_name">Last Name *</label>
</td>
<td valign="top">
<input type="text" name="last_name" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="email">Email Address *</label>
</td>
<td valign="top">
<input type="text" name="email" maxlength="80" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="first_name">CNIC No. *</label>
</td>
<td valign="top">
<input type="text" name="cnic" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="telephone">Telephone Number</label>
</td>
<td valign="top">
<input type="text" name="telephone" maxlength="30" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="telephone">Your Picture</label>
</td>
<td valign="top">
<input type="file" name="pic" maxlength="30" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="comments">Comments on Your Self *</label>
</td>
<td valign="top">
<textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" name="submit" value="Submit">
</td>
</tr>
</table>
</form>
</body>
</html>


<?php

if(isset($_POST["submit"])){
$db=mysqli_connect("127.0.0.1","root","","testdb");
if ($db->connect_errno){
  die ("died");
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
$telephone = $_POST['telephone'];
$comments = $_POST['comments'];
$pic_name = $_FILES['pic']['name'];
echo $pic_type = $_FILES['pic']['type'];
$pic_size = $_FILES['pic']['size'];
$pic_tmpname= $_FILES['pic']['tmp_name'];
$name = $first_name." ".$last_name;
if($pic_size<10000000 && $pic_type=="image/jpeg" )
{
$destination= "uploads/".rand().$pic_name;
move_uploaded_file($pic_tmpname,$destination);
$query="INSERT INTO `testdb`.`u` (`user_Id`, `user_Name`, `user_Email`, `user_CNIC`,
`user_Comments`, `user_Telephone`, `user_Picture`) VALUES (NULL, '$name', '$email', '$cnic', '$comments',
'$telephone', '$destination')";
mysqli_query($db,$query);
}
}
?>
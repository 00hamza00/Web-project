<html>
<body>


<?php

$connection=mysqli_connect("localhost","root","","database4");
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
$id="";
if(isset($_GET['uid'])){
	$id= $_GET['uid'];

$query="SELECT *
FROM `games`
WHERE `game_id`= $id";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1)
{
$row = mysqli_fetch_array($result);
?>






<table class="table" width="450px" border="0"  align="center">
<tr>
<th valign="top" bgcolor="#6699FF" colspan="2" >
Update Game
</th>
</tr>
<tr>
<form action="update-back_end.php" enctype="multipart/form-data" method="POST">
<td valign="top">
<label for="game_name">Game Name</label>
</td>
<td valign="top">
<input type="text" name="game_name" placeholder ="<?php echo$row[1];?>" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top">
<label for="rating">Rating</label>
</td>
<td valign="top">
<input type="text" name="rating"placeholder ="<?php echo$row[2];?>" maxlength="80" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="link">Link</label>
</td>
<td valign="top">
<input type="text" name="link" placeholder ="<?php echo$row[3];?>" maxlength="30" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="picture">Picture</label>
</td>
<td valign="top">
<input type="file" name="pic" placeholder ="<?php echo$row[4];?>" maxlength="30" size="30">
</td>
</tr>


<tr>
<td valign="top">
<label for="video">Video</label>
</td>
<td valign="top">
<input type="text" name="video"  maxlength="30" size="30">
</td>
</tr>

<tr>
<td valign="top">
<label for="reviews">Reviews</label>
</td>
<td valign="top">
<textarea name="reviews"  placeholder ="<?php echo$row[6];?>" maxlength="1000" cols="25" rows="6"></textarea>
</td>
</tr>

<tr>
<td valign="top">
<label for="count">Count</label>
</td>
<td valign="top">
<input type="text" name="count" placeholder ="<?php echo$row[7];?>" maxlength="30" size="30">
</td>
</tr>

<tr>
<input type="hidden" name="uid" value="<?php echo$row[0];?>"/>
<td colspan="2" style="text-align:center">
<input  type="submit" value="Submit">


</form>

</td>
</tr>


</table>

</body>
</html>
<?php
}}

?>

<?php 

	$db = new mysqli("localhost","root","","database4");
	if ($db->connect_errno) {
		die("Connection failed: ");
	}

/*	if($_REQUEST['req']=='get'){
		$search_data=$_REQUEST['query'];
		$query="INSERT INTO `words`.`queries` (`suggest`) VALUES ('$search_data'); ";
		$result=mysqli_query($conn,$query);
		
	} */

	if($_REQUEST['req']!='get'){
		$searching = $_REQUEST['query'];
		
		if(strlen($searching)>=1){
		
		$query = "SELECT * FROM `database4`.`games` WHERE game_name LIKE '$searching%';";
		$result = mysqli_query($db , $query);
		
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_array($result)){
?>
	<a href="review1.PHP?uid=<?php echo $rows[0]; ?>"><?php echo $rows["game_name"]?></a>
	<br>
<?php
		}}
	}
	}
?>
						
					
					
					
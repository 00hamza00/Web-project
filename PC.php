


<html lang="en">
     <head>
     <title>PC</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/timeshift.ico">
     
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">    
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/jquery-ui.js"></script>     
     <script src="js/superfish.js"></script>
     <script src="js/jquery.fancybox-1.3.4.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.flexslider.js"></script>
     <script> $(window).load(function() {
  $(function() {
   $("a.various").fancybox();

  });
  
});
     </script>
</head>
     <body>
       <div class="main">

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="test.php"><img src="images/logo2.png" alt="" ></a> </h1>
		  
		   
		  
		  
		  
		  <div class="search_block">
              
            <input type="text" placeholder="Search" name="search" id="search" onkeyup="ajax_request();" />
            <a onClick="ajax_request('get');">search</a>
			
			 
          </div>
		  <div class="s_list">
			 
			<span id="txtHint"></span>
			
			</div>
		  
	<script>
	function ajax_request(req){	
	    var query=document.getElementById('search').value;
		if(req == undefined){
			req='';
		}
		
		var xmlhttp=new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		
		xmlhttp.open('GET','data.php?req='+req+'&query='+query,true);
		xmlhttp.send();
	}
</script>
	  
          
           <div class="clear"></div>
      </div>
      </div>
      <div class="menu_block">
        <div class="container_12">
          <div class="grid_12">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="test.php">Reviews  </a></li>
                   <li><a href="news.html">News </a></li>
                   <li><a href="video.php">Videos</a></li>
                   <li><a href="tayyab contact.php">Contact Us</a></li>
                  <li ><a href="PC.php">PC</a></li>
                   
                   
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
        </div>
    </div>
</header>

<!--=======content================================-->

<div class="content">
  <div class="container_12">
    <div class="grid_4">
      <h2>TOP 10 GAMES</h2>
	   
	   <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games"; 

// perform the query and store the result
$result = $conn->query($sql);
 echo '<ul class="list2">';
// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  for($i=1 ; $i<=5 ; $i++){
			$row = mysqli_fetch_array($result);
	  
	  
      echo '<li><a href="review1.php?uid='.$row['game_id'].'">'. $row['game_name'].'</a></li>';
	//echo '<li><a href="review1.php">'. $row['game_name'].'</a></li>';
	echo '<br />';
	//echo '<br />'. $row['game_name'];
  }
  echo '</ul>';
}

else {
  echo '0 results';
}

$conn->close();
 ?>

      <div class="text2">coming soon</div>
	  
	  
  <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM upcoming_games";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    
	 echo '<h4><a href="#"></a>'.$row["game_name"]. '</h4>';
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
	  echo '<h5>Release Date: '.$row["release_date"]. '</h5>';
		echo'</br>';
		echo'</br>';
	

	  
       }
  
}

else {
  echo '0 results';
}

$conn->close();
 ?>
	  
	  
	  
      
    </div>
    <div class="grid_8">
      <div id="tabs">
      <div class="tab_top">
      <div class="tab_title">Editor's Choice</div>
      <ul>
        <li><a href="#tabs-1">ARTICLES</a></li>
        <li><a href="#tabs-2">VIDEOS</a></li>
      </ul>
      </div>
  <div id="tabs-1">
   <h3><a href="#"></a>Top Games</h3>
   
   
     <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  for($i=1 ; $i<=3 ; $i++){
			$row = mysqli_fetch_array($result);
    
	 echo '<h3><a href="#"></a>'.$row["game_name"]. '</h3>';
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
	 
	  echo "<h4>Reviews:</h4>";
	    echo '<h6><a href="review1.php?uid='.$row['game_id'].'">'. $row['reviews'].'</a></>';
	  //echo '<h6>'.$row["reviews"]. '<h6>';
		echo'</br>';
		echo'</br>';
	

	  
       }
  
}

else {
  echo '0 results';
}

$conn->close();
 ?>
   
   
   
   <!-- Rating -->
   
   
   
   <!-- Rating -->
   
   <hr> </hr>
   
   
  <div id="tabs-2">
  <div class="grid_4 alpha">
        <div class="img_inner rel"><img src="images/4.jpg" alt=""><a href="https://www.youtube.com/embed/-YmeAuGKmyY" 
		class="various iframe"><span></span></a></div>

        <div class="text1"><a href="#">HEADING Here</a></div>Description Here
      </div>
  <div class="grid_4 alpha">
  <div class="img_inner rel"><img src="images/4.jpg" alt=""><a href="https://www.youtube.com/embed/-YmeAuGKmyY" class="various iframe "><span></span></a></div>
    <div class="text1"><a href="#">Heading</a></div>
    Description
	 <br><br>
  </div>
  </div>
 
    </div>
  </div>
</div>
</div>

<!--=======content END================================-->


<!-- FACEBOOB ANS OTHER SOCIAL MEDIA LINKS-->
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_4">
      <h4>Latest News</h4>
      <p><span><a href="news.php">Latest News</a></span> <br></p>
      <span><a href="news.php">Latest News</a> </span><br> 
    </div>
    <div class="grid_4">
      <h4>Top Games</h4>
      <ul>
        <li><a href="http://store.steampowered.com/app/570/Dota_2/">Dota</a></li>
        <li><a href="http://oceanofgames.com/call-of-duty-modern-warfare-remastered-free-download/">Call of Duty</a></li>
		<li><a href="http://oceanofgames.com/battlefield-1-free-download/">Battlefield</a></li>
		<li><a href="http://oceanofgames.com/fifa-15-pc-game-free-download/">FIFA</a></li>
		<li><a href="http://oceanofgames.com/need-for-speed-rivals-free-download/">Need for Speed</a></li>
      </ul>
    </div>
    <div class="grid_4">
      <h4>crazy gamer on:</h4>
      <ul>
        <li><a href="https://twitter.com/">Twitter</a></li>
        <li><a href="https://www.facebook.com/">Facebook</a></li>
        <li><a href="https://www.youtube.com/">YouTube</a></li>
        <li><a href="https://plus.google.com/">Google+</a></li>
      
      </ul>
    </div>
  </div>
</div>
<!--==============================footer=================================-->

  <footer>
       
           <div class="container_12">

        <div class="grid_12"><div class="copy">
      Craxy Gamer &copy; 2017 All Rights Reserved HAMZA,TAYYAB,RABIA  &nbsp; | &nbsp;  <a href="">Privacy Policy</a> <!--{%FOOTER_LINK} --></div>
       </div>
       <div class="clear"></div>
      </div>
  </footer>
       
           <div class="container_12">

        <div class="grid_12"><div class="copy">
      Craxy Gamer &copy; 2017 All Rights Reserved HAMZA,TAYYAB,RABIA  &nbsp; | &nbsp;  <a href="">Privacy Policy</a> <!--{%FOOTER_LINK} --></div>
       </div>
       <div class="clear"></div>
      </div>
  </footer>
</div> 
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>

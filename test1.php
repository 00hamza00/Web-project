
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/timeshift.ico">
     
     <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/signup.css">
     <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css"> 
	 
     <script src="js/jquery.js"></script>
     <script src="js/jquery.flexslider.js"></script>
     <script src="js/script.js"></script>    
     <script src="js/superfish.js"></script>
     <script src="js/jquery.fancybox-1.3.4.js"></script>
	 
    
     
     <script>
      $(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 280,
    itemMargin: 0,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
  $(function() {
    $( "#tabs" ).tabs();
   $("a.various").fancybox();

  });
  
});
     </script>
	 
    
     </head>
     <body class="page1">
       <div class="main">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="test.php"><img src="images/logo2.png" alt="" ></a> </h1>
	<?php
			
		session_start();
		$checkSession = $_SESSION['user_id'];

	if(!isset($_SESSION['user_id'])){
    ?> 
			<div class="links">
            <a href="login1.php" class="btn">Login</a>  &nbsp;<span>|</span>&nbsp;  <a  onclick="displayModal()" class="btn">Join</a>
			</div>
<?php
}
else{      
?>	
		  <div class="links">
            <a href="logout.php" class="btn">Logout</a> &nbsp;<span>|</span>&nbsp;  <a class="btn"><?php echo $_SESSION['user_name']; ?></a>
          </div>
		  
		   <div class="search_block">
              
            <input type="text" placeholder="Search" name="search" id="search" onkeyup="ajax_request();" />
            <a onClick="ajax_request('get');">search</a>
			
			
			
			
			 
          </div>
		  
		  
		  <div class="s_list1">
			 
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
                   <li><a href="news.php">News </a><ul>
                        <li><a href="#">Up Coming</a></li>
                       
                        <li><a href="#">Top Ranked</a>
                          <ul>
                            <li><a href="#">1-10</a></li>
                          </ul>
                        </li>
                     </ul></li>
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

<!--==============================header END=================================-->


<!--==============================SLIDER=================================-->

<div class="slider_wrapper">
  <div class="container_12">
    <div class="grid_12">
      <!-- Place somewhere in the <body> of your page -->
    <div id="slider" class="flexslider">
      <ul class="slides">
        <li>
          <img src="images/3.jpg" alt=""  width="940" height="420"/>
        </li>
        <li>
          <img src="images/slide1.jpg" alt="" />
        </li>
        <li>
          <img src="images/slide2.jpg" alt="" />
        </li>
        <li>
          <img src="images/slide3.jpg" alt="" />
        </li>
        <!-- items mirrored twice, total of 12 -->
      </ul>
    </div>
    <div id="carousel" class="flexslider">
      <ul class="slides">
        <li>
          <img src="images/thumb.jpg" alt="" />
        </li>
        <li>
          <img src="images/thumb1.jpg" alt="" />
        </li>
        <li>
          <img src="images/thumb2.jpg" alt="" />
        </li>
        <li>
          <img src="images/thumb3.jpg" alt="" />
        </li>
        <!-- items mirrored twice, total of 12 -->
      </ul>
    </div>
  </div>
</div>
</div>

<!--==============================Slider End=================================-->

<!--=======content================================-->

<div class="content page1">
  <div class="container_12">
    <div class="grid_8">
      <h2>Features</h2>

      <div>
	    
	  
        <div class="block1">
		
		
            <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games where game_id=1";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
   	      echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
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
   
        </div>
		
		
		
        <div class="block1">
                    <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games where game_id=17";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
   	      echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
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
        </div>
		
		
        <div class="block1">
                <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games where game_id=1";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
   
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';

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
        </div>
        <div class="clear"></div>
      </div>
      <div id="tabs">
      <div class="tab_top">
      <div class="tab_title">Admin's Picks</div>
      <ul>
        <li><a href="#tabs-1">ARTICLES</a></li>
        <li><a href="#tabs-2">VIDEOS</a></li>
      </ul>
      </div>
  <div id="tabs-1">
   
   <h3>Popular Games</h3>
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
  for($i=1 ; $i<=2 ; $i++){
			$row = mysqli_fetch_array($result);
	  echo'</br>';
    
	 echo '<h3><a href="#"></a>'.$row["game_name"]. '</h3>';
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
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
    
	
  </div>
  
   <div id="tabs-2">
   
  <div class="grid_4 alpha"><div class="img_inner rel"><img src="images/22.jpg" alt=""><a href="http://www.youtube.com/embed/2kodXWejuy0?rel=0" class="various iframe "><span></span></a></div>
    <div class="text1"><a href="#">Heading Here</a></div>
    Description Here
  </div>
  <div class="grid_4 alpha"><div class="img_inner rel"><img src="images/22.jpg" alt=""><a href="http://www.youtube.com/embed/2kodXWejuy0?rel=0" class="various iframe "><span></span></a></div>
    <div class="text1"><a href="#">Heading Here</a></div>
    Description Here
  </div>
  </div>
  


  

</div>
      
    </div>
      <div class="grid_4">
        <a href="#" class="banner">
          <img src="images/logo.png" alt="">
        </a>
        <div class="text2">reviews</div>
        <div class="block2">
          
          <div class="extra_wrapper">
                  <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql ="SELECT * FROM games where game_id=17";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
 for($i=1 ; $i<=3 ; $i++){
			$row = mysqli_fetch_array($result);
	  echo'</br>';
    
	
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
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
           
          </div>
          <div class="clear"></div>
        </div>
		
		
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
 echo '<ul class="list">';
// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  for($i=1 ; $i<=5 ; $i++){
			$row = mysqli_fetch_array($result);
	  
	  
      echo '<li><a href="review1.php?uid='.$row['game_id'].'">'. $row['game_name'].'</a></li>';
	
	
	
  }
  
}
echo'</ul>';

	?>	
	<h2>Editor's Choice</h2>
       <?php
			$result = $conn->query($sql);
			
			// if the $result contains at least one row
			if ($result->num_rows > 0) {
			// output data of each row from $result
			for($i=1 ; $i<=5 ; $i++){
			$row = mysqli_fetch_array($result);
			
			
			
	   ?>
			 
        
        <ul class="blog">
          <li >
            <img src="<?php echo $row['picture'];?>" width="100" height="100" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <p><a href="review1.php?uid=<?php echo $row['game_id'];?>"><?php echo $row['game_name']?> </a></p>
              <em>Breif Description here</em>
            </div>
          </li>
		   <li>
           
          </li>
         
        </ul>
		
		<?php 
			} }
		?>
      </div>
  </div>
</div>

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
</div> 

<!--LIVEDEMO_00 -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
  
  <!--==============================Sign UP================================<button onclick="displayModal()">Sign Up</button>=-->
		  
        <div id="id1" class="modal">
            <form class="modal-content animate" method="post" action="signup.php">
                <div class="imgcontainer">
                    <span onclick="closeModal1()" class="close" title="close modal">&times;</span>
                    <img src="images/login.jpg"  alt="login" class="login">
                </div>
                
                <div class="container">
                    
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="user_name" required>
                    
                    <br>
                    
                    <label><b>Email</b></label>
                    <input type="email" placeholder="Enter email address" name="email" required>
                    
                    <br>
                    
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    
                    <label><b>Confirm Password</b></label>
                    <input type="password" placeholder="Enter Password" name="cpassword" required>
                    <br>
                    
                    <button type="submit">Sign Up</button>     
                    
                </div>
                <div class="container" style="background-color:lightgrey">
                    <button type="button" class="cancelBtn" onclick="closeModal()"><a href="test.php">Cancel</button>
                </div>
            </form>
        </div>
        <script>
            function displayModal()
            {
                var id1= document.getElementById('id1');
                id1.style.display='block';
            }
            function closeModal1()
            {
                var id1= document.getElementById('id1');
                id1.style.display='none';
            }
            var id1= document.getElementById('id1');
            window.onclick = function(event) {
    if (event.target == id1) {
        id1.style.display = "none";
    }
}
        </script>
		 <!--==============================Sign UP=================================--> 

		 <!--===============================Login==================================-->    
            
          
         <!--==============================Login===================================-->
            
		 
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
<?php }?>
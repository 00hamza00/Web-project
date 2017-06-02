<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Videos</title>
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
                   <li><a href="news.php">News </a></li>
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

<!--==============================Ontent=================================-->


<div class="content">
  <div class="container_12">
    <div class="grid_12">
      <h2>videos</h2>
    </div>
    <div class="clear"></div>
    <div class="videos">
      <div class="grid_4">
        <div class="img_inner rel"><img src="images/nfs.jpg"  width="100%" alt=""><a href="https://www.youtube.com/embed/1SGNEnxcdwg?ecver=1"
		class="various iframe"><span></span></a></div>

        <div class="text1"><a href="https://www.needforspeed.com/">NEED FOR SPEED</a></div>Description Here
      </div>
       <div class="grid_4">
        <div class="img_inner rel"><img src="images/dota.jpg" width="100%" alt=""><a href="https://www.youtube.com/embed/-cSFPIwMEq4?ecver=1"
		class="various iframe"><span></span></a></div>

        <div class="text1"><a href="http://dota2.gamepedia.com/Dota_2_Wiki">DOTA</a></div>Description Here
      </div>
	  <div class="grid_4">
        <div class="img_inner rel"><img src="images/ac3.jpg" width="100%" alt=""><a href="https://www.youtube.com/embed/BVUMPrv8oRw?ecver=1" 
		class="various iframe"><span></span></a></div>

        <div class="text1"><a href="https://en.wikipedia.org/wiki/Assassin%27s_Creed_III">ASSASIN CREED 3</a></div>Description Here
      </div>
	  
      <div class="clear"></div>
      <div class="grid_4">
        <div class="img_inner rel"><img src="images/wwe.jpg" width="100%" alt=""><a href="https://www.youtube.com/embed/qhDsN5BYx8s?ecver=1" 
		class="various iframe"><span></span></a></div>
		
        <div class="text1"><a href="http://www.wwe.com/">WWE</a></div>Description Here
      </div>
	 
	  
       <div class="grid_4">
        <div class="img_inner rel"><img src="images/burnout.jpg" width="100%" alt=""><a href="https://www.youtube.com/embed/A9fqPRs8QZE?ecver=1" 
		class="various iframe"><span></span></a></div>

        <div class="text1"><a href="http://www2.ea.com/uk/burnout-3-takedown">Burn OUT</a></div>Description Here
      </div>
	  <div class="grid_4">
        <div class="img_inner rel"><img src="images/fifa.jpg" width="100%"  alt=""><a href="https://www.youtube.com/embed/McWV8ZO9Ado?ecver=1" frameborder="0" allowfullscreen 
		class="various iframe"><span></span></a></div>
		

        <div class="text1"><a href="https://www.fifa.com/interactiveworldcup/">FIFA</a></div>Description Here
      </div>
    </div>
  </div>
</div>

<!--==============================Content END=================================-->

<!-- FACEBOOB ANS OTHER SOCIAL MEDIA LINKS-->
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_4">
      <h4>Latest News</h4>
      <p><span><a href="news.html">NEWS HEADING</a></span> Description<br></p>
      <span><a href="news.html">NEWS HEADING</a> </span>Description<br> 
    </div>
    <div class="grid_4">
      <h4>Top Games</h4>
      <ul>
        <li><a href="#">GAMES LINKS</a></li>
        <li><a href="#">GAMES LINKS</a></li>
		<li><a href="#">GAMES LINKS</a></li>
		<li><a href="#">GAMES LINKS</a></li>
		<li><a href="#">GAMES LINKS</a></li>
      </ul>
    </div>
    <div class="grid_4">
      <h4>crazy gamer on:</h4>
      <ul>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">YouTube</a></li>
        <li><a href="#">Google+</a></li>
        <li><a href="#">Mobile</a></li>
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
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
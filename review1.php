<?php
$id1=$_GET['uid'];
 
?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>News</title>
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
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script> $(window).load(function() {
  $(function() {
   $("a.various").fancybox();

  });
  
});
     </script>
	 
	 <!--  review star script  -->

<script>

function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.demo-table #row-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.demo-table #row-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.demo-table #row-'+id+' li').removeClass('selected');
	$('.demo-table #row-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.demo-table #row-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#row-'+id+' #rating').val((index+1));
		if(index == $('.demo-table #row-'+id+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "add_rating.php",
	data:'id='+id+'&rating='+$('#row-'+id+' #rating').val(),
	type: "POST"
	});
}

function resetRating(id) {
	if($('#row-'+id+' #rating').val() != 0) {
		$('.demo-table #row-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#row-'+id+' #rating').val()) {
				return false;	
			}
		});
	}
} 
</script>
	
<style>

.demo-table {width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#FFF;}
.demo-table th {background: #999;padding: 5px;text-align: left;color:#FFF;}
.demo-table td {border-bottom: #f0f0f0 0px solid;background-color: #1e1e1e;padding: 5px;}
.demo-table td div.feed_title{text-decoration: none;color:#00d4ff;font-weight:bold;}
.demo-table ul{margin:0;padding:0;}
.demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
.demo-table .highlight, .demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
</style>	
	 
	 
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

<!--==============================COntent=================================-->

<div class="content">
  <div class="container_12">
    <div class="grid_12">
      <h2>Reviews</h2>
	  
	  <body>

<table class="demo-table">
<tbody>


<?php


// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}



// SELECT sql query
$sql ="SELECT * FROM games where game_id=$id1 ";

// perform the query and store the result
$result = $conn->query($sql);


if(!empty($result)) {
$i=0;
	
	

foreach ($result as $row) {
?>

<tr>
<td valign="top">

<div id="row-<?php echo $row["game_id"]; ?>">
<input type="hidden" name="rating" id="rating" value="<?php echo $row["rating"]; ?>" />
<ul onMouseOut="resetRating(<?php echo $row["game_id"]; ?>);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($row["rating"]) && $i<=$row["rating"]) {
	$selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $row["game_id"]; ?>);" onmouseout="removeHighlight(<?php echo $row["game_id"]; ?>);" onClick="addRating(this,<?php echo $row["game_id"]; ?>);">&#9733;</li>  
  <?php }  ?>
<ul>
</div>

</td>
</tr>
<?php		
}
}
?>
</tbody>
</table>
</body>
	  
	  
	  
	  
	  
	  
	  
	   <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'database4');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
 
// SELECT sql query
$sql ="SELECT * FROM games where game_id=$id1";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    
	 echo '<h3><a href="#"></a>'.$row["game_name"]. '</h3>';
	 
	
	
	 
     echo '<img src="'.$row["picture"].'" alt="" class="img_inner">';
	 echo '<br>'; echo '<br>';
	 
     echo '<a href="#">'.$row["reviews"].' </a>';
	 echo '<br>'; echo '<br>';
	 
	echo' <span class="likebtn-wrapper" data-theme="black" data-identifier="item_1" data-show_like_label="false" data-counter_clickable="true" 
	 data-counter_frmt="km" data-popup_disabled="true" data-popup_dislike="true" data-share_enabled="false" data-loader_show="true" data-site_id="592ab999fa8fdf042da57fcf"></span>';
	 echo '<br>'; echo '<br>';echo '<br>'; echo '<br>';
  }
  
}

else {
  echo '0 results';
}


 ?>
	<!-- LikeBtn.com BEGIN -->



<script>
	(function(d,e,s)
	{if(d.getElementById("likebtn_wjs"))return;
	a=d.createElement(e);
	m=d.getElementsByTagName(e)[0];
	a.async=1;a.id="likebtn_wjs";
	a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");
	
	</script>
<!-- LikeBtn.com END -->	

	 
  </div>
</div>

<!--comments try->
<!-- Begin Comments JavaScript Code --><script type="text/javascript" async>function ajaxpath_592a87f14ebe5(url){return window.location.href == '' ? url : url.replace('&s=','&s=' + escape(window.location.href));}(function(){document.write('<div id="fcs_div_592a87f14ebe5"><a>&nbsp;&nbsp;<b>User Comments</b>...</a></div>');fcs_592a87f14ebe5=document.createElement('script');fcs_592a87f14ebe5.type="text/javascript";fcs_592a87f14ebe5.src=ajaxpath_592a87f14ebe5((document.location.protocol=="https:"?"https:":"http:")+"//www.freecommentscript.com/GetComments2.php?p=592a87f14ebe5&s=#!592a87f14ebe5");setTimeout("document.getElementById('fcs_div_592a87f14ebe5').appendChild(fcs_592a87f14ebe5)",1);})();</script><noscript><div><a></a></div></noscript><!-- End Comments JavaScript Code --></html>




<!--comments end  ->


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
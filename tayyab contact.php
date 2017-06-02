<<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contact</title>
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
	 
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href='css/custom_contact.css' rel='stylesheet' type='text/css'>  	
	 -->
	 
	 
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
	
	
	<!--==============================Content Start=================================-->
	<div class="content">
	<div class="conatainer_12">
             
                    <div class="grid_12">
                  <h2 style="color:orange;"><strong>Contact Us</strong></h2>
              </div>

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        
		</div>
		</div>
	<!--==============================Content END=================================-->
	
       <!-- FACEBOOB ANS OTHER SOCIAL MEDIA LINKS-->
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_4">
      <h4>Latest News</h4>
      <p><span><a href="index-1.html">NEWS HEADING</a></span> Description<br></p>
      <span><a href="index-1.html">NEWS HEADING</a> </span>Description<br> 
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
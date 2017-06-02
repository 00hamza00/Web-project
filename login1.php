<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body onload="displayModalLogin()">
    
        <div id="id2" class="modal">
            <form class="modal-content animate" method="post" action="login.php">
                <div class="imgcontainer">
                    <span onclick="closeModalLogin()" class="close" title="close modal">&times;</span>
                    <img src="images/login1.jpg" alt="login" class="login">
                </div>
                
                <div class="container">
                    
                    <br>
                    
                    <label style="color:grey;"><b>Email</b></label>
                    <input type="email" placeholder="Enter email address" name="email" required>
                    
                    <br>
                    
                    <label style="color:grey;"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    
                    <br>
                    
                    <button type="submit">Login</button>     
                    
                </div>
                <div class="container" style="background-color:lightgrey">
                    <button type="button" class="cancelBtn" onclick="closeModalLogin()">Cancel</button>
                </div>
            </form>
        </div>
        <script>
            function displayModalLogin  ()
            {
                var id2= document.getElementById('id2');
                id2.style.display='block';
            }
            function closeModalLogin()
            {
                var id2= document.getElementById('id2');
                id2.style.display='none';
            }
            var id2= document.getElementById('id2');
            window.onclick = function(event) {
    if (event.target == id2) {
        id2.style.display = "none";
    }
}
        </script> 
    </body>
</html>
<html>
    <head>
            </head>
    <body>
        
        <div id="id1" class="modal">
		
	
            <form enctype="multipart/form-data" method="post" action="php.php">
                <div class="imgcontainer">
                    <span onclick="closeModal()" class="close" title="close modal">&times;</span>
                    <img src="images/login.jpg" alt="login" class="login">
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
                    
                    <button type="submit" >Sign Up</button>     
                    
                </div>
                <div class="container" style="background-color:lightgrey">
                    <button type="button" class="cancelBtn" onclick="closeModal()">Cancel</button>
                </div>
            </form>
        </div>
        <script>
            function displayModal()
            {
                var id1= document.getElementById('id1');
                id1.style.display='block';
            }
            function closeModal()
            {
                var id1= document.getElementById('id1');
                id1.style.display='none';
            }
            var id1= document.getElementById('id1');
            window.onclick = function(event) {
    if (event.target == id1) 
    {
        id1.style.display = "none";
    }
}
        </script>
    </body>
</html>





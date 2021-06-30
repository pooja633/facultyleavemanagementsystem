<?php

include "dbconn.php";
$login = false;
$showalert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $sql = "Select * from `admin` where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: admin_leave.php");

    }
     else{
         echo "INVALID DATA";
     }
    }

?>
<html>
    <head><link rel="stylesheet" href="admin_login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0>
    </head>
    <body>
        
        <div class="body">
    
        <div class="al">
            <img src="admin.JPEG" height="400px" width="450px" class="pic" >
            
        <div class="ve">
        <h2>ADMIN  LOGIN</h2>    
        <form action="" method="POST">
		 <p>Email:</p>
		 <div class="r">
		<input type="text" name="username" value="" class="w" required>
		</div>
		<p>Password:</p>
		<div class="e">
		<input type="password" name="password" value="" class="pa" required>
		</div>
		<input type="submit" value="Login"  name="submit" class="su">
            </form> 
            
        </div>
        </div>
    
      </div>      
    </body>
</html>
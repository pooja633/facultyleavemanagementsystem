<?php
 
 include "dbconn.php";
 $login = false;
 $showalert = false;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $username = $_POST['username'];
     $password = $_POST['password'];
  
     $sql = "Select * from `faculty_login` where username='$username' AND password ='$password'";
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
     if($num == 1){
         $login = true;
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['username'] = $username;

         header("location: faculty_leave.php");
     }
      else{
          echo "INVALID DATA";
      }
     }
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="faculty_login.css">
    <title>LOGIN </title>
    <style>
body
{
  background-image: linear-gradient(to left, #28313b, #485461);


    /*background-image: linear-gradient(to bottom, #2d388a 0%, #00aeef 100%);*/
    
  
}
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  border: 1px solid black;
  width: 50%;
  margin-left: 20%;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.pic{
	margin-left: 65rem;
	margin-bottom: -44rem;
	margin-top: -2rem;
}

.su{
    margin-top:2.5rem;
	border-radius:2.0rem;
	width:50%;
  margin-left: 25%;
	color:white;
    font-size: 1.5rem;
    background-color:#485461;
	/*background:linear-gradient(to right,#006600 10%,#ff0066 70%);*/
	height:3.0rem;
  letter-spacing: 2px;
	
}
.ve h2
{
    text-align: center;
    padding-bottom: 1.5rem;
   color: #9370db;

}
</style>
  </head>
  <body>
  <?php
     if($login){  
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </div>';
     }

     if($showalert){
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        <strong>Danger!</strong> '.$showalert.'
        </div>';
     }
    ?>

        <div class="body">
        <div class="al"><img src="loginfa.png" height="440px" width="450px" class="pic" >
        <div class="ve">
        <h2>FACULTY  LOGIN</h2>    
        <form action="faculty_login.php" method="POST">
		 <p>USERNAME:</p>
		 <div class="r">
		<input type="text" name="username" value="" class="w" required>
		</div>
		<p>PASSWORD:</p>
		<div class="e">
		<input type="password" name="password" value="" class="pa" required>
		</div>
		<input type="submit" value="Login"  name="submit" class="su">
		</form>
            <div><p class="lo">Don't have account? <a href="faculty_signup.php">Register here</a></p> </div>  
            
        </div>
        </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
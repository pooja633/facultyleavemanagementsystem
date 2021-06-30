<?php
$showerror = false;
$showalert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include "dbconn.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if($password == $cpassword){
    $sql = "INSERT INTO `faculty_login` (`fname`, `last`, `username`, `password`) VALUES ('$firstname', '$lastname', '$username', '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        $showalert = true;
    }
}else{
    $showerror = "PASSWORD DO NOT MATCH";
}

}
?>
<html>
    <head><link rel="stylesheet" href="faculty_signup.css">
<style>
    body
{
    background: linear-gradient(to top, #bdc3c7 0%, #2c3e50 100%);
    
    
}

.ve
{
	
	width:40%;
    background-color:#f5fcfc;
	color:black;
	padding:3.0rem;
	margin-left:35.0rem;
	margin-top:7rem;
    height:;
    border-radius: 2.0rem;
    box-shadow:0.8rem 0.8rem 0.8rem #2c3e50;
    font-size: 1.5rem;
    
	
	
	
}
    .alert {
  padding: 20px;
  background-color: #26083b;
  color: white;
  border: 1px solid black;
  border-radius: 10px;
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
.su{
    margin-top:2.5rem;
	border-radius:2.0rem;
	background-color:#2c3e50;
	color: white;
    font-size: 1.5rem;
	/*background:linear-gradient(to right,#006600 10%,#ff0066 70%);*/
	height:3.5rem;
	width: 95%;
	
}
.ve h2
{
    text-align: center;
    padding-bottom: 1.5rem;
    color:#00416a;

}
</style>
</head>
    <body>
        <?php
     if($showalert) {  
     echo '<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
     <strong>SUCCESS!!</strong> YOU   ARE  SUCCESSFULLY   LOGGED IN .
    </div>';
     }

     if($showerror){
        echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        <strong>Danger!</strong> '.$showerror.'
        </div>';
     }
    ?>

        <div class="ve">
        <h2>FACULTY  REGISTER</h2>    
        <form action="" method="POST">
		<p>Firstname:</p>
		<input type="text" name="firstname" placeholder="" value="" class="pa"> 
        <p>Lastname:</p>
        <input type="text" name="lastname" placeholder="" value="" class="pa">  
		 <p>Username:</p>
		<input type="text" name="username" value="" class="w">
		<p>Password:</p>
		<input type="password" name="password" value="" class="pa">
        <p> Conform Password:</p>
		<input type="password" name="cpassword" value="" class="pa">   
		<input type="submit" value="REGISTER"
               name="submit" class="su">
		</form>
            <div><p class="lo">U have account? <a href="faculty_login.php">LOGIN</a></p> </div>  
            
        </div>
        
            
    </body>
</html>
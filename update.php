<?php
$conn=mysqli_connect("localhost","root","","leavemanage");
?>
<html>
<head>
<style>
   body{
    background-image: linear-gradient(to bottom ,#00416a 10%, #e4e5e6 80%);
   }
   .container{
     height: 30vh;
     width: 50%;
     margin-left: 39%;
     margin-top: 10%;
   }
   .text{
       margin-top: 5px;
       padding: 10px;
       box-sizing: border-box;
       border: none;
       border-bottom: 1px solid black;
       outline: none;
       width: 350px;
    margin-left: -30px;
      background: transparent;
   }

   label{
      text-align: center;
      color: white;
      margin-top: 50%;
      font-size: 23px;
   }
   .submit{
       width: 200px;
       height: 6vh;
       border-radius: 7px;
       font-size: 18px;
       letter-spacing: 2px;
       background: #00416a;
       color:  white;
       margin-left: 25px;       
       font-family: san-serif;
   }
   
.php{
    background-color: ;
    color: #000428;
    height: 20vh;
     width:  400px;
     padding: 20px;
     box-sizing: border-box;
     margin-left: 35%;
     border:  1px solid black;
     border-radius: 10px;


}
</style>
</head>
<body>
<form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="container">
<div class="cont">
<label>ENTER YOUR USERNAME:
</div>
<input class="text" type="text" name="username"><br><br><br>
<input  class="submit" type="submit" name="update" value="UPDATE">
</div>
</form>
<div class="php">
<?php
include "dbconn.php";
if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $sql = "SELECT * FROM `faculty_apply` WHERE `username` = '$username'";
    $result = mysqli_query($conn,$sql);

    while($w = mysqli_fetch_array($result)){
        echo  "HELLO   "     .$w['username']. "      WE  HAVE  RECIEVED YOUR APPLICATION<br><br><br>";
        echo "YOUR  LEAVE HAVE BEEN   "   .$w['status'] ;
    }
}
 ?>
 </div>
</body>
</html>
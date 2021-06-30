<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: login.php");
	exit;
}
?>



 <?php
    include"dbconn.php";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $username = $_POST['username'];
      $dept = $_POST['dept'];
      $fdate = $_POST['fdate'];
      $tdate = $_POST['tdate'];
      $reason = $_POST['reason'];
      $status = $_POST['status'];

      //inserting the data
      $sql = "INSERT INTO `faculty_apply` (`username`, `dept`, `fdate`, `tdate`, `reason`,`status`) VALUES ('$username', '$dept', '$fdate', '$tdate', '$reason', 'NO DATA')";
      $result = mysqli_query($conn,$sql);

      if($result){
          echo "succssfull";
      }else{
          echo "sry";
      }
    }
?>


<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faculty_leave.css">
	<style>
.ab{
  background-color: #2c3e50 ;
  position:fixed;
   top:-0.3%;
   left:0;
  width:100%;
  height:6rem;
}

.menu{
  margin-left: 3rem;
  margin-top: 1rem;
  border-radius: 50%;

}
.update
{
  margin-top: -4.9rem;
  width:15rem;
  border-radius:3em;
  padding: 1rem;
  margin-left: 6.5rem;
  background: #2c3e50;
  font-size: 1.5rem;
  border: 0.05rem solid grey;
  position: fixed;
  color: white;
  letter-spacing: 2px;
}
.update a{
  text-decoration: none;
  color: white;
  letter-spacing: .2rem;
}
.cd{
  margin-left: 9rem;
  margin-top: -3.5rem;
  font-size: 2.3rem;
}
.cd a{
	color: white;
}
.signout
{
  margin-top:2rem;
  width:15rem;
  border-radius:3rem;
  padding: 1rem;
  margin-left: 6.2rem;
  background: #2c3e50;
  font-size: 1.5rem;
  border: 0.05rem solid grey;
  position: fixed;
}
.signout a{
   text-decoration: none;
   color: white;
   letter-spacing: .2rem;
}

.apply
{
  margin-left: 20.0rem;
  width:15rem;
  border-radius:4rem;
  padding: 0.8rem;
  margin-top: 5rem;
  background-color: #2c3e50;
  font-size: 1.9rem;
  color: white;
  border: 0.07rem solid grey;
  letter-spacing: 2px;
}
.user{
  margin-bottom: 190px;
  margin-left: 90px;
  margin-top: -150px;
  font-size: 28px;
  color: #3d3d3d;
}
.profile{
  border-radius: 50%;
  margin-left: 8rem;
  margin-bottom: 16rem;
  margin-top: 5rem;
}
.anu{
  margin-left: 35rem;
  margin-top: 50px;
}
.reason{
  margin-top: -29.7rem;
}
#popup{
  position: fixed;
  top: 30%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 1000;
  background: #818182 ;
  height: 34vh;
  width: 40%;
  padding: 40px;
  box-sizing: border-box;
  visibility: hidden;
  color: white;
  letter-spacing: 2px;
}
.buttons
{
  margin-top: 3rem;
  border:0.1px solid white;
  margin-right: 105rem;
  height: 58rem;
  box-shadow:0.8rem 0.8rem 0.8rem #f0f5f5;
}
.cross{
  height: 4vh;
  width: 30px;
  margin-left: 450px;
  margin-top: -130px;
  border: 1px solid black;
}
.ab li a{
   text-decoration:none ;
   font-family: calibri;
}
.ab li{
  list-style-type: none;
}


.yaks
{
  margin-left:40rem;
  margin-top:9rem;
}
.n
{
  font-size: 1.5rem;
}
.reason
{
  margin-left: 87rem;
  margin-top:-32rem;
  font-size: 1.5rem;
}

.body
{
  color:#00008b;
}
.name
{
  border-left:0px;
  border-right:0px;
  border-top:0px;
   margin-top:0.3rem;
  width:30rem;
  margin-left: 7rem;
}
.dept
{
  border-left:0px;
  border-right:0px;
  border-top:0px;	
   margin-top:0.3rem;
  width:30rem;
  margin-left: 1.3rem;
}
.from
{
  border-left:0px;
  border-right:0px;
  border-top:0px;
   margin-top:0.3rem;
   width:30rem;
   margin-left: 2.8rem;	
}
.to
{
  border-left:0px;
  border-right:0px;
  border-top:0px;
   margin-top:0.3rem;	
  width:30rem;
  margin-left: 5.3rem;
}

.d
{
      margin-top:1.5rem;
      font-size: 1.5rem;
}
.f
{
      margin-top:1.5rem;
      font-size: 1.5rem;
}
.t
{
      margin-top:1.5rem;
      font-size: 1.5rem;
}
.leave
{
  margin-left:13rem;
  margin-top:-55rem;
  font-family: andalus;
  font-size: 2.3rem;
  
}



.username{
  margin-top: -29px;
}
.
/*.pro{
  width:15rem;
  border-radius:3em;
  padding:1rem;
  background:#c1cae8;
font-size: 1.5rem;
border:0.05rem solid grey;
}*/

html{
  font-size: 62.5%;
}
.data{
  margin-left: 6rem;
  margin-top:8rem;
}
.text{
  font-size: 1.5rem;
}

#popup.active{
  visibility: visible;
}



		</style>
    
	</head>
	<body>
		<header class="ab">
			<img src="menu.jpeg" height="40px" width="40px" class="menu">
		    <li class="cd"><a href="task33.html">AITAM-FACULTY</a></li>
		</header>
		<div class="buttons">
		<img src="user.png" height="120px" width="120px" class="profile">
		<div class="user">
		<h6 class="username"><?php echo $_SESSION['username'];?> </h6>
		</div>
        <a href='update.php'><button name="update" class="update"> UPDATE </a></button>
       <a href='faculty_signout.php'><button class="signout">SIGNOUT</a></button>
       </div>
<form action="faculty_leave.php" method="POST">
		<div class="anu">
     <div class="leave"><h1>APPLY FOR LEAVE</h1></div>
     <div class="data">
<div class="n">NAME:<input type="text" name="username" placeholder="Enter your Name" class="name"></div><br>
<div class="d">DEPARTMENT:<input type="text" name="dept" placeholder="Department" class="dept"></div><br>
<div class="f">FROM-DATE:<input type="date" name="fdate" placeholder="from date" class="from"></div><br>
<div class="t">TO-DATE:<input type="date" name="tdate" placeholder="todate"class="to"></div><br>
<button class="apply" name="request">APPLY</button>
</div>
</div>
<div class="reason">
<h3>Reason:</h3>
<textarea  rows="15" cols="30" name="reason" class="text"></textarea> <br>
</div>
</div>
</form>
	</body>
</html>
<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: login.php");
	exit;
}
?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_leave.css">
    <title>ADMIN-PAGE</title>
    <style>
      *{
    margin:0px;
    padding: 0px;
}
html{
    font-size: 62.5%;
}

.navbar{
    height: 65px;
     width: 100%;
     background-color: #353c47;
     display: flex;     
}
img{
    height: 5vh; 
    width:4.0rem;
    border-radius: 2.5rem;
}
.logo{
    padding: 1.8rem;
    box-sizing: border-box;
}

.logo_mat{
    margin-top: 2.3rem;
    color: white;
    font-size: 15px;
}
.img1{
    margin-left: 35%;
    height: 8.0rem;
    width: 8.0rem;
    margin-top: 2.0rem;
}
.button{
    height: 89vh;
    width: 30.0rem;
    box-shadow: .6rem .6rem .6rem whitesmoke;
}
.btn{
    padding: 1.5rem;
    width: 14.0rem;
    margin-top: 20px;
    cursor: pointer; 
    border-radius: 2.0rem;  
    background-color: #353c47 ;
    color: white;
    letter-spacing: 2px;  
}
.bor{
    margin-top: 8.0rem;
    margin-left: 8.0rem;
   outline: none;
}
.but{

    margin-top: 3.0rem;
    padding: 1.5rem;
    width: 14.0rem;
    cursor: pointer;
    border-radius: 2.0rem;
    background-color: #353c47;
    color: white;
    letter-spacing: 2px;
}
.but a{
  text-decoration: none;
  color: white;
}

.card1,.card2,.card3,.card4,.card5,.card6{
    height: 21.0rem;
    width: 21.0rem;
    box-shadow: .6rem .6rem .6rem .6rem whitesmoke;
    margin-left: -2rem;
    box-sizing: border-box;
    border-radius: 1.0rem;
}


.main{
    display: flex;
}
.card1{
  margin-left: 30px;
}
.card2{
  margin-left: 30px;
}
.card3{
  margin-left: 30px;
}
.card4{
   margin-left: -690px;
}
.card5{
  margin-left: -450px;
}
.card6{
  margin-left: -210px;
}
.cards{
    display: flex;
    margin-left: 6px; 
    padding: 20px;
    margin: 50px;   
}

.im{
    margin-left: 40px;
    height: 10vh;
    width: 70px;
}


.head{
    margin-top: 30px;
    text-align: center;
    font-size: 2.5remx;
    background: transparent;
    cursor: pointer;
    font-family: san-serif;

}

     .username{
      margin-top: 2px;
       text-align: center;
       font-size: 18px;       
     }
     .ab{
       text-decoration: none;
     }
    </style>
</head>
<body>
    <div class="container">
      <nav>
          <div class="navbar">
              <div class="logo">
                <img src="menu.jpeg">
              </div>
              <div class="logo_mat">
                <h3>AITAM || ADMIN</h3>
              </div>
          </div>
        </nav> 

        <section>

         <div class="main">
            <div class="button">
            <img class="img1" src="adm.png">
            <?php include "dbconn.php";?>
            <div class="user">
		<h6 class="username"><?php echo $_SESSION['username'];?> </h6>
		</div>
            <div class="bor">
            <button class="btn">PROFILE</button><br>
           <a  class="ab" href="admin_signout.php"><button class="but">SIGNOUT</a></button>
            </div>
            </div>
            <?PHP include "dbconn.php"; ?>
            <div class="cards">
            <form action="faculty_leavedata.php" method="POST">
            <div class="card1">
              <img class="im" src="cse.png">
              <input type="submit" name="SEARCH" class="head" value="CSE DEPARTMENT"></input>
            </div>
    </form>
      <form action="faculty_leavedata.php" method = "POST">     
            <div class="card2">
              <img class="im" src="mech.png">
              <input type="submit" name="SEARCH" class="head" value="MECH DEPARTMENT">
            </div>
    </form>
      <form action="faculty_leavedata.php" method="POST">
            <div class="card3">
              <img class="im" src="ece.png">  
              <input type="submit" name="SEARCH" class="head" value="ECE DEPARTMENT">
            </div>
    </form>
    <form action="faculty_leavedata.php" method = "POST">
            <div class="card4">
              <img  class="im" src="eee.png">
              <input type="submit" name="SEARCH" class="head" value="EEE DEPARTMENT">
            </div>
    </form>
     <form action="faculty_leavedata.php" method="POST">
            <div class="card5">
              <img class="im" src="it.png">
              <input type="submit" name="SEARCH" class="head" value="IT DEPARTMENT">
              </div>
    </form>     
    <form action="faculty_leavedata.php" method="POST">         
            <div class="card6">
              <img class="im" src="civil.png">
            <input type="submit" name="SERACH" class="head" value="CIVIL DEPARTMENT">
            </div>
            </form>
      </div>
      </div>
    
        </section>
    </div>
</body>
</html>
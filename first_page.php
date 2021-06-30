<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACULTY LEAVE MANAGEMENT</title>
    <style>
        *{
           margin: 0px;
           padding: 0px;
        }
        .logo img{
            height: 12vh;
            width: 12.0rem;
            padding: 1.5rem;
            box-sizing: border-box;
            margin-left: 1.0rem;
        }
        
        body{
            background-image: url("bg_2.jpeg");
            background-repeat: no-repeat;
            background-size: 100% 700px;
            background-color: #353c47;
        
        }
        html{
            font-size: 62.5%;
        }
        .navbar{
            height: 10vh;
            width: 100%;
            background-color: none;
            display: flex;
            justify-content: space-between;
        }
        .links{
            padding: 2.5rem;
            box-sizing: border-box;
        }
        .links a{
            margin-left: 4.0rem;
            text-decoration: none;
            font-size: 1.8rem;
            color: white;
        }
        .links a:hover{
            text-decoration: underline;
            color: #dae3f2;
        }

        .container{
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform : translate(-50%,-50%);
            width: 100%;
        }
         
        .container span{
            color: white;
            display: block;
        }
        .text1{
            font-size: 60px;
            font-weight: 700px;
            letter-spacing: 8px;
            margin-bottom: 20px;
            background: transparent;
            position: relative;
            animation :text 3s 1;
        }
        
        .text2{
            font-size: 35px;
        }

        @keyframes text {
            0%{
                color: black;
                margin-bottom: -40px;
            }
            30%{
                letter-spacing: 25px;
                margin-bottom: -40px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png">
            </div>
         <div class="links">
             <a href="#">HOME</a>
             <a href="#">ABOUT</a>
             <a href="faculty_login.php">FACULTY</a>
             <a href="admin_login.php">ADMIN</a>
             <a href="#">CONTACT US </a>
         </div>
        </div>
    </nav>
    <div class="container">
    <span class="text1"> WELCOME TO AITAM</span>
    <span class="text2"> FACULTY MANAGEMENT SYSTEM </span>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_PAGE</title>
    <style>
    *{
        margin:0px;
        padding: 0px;
    }
    body{
        background-image: url("logo_ait.jpeg");
        background-blend-mode: darken;
        background-repeat: no-repeat;
        background-size: 600px 400px;
        background-position: center;
        background-attachment: fixed;
    }

    .container{
        display: flex;
    }
    .contain h1{
        text-align: center;
        background-image:linear-gradient(to top,#fff 20%,#c3f5ff 80%);
    }
    h1{
        text-decoration: underline;
    }
    img{
        height: 30vh;
        margin-top:-100px;
    }

     .table{
         font-size: 18px;
         border-collapse: collapse;
         margin-left: 25px;
         margin-right: 25px;
         width: 100%;
         margin-top: 40px;
         border-top: none;
         border-left: none;
         border-right: none;
         /*border: 1px solid black;*/
     }
     .table th{
         color: black;
         font-weight: bold;
         padding: 30px;
         box-sizing: border-box;
         text-decoration: underline;
     }

     .table td{
         color: green;
         padding: 30px;
         box-sizing: border-box;
     }

     #but{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px;
        box-sizing: border-box;
        background: green;
        color: white;
        border-radius: 5px;
     }

     #btn{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px;
        box-sizing: border-box;
        background: #a91b0d;
        color: white;
        border-radius: 5px;
     }

    </style>
</head>
<body>

    <?php
    include "dbconn.php";
    ?>
    <div class="contain">
    <h1>FACULTY LEAVE SUBMISSIONS</h1>
    <div class="container">
    <table class="table" border="1" style="text-align:center";>
    <th>SNO</th>
    <th>NAME</th>
    <th>DEPARTMENT</th>
    <th>FROMDATE</th>
    <th>TODATE</th>
    <th>REASON</th>
    <th>ACCEPT</th>
    <th>DELETE</th>
    <?php
   include"dbconn.php";

   if(isset($_POST['SEARCH'])){
    $SEARCH = $_POST['SEARCH'];
    $query = "SELECT * FROM `faculty_apply` WHERE `dept`= '$SEARCH' ";
    $sql = mysqli_query($conn,$query);
    $i = 0;

    while($row = mysqli_fetch_array($sql))
    {
        echo '<tr><td>'.$row['sno'].'</td>
              <td>'.$row['username'].'</td>
              <td>'.$row['dept'].'</td>
              <td>'.$row['fdate'].'</td>
              <td>'.$row['tdate'].'</td>
              <td>'.$row['reason'].'</td>        
              <td><a id="but" href="leave_accept.php?sno='.$row['sno'].'">ACCEPT</a></td>
            <td><a id="btn" href="leave_decline.php?sno='.$row['sno'].'">DECLINE</a></td>
              </tr>';
              
    } 
}
    ?>
    </table>
    </div>
    </div>
</body>
</html>
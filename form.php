<?php

include "dbconn.php" ;
        if(isset($_POST['SEARCH'])){
          $SEARCH = $_POST['SEARCH'];
          $query = "SELECT * FROM `faculty_apply` WHERE `dept`= '$SEARCH' ";
          $sql = mysqli_query($conn,$query);
          $i = 0;
          while($row = mysqli_fetch_array($sql))
          {
            echo $row['name'];
            echo "<br>";
            $i++;
          }
        }
        
?>
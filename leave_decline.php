<?php
 session_start();
 $_SESSION['name'] = $name;
 $_SESSION['status'] = $status;
?>
<?PHP
$coun = mysqli_connect("localhost","root","","leavemanage");
if(isset($_GET['sno']))
{
$sno = $_GET['sno'];
$oo="SELECT * FROM `faculty_apply` WHERE `sno` = '$sno'";
$select=mysqli_query($coun,$oo);
$row=mysqli_fetch_array($select);
$username=$row['username'];
$dept=$row['dept'];
$fdate=$row['fdate'];
$tdate=$row['tdate'];
$reason=$row['reason'];
$status = $row['status'];
$sql = "UPDATE `faculty_apply`  SET `status` = 'DECLINE' WHERE `faculty_apply`.`sno` = '$sno'";
$querry=mysqli_query($coun,$sql);
    header("location: admin_leave.php");
}
?>v
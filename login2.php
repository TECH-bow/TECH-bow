<?php
include 'mconn.php';
session_start();
$u = $_POST['username'];
$p = $_POST['password'];
$_SESSION['username']= $u;
$sql= "select username, password from user1 where username='$u' and password= '$p'";
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    header('location: dashboard.php');
}
else{
    echo"<script> alert('Invalid username & password')</script>";
}
mysqli_close($conn);
?>

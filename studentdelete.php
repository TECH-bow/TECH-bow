<?php
include 'mconn.php';
$r = $_GET['roll'];
$sql= "delete from student where roll='$r'";

if(mysqli_query($conn, $sql))
{
    header('location:studentdisplay.php');
}
else{
    echo"Record not deleted.";
}
mysqli_close($conn);
?>
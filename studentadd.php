<?php
include 'mconn.php';
$r = $_POST['roll'];
$s = $_POST['stname'];
$a = $_POST['address'];
$c = $_POST['course'];

$sql ="insert into student(roll, stname, address, course) values('$r', '$s', '$a', '$c')";

if(mysqli_query($conn,$sql))
{
    echo "Record Inserted Successfully."."<br>";
    echo "<a href ='studentaddform.php'> Add more Records </a>";
}
else
{
    echo "Record not inserted."."<br>";
    echo "<a href = 'studentaddform.php'>Back </a>";
}
mysqli_close($conn);
?>
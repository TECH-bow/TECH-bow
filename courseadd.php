<?php
include 'mconn.php';
$c = $_POST['course'];
$d = $_POST['duration'];
$cf = $_POST['coursefee'];

$sql = "insert into course(course, duration, coursefee) values('$c', '$d', '$cf')";

if(mysqli_query($conn,$sql)){
    echo "Record Inserted Successfully."."<br>";
    echo "<a href = 'courseaddform.php'> Add more Records </a>";
}
else{
    echo "Record not inserted."."<br>";
    echo "<a href = 'courseaddform.php'>Back </a>";
}
mysqli_close($conn);
?>
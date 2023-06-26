<?php
include 'mconn.php';
$u = $_POST['username'];
$p = $_POST['password'];

$sql = "insert into user1(username, password) values('$u', '$p')";

if(mysqli_query($conn,$sql)){
    echo "Record Inserted Successfully."."<br>";
    echo "<a href = 'useraddform.php'> Add more Records </a>";
}
else{
    echo "Record not inserted."."<br>";
    echo "<a href = 'useraddform.php'>Back </a>";
}
mysqli_close($conn);
?>
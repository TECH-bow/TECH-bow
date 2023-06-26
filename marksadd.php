<?php
include 'mconn.php';
$r = $_POST['roll'];
$f = $_POST['fundamental'];
$w = $_POST['windows'];
$mo = $_POST['msoffice'];
$t = $_POST['tally'];
$i = $_POST['internet'];
$wd = $_POST['webdev'];

$sql = "insert into marks(roll, fundamental, windows, msoffice, tally, internet, webdev)
                 values('$r','$f','$w', '$mo', '$t', '$i', '$wd')";

if(mysqli_query($conn,$sql)){
    echo "Record Inserted Successfully."."<br>";
    echo "<a href = 'marksaddform.php'> Add more Records </a>";
}
else{
    echo "Record not inserted."."<br>";
    echo "<a href = 'markseaddform.php'>Back </a>";
}
mysqli_close($conn);
?>
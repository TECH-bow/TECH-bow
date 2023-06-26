<?php
include 'mconn.php';
$r = $_POST['roll'];
$pd = $_POST['paydate'];
$pf = $_POST['payfee'];

$sql ="insert into payment(roll, paydate, payfee) values('$r', '$pd', '$pf')";

if(mysqli_query($conn,$sql))
{
    echo "Record Inserted Successfully."."<br>";
    echo "<a href ='paymentaddform.php'> Add more Records </a>";
}
else
{
    echo "Record not inserted."."<br>";
    echo "<a href = 'paymentaddform.php'>Back </a>";
}
mysqli_close($conn);
?>
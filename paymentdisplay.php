<?php
include 'mconn.php';
$sql = "select * from payment";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '40%'style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '4'> Payment Display <a href= 'paymentaddform.php'>Add more Record</a></th></tr>";
    echo"<tr><th>Slip No.</th><th>Roll</th><th>Pay Date</th><th>Pay Fee</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['slipno']."</td>";
        echo "<td>".$row['roll']."</td>";
        echo "<td>".$row['paydate']."</td>";
        echo "<td>".$row['paydate']."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Record Not Found";
}
mysqli_close($conn);
?>
<?php
include 'mconn.php';
$r = $_POST['roll'];
$sql = "select student.roll, student.stname, student.address,student.course, sum(payment.payfee) as totalpay from student, payment where student.roll= payment.roll and student.roll='$r'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '30%'style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '5'> Total Pay Display <a href= 'rollwisetotalpay.php'>Display more</a></th></tr>";
    echo"<tr><th>Roll</th><th>Student's Name</th><th>Address</th><th>Course</th><th>Total Pay</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['roll']."</td>";
        echo "<td>".$row['stname']."</td>";
        echo "<td>".$address['address']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td>".$row['totalpay']."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Record not found.";
}
mysqli_close($conn);
?>
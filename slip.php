<?php
include 'mconn.php';
$s = $_POST['slipno'];
$sql= "select student.roll, student.stname, student.address, student.course, payment.slipno, payment.paydate,
payment.payfee, course.coursefee, sum(payment.payfee)as totalpay, course.coursefee-sum(payment.payfee)as totaldues from 
student, payment, course where student.roll=payment.roll and student.course=course.course and payment.slipno='$s'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '50%'style= 'border-collapse:collapse;' cellpadding='10'>";
    echo "<tr><th colspan= '4'>Chitransh Intitute of Computer Education</th></tr>";
    echo "<tr><th colspan= '4'>3<sup>rd</sup> Floor, Shahi Complex, Gopalganj-841428</th></tr>";
    while ($row=mysqli_fetch_assoc($result)){
        echo"<tr><th>Slip No.</th><td>".$row['slipno']."</td><th>Pay Date</th><td>".$row['paydate']."</td></tr>";
        echo"<tr><th>Roll</th><td>".$row['roll']."</td><th>Course</th><td>".$row['course']."</td></tr>";
        echo"<tr><th>Student's Name</th><td colspan= '3'>".$row['stname']."</td></tr>";
        echo"<tr><th>Address</th><td colspan= '3'>".$row['address']."</td></tr>";
        echo"<tr><th>Course Fee</th><td colspan= '3'>".$row['coursefee']."</td></tr>";
        echo"<tr><th>Pay Fee</th><td>".$row['payfee']."</td><th>Total Pay</th><td>".$row['totalpay']."</td></tr>";
        echo"<tr><th>Total Dues</th><td>".$row['totaldues']."</td><td colspan='2'>Signature</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Record Not Found";
}
mysqli_close($conn);
?>
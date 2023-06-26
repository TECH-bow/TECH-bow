<?php
include 'mconn.php';
$sql = "select * from course";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '40%'style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '3'> Course Display <a href= 'courseaddform.php'>Add more Record</a></th></tr>";
    echo"<tr><th>Course</th><th>Duration</th><th>Course Fee</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['course']."</td>";
        echo "<td>".$row['duration']."</td>";
        echo "<td>".$row['coursefee']."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Record Not Found";
}
mysqli_close($conn);
?>
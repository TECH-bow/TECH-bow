<?php
include 'mconn.php';
$sql = "select student.roll, student.stname, student.course, marks.*,marks.fundamental + marks.windows + marks.msoffice + marks.tally + marks.internet + marks.webdev as totalmarks from student, marks where student.roll = marks.roll";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '40%'style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '10'> Marks Display <a href= 'marksaddform.php'>Add more Record</a></th></tr>";
    echo"<tr><th>Roll</th><th>Student's Name</th><th>Course</th><th>Fundamental</th><th>Windows</th><th>MS-Office</th><th>Tally</th><th>Internet</th><th>Web Development</th><th>Total Marks</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['roll']."</td>";
        echo "<td>".$row['stname']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td>".$row['fundamental']."</td>";
        echo "<td>".$row['windows']."</td>";
        echo "<td>".$row['msoffice']."</td>";
        echo "<td>".$row['tally']."</td>";
        echo "<td>".$row['internet']."</td>";
        echo "<td>".$row['webdev']."</td>";
        echo "<td>".$row['totalmarks']."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Record Not Found";
}
mysqli_close($conn);
?>
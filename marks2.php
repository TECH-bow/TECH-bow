<?php
include 'mconn.php';
$r = $_POST['roll'];
$sql= "select student.roll, student.stname, student.course, marks.*, marks.fundamental+marks.windows+marks.msoffice,marks.tally+marks.internet+marks.webdev as totalmarks from student, marks where student.roll=marks.roll and student.roll='$r'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' width= '30%'style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '2'>Student's Marksheet</th></tr>";
    while ($row=mysqli_fetch_assoc($result)){
        echo"<tr><th>Roll</th><td>".$row['roll']."</td></tr>";
        echo"<tr><th>Student's Name</th><td>".$row['stname']."</td></tr>";
        echo"<tr><th>Course</th><td>".$row['course']."</td></tr>";
        echo "<tr><th colspan= '2'>All Student Marks</th></tr>";
        echo"<tr><th>Fundamental</th><td>".$row['fundamental']."</td></tr>";
        echo"<tr><th>Windows</th><td>".$row['windows']."</td></tr>";
        echo"<tr><th>MS-Office</th><td>".$row['msoffice']."</td></tr>";
        echo"<tr><th>Tally</th><td>".$row['tally']."</td></tr>";
        echo"<tr><th>Internet</th><td>".$row['internet']."</td></tr>";
        echo"<tr><th>Web Devlopment</th><td>".$row['webdev']."</td></tr>";
        echo"<tr><th>Total Marks</th><td>".$row['totalmarks']."</td></tr>";

    }
}
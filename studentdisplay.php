<?php
include 'mconn.php';
$sql = "select * from student";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='2' style= 'border-collapse:collapse;'>";
    echo "<tr><th colspan= '7'> Student Display <a href= 'studentaddform.php'>Add more Record</a></th></tr>";
    echo "<tr><th>Roll</th><th>Stname</th><th>Address</th><th>Course</th><th>Photo</th><th>Update</th><th>Delete</th>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['roll']."</td>";
        echo "<td>".$row['stname']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td width= '100' height= '100'><img src ='gallery/$row[photo]' width= '100' height= '100'></td>";
        echo "<td><a href= 'studentupdate.php?roll=$row[roll]'><input type = 'button' value= 'Update'></a></td>";
        echo "<td><a href= 'studentdelete.php?roll=$row[roll]'><input type = 'button' value= 'Delete'></a></td>";
    }
    echo "</table>";
}
    else{
        echo "Record not found.";
    }
    mysqli_close($conn);
    ?>
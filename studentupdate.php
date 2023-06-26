<?php
include 'mconn.php';
$r=$_GET['roll'];
$sql= "select * from student where roll='$r'";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo"<form name = 'form1' method= 'post' action= 'studentedit.php' enctype= 'multipart/form-data'>";

echo"Roll<br>";
echo"<input type='number' name= 'roll' value=$row[roll]><br>";
echo"Student's name<br>";
echo"<input type='text' name= 'stname' value=$row[stname]><br>";
echo"Address<br>";
echo"<input type='text' name= 'address' value=$row[address]><br>";
echo"Course<br>";
echo"<input type='text' name= 'course' value=$row[course]><br>";
echo"Photo<br>";
echo"<input type='file' name= 'photo' value=$row[photo]><br>";
echo"Select new photo<br>";
echo"<input type= 'file' name = 'photo1'><br>";
echo"<input type= 'submit' value= 'Update'>";
echo"<input type= 'reset' value= 'cancel'>";
echo"</form>";
mysqli_close($conn);
?>

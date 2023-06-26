<?php
include 'mconn.php';
$r = $_POST['roll'];
$s = $_POST['stname'];
$a = $_POST['address'];
$c = $_POST['course'];
$p = $_FILES['photo1']['name'];

$sql = "update student set stname='$s', address= '$a', course= '$c', photo= '$p' where roll= '$r'";

move_uploaded_file($_FILES['photo1']['tmp_name'],"gallery/".$_FILES['photo1']['name']);

if(mysqli_query($conn,$sql))
{
    echo "Record Updated Successfully."."<br>";
    echo "<a href ='studentdisplay.php'> Display more </a>";
}
else
{
    echo "Record not Updated."."<br>";
    echo "<a href = 'studentdisplay.php'>Back </a>";
}
mysqli_close($conn);
?>
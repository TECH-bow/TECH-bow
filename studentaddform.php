<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Student Entry Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "studentadd.php">
            <h3>Online Student's Addmission Form</h3>
            Roll<br>
            <input type="number" name= "roll" required= ""><br>
            Student's name<br>
            <input type="text" name= "stname" required= ""><br>
            Address<br>
            <input type="text" name= "address" required= ""><br>
            Course<br>
            <input type="text" name= "course" required= ""><br>
            <input type ="submit" value= "Submit">
            <input type ="reset" value= "Cancel">

    </form>
    </div>
</body>
</html>
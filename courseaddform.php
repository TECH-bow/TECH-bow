<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Entry Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "courseadd.php">
            <h3>Online Course Entry Form</h3>
            Course<br>
            <input type="text" name= "course" required= ""><br>
            Duration<br>
            <input type="number" name= "duration" required= ""><br>
            Course Fee<br>
            <input type="number" name= "coursefee" required= ""><br>
            <input type ="submit" value= "Submit">
            <input type ="reset" value= "Cancel">

    </form>
    </div>
</body>
</html>
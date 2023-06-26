<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Marks Entry Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "marksadd.php">
            <h3>Online Marks Entry Form</h3>
            Roll<br>
            <input type="number" name= "roll" required= ""><br>
            Fundamental<br>
            <input type="number" name= "fundamental" required= ""><br>
            Windows<br>
            <input type="number" name= "windows" required= ""><br>
            MS-Office<br>
            <input type="number" name= "msoffice" required= ""><br>
            Tally<br>
            <input type="number" name= "tally" required= ""><br>
            Internet<br>
            <input type="number" name= "internet" required= ""><br>
            Web Devlopment<br>
            <input type="number" name= "webdev" required= ""><br>
            <input type ="submit" value= "Submit">
            <input type ="reset" value= "Cancel">
    </form>
    </div>
</body>
</html>
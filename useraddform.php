<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online User Entry Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "useradd.php">
            <h3>Online User Entry Form</h3>
            User Name<br>
            <input type="text" name= "username" required= ""><br>
            Password<br>
            <input type="password" name= "password" required= ""><br>
            <input type ="submit" value= "Submit">
            <input type ="reset" value= "Cancel">

    </form>
    </div>
</body>
</html>
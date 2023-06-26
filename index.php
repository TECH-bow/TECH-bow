<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "login2.php">
            <h3>Welcome to my log in page</h3>
            User Name<br>
            <input type="text" name= "username" required= ""><br>
            Password<br>
            <input type="password" name= "password" required= ""><br>
            <input type ="submit" value= "log in">
            <input type ="reset" value= "cancel">

    </form>
    </div>
</body>
</html>
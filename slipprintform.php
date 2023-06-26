<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Slip Print Form </title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "slip.php">
            <h3>Online Student Slip Form</h3>
            Enter Slip No.<br>
            <input type="number" name= "slipno" required= ""><br>
            <input type ="submit" value= "Print Slip">
            <input type ="reset" value= "Cancel">


        </form>
    </div>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Total Pay Display </title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "totalpay.php">
            <h3>Online Student Total Pay Display</h3>
            Enter Roll<br>
            <input type="number" name= "roll" required= ""><br>
            <input type ="submit" value= "Display">
            <input type ="reset" value= "Cancel">


        </form>
    </div>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment Entry Form</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
            box-sizing: border-box;
        }
        </style>
</head>
<body>
    <div class="frm">
        <form name= "form1" method= "post" action= "paymentadd.php">
            <h3>Online Payment Entry</h3>
            Roll<br>
            <input type="number" name= "roll" required= ""><br>
            Pay Date<br>
            <input type="date" name= "paydate" required= ""><br>
            Pay Fee<br>
            <input type="number" name= "payfee" required= ""><br>
            
            <input type ="submit" value= "Submit">
            <input type ="reset" value= "Cancel">

    </form>
    </div>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['username'])!="")
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin-left: 10%;
            margin-right: 10%;
        }
        .first{
            width: 33.33%;
            height: 100px;
            padding: 10px;
            font-size: 35px;
            transition: all 0.5s;
            float: left;
            background: black;
            color: white;
            text-align: center;
        }
        .second{
            width: 25%;
            height: 600px;
            background: lightseagreen;
            float: left;
        }
        .second a{
            width: 100%;
            padding: 10px;
            text-align: center;
            background: purple;
            color: white;
            border-bottom: 2px solid white;
            text-decoration: none;
            display: block;
            font-size: 15px;
        }
        .second a:hover{
            background: plum;
            color: black;
            font-style: italic;
        }
        .third{
            width: 75%;
            height: 600px;
            float: left;
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <div class="first">Dashboard</div>
    <div class="first">Welcome<br>
        <?php
        echo $_SESSION['username'];
        ?>
    </div>
    <div class="first"><a href= "logout1.php">Log Out</a></div>
    <div class="second">
    <a href="studentaddform.php" target="f1">Add Student</a>
    <a href="courseaddform.php" target="f1">Add Course</a>
    <a href="paymentaddform.php" target="f1">Add Payment</a>
    <a href="marksaddform.php" target="f1">Add Marks</a>
    <a href="useraddform.php" target="f1">Add User</a>
    <a href="studentdisplay.php" target="f1">Student Display</a>
    <a href="coursedisplay.php" target="f1">Course Display</a>
    <a href="paymentdisplay.php" target="f1">Payment Display</a>
    <a href="marksdisplay.php" target="f1">Marks Display</a>
    <a href="rollwisetotalpay.php" target="f1">Roll wise Total Pay Display</a>
    <a href="rollwisetotaldues.php" target="f1">Roll wise Total Dues Display</a>
    <a href="rollwisereportdisplay.php" target="f1">Roll wise Report Display</a>
    <a href="rollwisemarks.php" target="f1">Roll wise Marks Display</a>
    <a href="slipprintform.php" target="f1">Slip wise Report</a>
    </div>
    <div class="third">
        <iframe src= "studentaddform.php" name= "f1" height=100% width=100% frameborder= "0"></iframe>
    <?php
}
    else{
        header('location:index.php');
    }
    ?>

    </div>
</body>
</html>

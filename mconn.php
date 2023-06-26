<?php
$server="localhost";
$user="root";
$password="";
$db="cice25";
$conn= mysqli_connect($server, $user, $password,$db);

    if(!$conn){
        die ("Database not connected.");
    }
    else{
        echo"Database connected sucessfully.";
    }
    ?>
<?php

$servername="localhost";
$uname="root";
$pass="";
$db="secyear1";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

?>
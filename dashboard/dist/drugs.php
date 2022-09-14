<?php

$con = mysqli_connect("localhost","root","","secyear1");

if($con){
    echo"Connected";
}
else{
    echo"not connected";
}

mysqli_select_db($con,'secyear1');
$name = $_POST['drugname'];
$code = $_POST['ndc'];
$quantity = $_POST['quantity'];
$date = $_POST['expirationdate'];

$query = "insert into drugs(drugname,ndc,expirationdate,quantity)
values ('$name','$code','$quantity','$date')";

mysqli_query($con,$query);
?>
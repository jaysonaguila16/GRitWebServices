<?php
session_start();
include('../config.php');

$sql="INSERT INTO payment (Full_Name, Email, Address, Phone, Brand_ID, Total_Amount) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[address]', '$_POST[phone]', '$_POST[brand]', '$_POST[totalAmount]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  session_start();

 header("location: check.php");

 mysqli_close($mysqli);
?> 

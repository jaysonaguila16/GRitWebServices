<?php
session_start();
include('../config.php');

$sql="INSERT INTO payment (Full_Name, Email, Postal_Code, Address, Phone, Brand_ID, Delivery_Address, Total_Amount) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[pcode]', '$_POST[address]', '$_POST[phone]', '$_POST[brand]', '$_POST[delivery]', '$_POST[totalAmount]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  session_start();
if(session_destroy())
{
 header("location: ../home.php");
 echo "Success!";
}

 mysqli_close($mysqli);
?> 

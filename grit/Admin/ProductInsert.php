<?php
   include('../config.php');

$sql="INSERT INTO product (ProductName, Category_ID, Model,Type, Brand_ID, Description,Price, Picture) 
VALUES ('$_POST[name]', '$_POST[select]', '$_POST[model]', '$_POST[type]', '$_POST[WH]', '$_POST[ml]', '$_POST[price]', '$_POST[picture]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: ProductAdd.php");
  echo "1 product added!";

 mysqli_close($mysqli);
?> 


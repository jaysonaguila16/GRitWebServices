

<?php
   include('../config.php');

$sql="INSERT INTO brand (Address, Email, Brand) VALUES  
('$_POST[address]', '$_POST[email]', '$_POST[brandname]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: BrandAdd.php");
  echo "1 brand has been added!";

 mysqli_close($mysqli);
?> 



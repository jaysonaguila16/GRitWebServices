
<?php
   include('../config.php');

$sql="INSERT INTO employee (Employee_Name, Username, Password) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[password]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
   header("location: EmployeeAdd.php");
  echo "1 employee added!";

 mysqli_close($mysqli);
?> 




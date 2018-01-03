<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $Name=$_POST['name'];
echo  $UserName=$_POST['username'];
echo $PassWord=$_POST['password'];
$id=$_POST['ID'];

echo $query="update employee  set Employee_Name ='$Name',Username='$UserName',Password='$PassWord'where Employee_ID=$id";
$rows=mysqli_query($mysqli,$query);
echo "Success".$rows;
mysqli_close($con);
header("location: EmployeeAdd.php?msg=Success!");
exit();
}

?>


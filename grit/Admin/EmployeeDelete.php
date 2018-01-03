<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Please select a row to delete.";

}else{
$query="delete from employee where Employee_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: EmployeeAdd.php?msg= Admin has been removed.");
exit();
mysqli_close($mysqli);
}
?>


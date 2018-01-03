<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Select one.";

}else{
$query="delete from customer where Cust_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: customerdetails.php?");
exit();
mysqli_close($mysqli);
}
?>
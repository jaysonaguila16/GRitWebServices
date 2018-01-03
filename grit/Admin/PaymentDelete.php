<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Select one.";

}else{
$query="delete from payment where order_ID =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: orderdetails.php?msg=Success!");
exit();
mysqli_close($mysqli);
}
?>


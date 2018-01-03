<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Please select a product to delete.";

}else{
$query="delete from product where Product_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: ProductAdd.php?msg=Product has been deleted.");
exit();
mysqli_close($mysqli);
}
?>


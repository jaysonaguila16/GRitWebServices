<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Select category to delete.";

}else{
$query="delete from category where Category_ID =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location:CategoryAdd.php?msg=Success!");
exit();
mysqli_close($mysqli);
}
?>


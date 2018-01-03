<?php include("../config.php");?>
<?php
$delete= $_GET['delete'];
if(empty($delete)){
echo "Please select a brand.";

}else{
$query="delete from brand where Brand_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: BrandAdd.php?msg= Brand has been deleted.");
exit();
mysqli_close($mysqli);
}
?>
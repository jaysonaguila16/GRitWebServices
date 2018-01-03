<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $fname=$_POST['categoryName'];
echo  $desp=$_POST['description'];
echo $image=$_POST['file'];
$id=$_POST['ID'];

echo $query="update category  set Category_Name = '$fname', Description = '$desp', Picture = '$image' where Category_ID = $id";
$rows=mysqli_query($mysqli,$query);
echo "Sucess!".$rows;
mysqli_close($con);
header("location: CategoryAdd.php?msg=Sucess!");
exit();
}

?>


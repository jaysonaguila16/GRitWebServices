<?php
include '../config.php';
?>
<?php 

if (isset($_POST['submit'])){
$id=$_POST['ID'];

echo $brandname=$_POST['brandname'];
echo $email=$_POST['email'];
echo $address=$_POST['address'];

echo $query="update brand set Brand ='$brandname', Email ='$email', Address ='$address' where Brand_ID =$id ";
$rows=mysqli_query($mysqli,$query);
echo "Success!".$rows;
mysqli_close($mysqli);
header("location: BrandAdd.php?msg=Success!");
exit();
}

?>


<?php 

	include("../config.php"); 
    session_start();
{
	$eMail=$_POST['eMail'];
	$pWord=$_POST['pWord'];
	$eMail= mysqli_real_escape_string( $mysqli,$eMail);
	$pWord = mysqli_real_escape_string( $mysqli, $pWord);

    $fetch=mysqli_query( $mysqli, "select Cust_Id from customer where Email='$eMail' and Password= '$pWord'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$eMail;
	 header("location: ../home.php");
    }
    else
    {
	   header('Location: relogin.php');
	}

}
?>

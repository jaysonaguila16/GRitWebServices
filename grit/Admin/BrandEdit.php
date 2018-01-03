<?php
include("../session.php");
include("../config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>GRiT Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/gritexpress.css" rel="stylesheet" type="text/css">
	<link href="css/icons.css" rel="stylesheet">

</head>
<body>	
<div class="gritexpress">	
   <div class="left-content">
		<div class="topbar">
			<div class="logo-name">
				<img src="images/logo.png" height="50px">
				<a href="#"> <h1>GRiT Express</h1></a>
			<div class="search-box">
				<form>
				<input type="text" placeholder="Search here..." required="">	
				<input type="submit" value="">					
				</form>
			</div> 								
			</div>
			<div class="clearfix"> </div>	
		</div>

<div class="inside-content">
    <div class="blank">
    	<h2>Edit Brand</h2>
    	<div class="blankpage-main">
    		
<?php $update=$_GET['update']; $result = mysqli_query($mysqli,"SELECT * FROM brand where Brand_ID ='$update'"); ?>
<?php if($row = mysqli_fetch_array($result)) {?> 

<div id="form_wrapper" class="form_wrapper"  >
		<table>
			<form class="register active" id="myForm" action="BrandUpdate.php"  method="POST">		
			<input type="hidden" id="ID" name="ID" value="<?php echo $row['Brand_ID'];?>"  placeholder="ID" required="required">
			<tr><td>  
				<label> Brand Name:</label>
				<input type="text"class="form-control" name="brandname" id="brandname"  value="<?php echo $row['Brand'];?>"  placeholder="Brand Name" required>
			</td></tr>

  			<tr> <td>  
				<label>Email:</label>
				<input type="text"class="form-control" name="email" id="email" value="<?php echo $row['Email'];?>"  placeholder="Email" required>
			</td></tr>

   			<tr><td>
   				<label> Address:</label>
				<input type="text"class="form-control" name="address"  id="address" value="<?php echo $row['Address'];?>"  placeholder="Address" required>
            </td></tr>
   
   			<tr>
			<div class="bottom">
			<td colspan="3">	
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<button type="submit"  name="submit"  class="btn btn-warning btn-small" required="required"><span class="a-btn-text">Update Brand </span>
			</button>
			<div class="clear"></div>
			</div>
			</tr>
			</form>
		</table>
	</div>
 </div> 
<?php }?>
</div>
</div>
</div>

<div class="copyright">
	 <p style="font-size: 0.8em;color: #272822;">
	 © 2017. All Rights Reserved | <strong>GRiT Express</strong>, a subsidiary company of <strong>GRiT Web Services, Co.</strong>
	</p>
</div>	
</div>

<div class="leftbar">
    <div class="profile_img">	
		<span class="prfil-img"><img src="images/1.png"> </span> 
		<div class="username">
			<p><?php echo "$login_session";?></p>
			<span>Administrator</span>
		</div>
	</div>

	<	<div class="menu">
		<ul id="menu">
		    <li><a href="blank.php"><i class="fa fa-home"></i>Dashboard</a></li>

			<li><a href="#"><i class="fa fa-book"></i>Reports<span class="fa fa-angle-right" style="float: right"></span></a>

		    <ul>
		        <li><a href="ProductReport.php"><i class="fa fa-book"></i>Product Report</a></li>
		        <li><a href="OrderReports.php"><i class="fa fa-book"></i>Order Report</a></li>
		        <li><a href="EmployeeReport.php"><i class="fa fa-book"></i>Employee Report</a></li>
		        <li><a href="CustomerReport.php"><i class="fa fa-book"></i>Customer Report</a></li>          
		    </ul>
		    </li>

		    <li><a href="#"><i class="fa fa-file-text"></i>Tables<span class="fa fa-angle-right" style="float: right"></span></a>

		    <ul>
		        <li><a href="customerdetails.php"><i class="fa fa-file-text"></i>Customer Details</a></li>
		        <li><a href="orderdetails.php"><i class="fa fa-file-text"></i>Order Details</a></li>
		    </ul>
		    </li>
		       
		    <li><a href="#"><i class="fa fa-cog"></i>System<span class="fa fa-angle-right" style="float: right"></span></a>

		    <ul>
			    <li><a href="EmployeeAdd.php"><i class="fa fa-user"></i>Add Employee</a></li>
			    <li><a href="ProductAdd.php"><i class="fa fa-cubes"></i>Add Product</a></li>
			    <li><a href="CategoryAdd.php"><i class="fa fa-database"></i>Add Category</a></li>
			    <li><a href="BrandAdd.php"><i class="fa fa-home"></i>Add Brand</a></li>
		    </ul>
		    </li>

		    <li><a href="../signin/logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
		    </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
</body>
</html>


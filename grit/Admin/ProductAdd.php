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
    	<h2>Add Product</h2>
    	<div class="blankpage-main">
    	<div id="form_wrapper" class="form_wrapper">
			<table>
				<form class="register active"  action="ProductInsert.php" method="POST" id="myForm">

   			<tr><td>  
				<label> Name:</label>
				<input type="text"class="form-control" name="name" id="name"  class="user" required>
			</td></tr>
   
    		<tr> <td>  
				<label> Model:</label>
				<input type="text"class="form-control"  name="model"  id="model"  required> 
				<span id="pass-info"> </span>
			</td></tr>

 			<tr><td> 
      			<label> Type:</label>
				<input type="text"class="form-control" name="type" id="type"  required>
				<span id="pass-info"> </span>
  			</td></tr>
	
   			<tr><td>   
	    		<label> Description:</label>
				<input type="text"class="form-control"  name="ml"  id="ml"  maxlength="500" required> 
				<span id="pass-info"> </span>
					
			</td></tr>
			
			<tr><td>  
				<label>Price:</label>
				<input type="text"class="form-control"  name="price"  id="price"  onkeypress="return isNumberKey(event)"  required>
			</td></tr>
			
			<tr><td>   
			<label>Category:</label>

 			<?php include('../config.php'); $name= mysqli_query($mysqli,"select * from category");
			echo '<select  name="select"  id="ml" class="ed">';
			echo '<option selected="selected">Select</option>';
 				while($res= mysqli_fetch_assoc($name))
			{
			echo '<option>';
			echo $res['Category_ID'];
			echo'</option>';
			}
			echo'</select>';
			?>
			</td></tr>

			<tr><td> 
    		<label> Brand:</label>
			<?php include('../config.php'); $name= mysqli_query($mysqli,"select * from brand");
			echo '<select   name="WH"  id="ml" class="ed">';
			echo '<option selected="selected">Select</option>';
 			while($res= mysqli_fetch_assoc($name))
			{

			echo '<option>';
			echo $res['Brand_ID'];
			echo'</option>';
			}
			echo'</select>';
			?>
			</td></tr> 

			<tr><td>   
				<label> Picture:</label>
				<input type="file" name="picture" id="picture"  required>
   			</td></tr>
  
			<div class="bottom">
			<td colspan="3">	
	
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<button name="save" id="delbutton" title="Click to Save"  class="btn btn-warning btn-small" required="required" > <span class="a-btn-text"> Add Product</span>
			</button>
			<div class="clear"></div>
			</div>
		</form>
	</table>
					
		<script src="js/jquery.js"></script>
		  <script type="text/javascript">
		$(function() {

		$("#delbutton").click(function(){
		var element = $(this);

		 if(confirm("Are you sure?"))
				  {
		 $.ajax({
		   type: "GET",
		   url: "ProductDelete.php",
		   data: info,
		   success: function(){
		   
		   }
		 });
				 $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
				.animate({ opacity: "hide" }, "slow");
		 }
		return false;
		});

		});
		</script> 
	</div>

<?php $result = mysqli_query($mysqli,"SELECT * FROM product"); ?>
    <div id="tab1" class="tab_content">
  	<table class="table table-hover">
		<thead> <br> <th Colspan="11"> <h2>GRiT Express Product Data Table</h2></th></thead>
		<thead>
			</tr>
    	    <th>ID</th>
            <th> Name</th>			  
    		<th>Category</th>
		    <th>Model</th>				
    		<th> Type</th>
			<th>Brand ID</th>				
    		<th> Description</th>
			<th>Price</th>				
    		<th> Picture</th>
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
     <?php while($row = mysqli_fetch_array($result))
    {?>

    		<tr>
    		<td><?Php echo $row['Product_ID']; ?></td>
    		<td><?php echo $row['ProductName']; ?></td>
   			<td><?php echo $row['Category_ID']; ?></td>
			<td><?php echo $row['Model']; ?></td>
	  		<td><?Php echo $row['Type']; ?></td>
    		<td><?php echo $row['Brand_ID']; ?></td>
   			<td><?php echo $row['Description']; ?></td>
			<td><?php echo $row['Price']; ?></td>
			<td> <img src="../images/<?php echo $row['Picture']; ?> " width="40" height="40"   ></td>
    		<td> <a href="ProductEdit.php?update=<?php echo $row['Product_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     		<a href="ProductDelete.php?delete=<?php echo $row['Product_ID']; ?>" onClick="del(this);" title="Delete" class="delbutton"><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    		</tr>

<?php }mysqli_close($mysqli);?>
</tbody>
</table>  
 </div> 
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

	<div class="menu">
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


<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

var element = $(this);
 if(confirm("Are you sure?"))
 $.ajax({
   type: "GET",
   url: "DeleteProduct.php",
   data: info,
   success: function(){
   }
 });
    $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
	.animate({ opacity: "hide" }, "slow");
 }
return false;
});});
</script> 

    <script type="text/javascript">
        $(function() {
		 $('.user').keyup(function() {
                if (this.value.match(/[^a-zA-Z]/g)) {
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					window.alert("Invalid input!");
                }});});
    </script>
			
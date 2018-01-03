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
    	<h2>Register an Admin</h2>
    	<div class="blankpage-main">
		<div id="form_wrapper" class="form_wrapper">
			<table>
				<form class="register active" id="myForm" action="EmployeeRegister.php"  method="POST" >
			<tr><td> 
	  				<label>Full Name:</label>
					<input type="text"class="form-control" id="empValid" name="fullname" placeholder="Full name" />
	  		</td></tr>
      		<tr><td>
      				<label>Username:</label>
					<input type="text"class="form-control" id="username" name="username" placeholder="User name" />
      		</td></tr>

    		<tr><td>  
					<label>Password:</label>
					<input type="password"class="form-control" id="password" name="password" placeholder="*****" >
					<span id="pass-info"> </span>                      
			</td></tr>
   			

			<div class="bottom">

				<td colspan="3">		
				<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button name="submit" id="submit" title="Click to Save"  class="btn btn-warning btn-small" required="required"> Register Admin </button>	
				</td>
				<br>			
				<div class="clear"></div>
			</div>
				</form>
		</table>
	</div>

<script>
<script type="text/javascript">
$(document).ready(function(){ 
    $("#submit").click(function() { 
    
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'EmployeeRegister.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }});});});
</script>
		
	
<?php $result = mysqli_query($mysqli,"SELECT * FROM employee"); ?>
    <div id="tab1" class="tab_content">
 			<table class="table table-hover"> 
				<thead><br><th colspan="3"><h2>Admin Data Record</h2> </th></thead> 
				<thead>
				<tr>
    	      		<th>Employee ID</th>
              		<th> Employee Name</th>			  
    				<th>User Name</th>		
				</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result)){?>

      			<tr>
    				<td><?php echo $row['Employee_ID']; ?></td>
    				<td><?php echo $row['Employee_Name']; ?></td>
   					<td><?php echo $row['Username']; ?></td>
    				<td> <a href="EmployeeEdit.php?update=<?php echo $row['Employee_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     				<a href="EmployeeDelete.php?delete=<?php echo $row['Employee_ID']; ?>" onClick="del(this);" title="Delete"><input type="image" src="images/icn_trash.png" title="Trash"/>  </a></td>
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




<script type="text/javascript">
	function validateForm(){
		var a=document.forms["addemployee"]["fullname"].value;
			if (a==null || a==""){
  				alert("Admin Name!");
				return false;}
		var b=document.forms["addemployee"]["username"].value;
			if (b==null || b==""){
  				alert("Admin username cannot be empty.!");
  				return false;}
  
   		var c=document.forms["addemployee"]["password"].value;
			if (c==null || c==""){
  				alert("Admin password cannot be empty.!");
  				return false;}}
</script>	

<script type="text/javascript">
    $(function() {
        $('#empValid').keyup(function() {
			
            if (this.value.match(/[^a-zA-Z]/g)) {
                this.value = this.value.replace(/[^a-zA-Z ]/g, '');	}
				Alart("Numerical values are not allowed!");});});
</script>
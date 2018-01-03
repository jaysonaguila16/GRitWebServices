<!DOCTYPE HTML>
<html>
<head>
<title>Admin Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/signin.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery-2.1.1.min.js"></script> 
<link href="css/icons.css" rel="stylesheet">

</head>
<body>	
<div class="login-box">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Admin Login</h1>
		 </div>
			<div class="login-block">
				<form  action="employeeValidate.php" method="post" autocomplete="off"> 
                    <input type="text" name="user" placeholder="Username " required="required" />
					<input type="password" name="userpass" placeholder="Password" required="required" />
                <div class="clear"></div>
                <div class="submit-all">
                    <input type="submit" value="Login">
                </div>
                <h3>Not an admin?<a href="login.php"> Login as user here.</a></h3>
                </form>
				<h5><a href="../web/home.php">Go Back</a></h5>
			</div>
      </div>
</div>

<div class="copyright">
	 <p style="font-size: 0.8em;color: #272822;">
	 © 2017. All Rights Reserved | <strong>GRiT Express</strong>, a subsidiary company of <strong>GRiT Web Services, Co.</strong>
	</p>
</div>	

</body>
</html>


                      
						


			

<!DOCTYPE HTML>
<html>
<head>
<title>Customer Log In</title>
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
				<h1>Customer Login</h1>
		 </div>
			<div class="login-block">
				<form  action="userValidate.php" method="post" autocomplete="off">
                    <label>Invalid credentials. Please try again!</label>
                    <input type="text" name="eMail" required="required" type="text" placeholder="Email address"/>
                    <input type="password" name='pWord' required="required" type="password" placeholder="Password" />
                <div class="clear"></div>
                <div class="submit-all">
                    <input type="submit" value="Login">
                </div>
                <h3>Not a member?<a href="signup.php"> Sign up now!</a></h3>
                </form>
				<h5><a href="../web/home.php">Go Back</a></h5><br><br>
			</div>
      </div>
</div>

<div class="copyright">
	 <p style="font-size: 0.8em;color: #272822;">
	 © 2017. All Rights Reserved | <strong>GRiT Express</strong>, a subsidiary company of <strong>GRiT Web Services, Co.</strong><br>
     <button><a href="admin.php">Admin Back Door</a></button><br>
	</p>
</div>	

</body>
</html>


                      
						

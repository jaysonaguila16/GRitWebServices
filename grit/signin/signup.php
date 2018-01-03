
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/signin.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery-2.1.1.min.js"></script> 
<link href="css/icons.css" rel="stylesheet">

 
<script>
function vpa(){
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    var ok = true;
    if (password1 !=password2) {
        alert("Password mismatch!");
        document.getElementById("password1").style.borderColor = "#E34234";
        document.getElementById("password2").style.borderColor = "#E34234";
        ok = false;
    }
    else {  }
    return ok;
}     
</script>
    
</head>
<body>	
<div class="login-box">
     <div class="login-main">  	
    	 <div class="login-head">
				<h1>Customer Sign Up</h1>
			</div>
			<div class="login-block">
				<form class="register active" onsubmit="return vpa()" id="myForm" method="POST" action="../insertCustomer.php">
                    <input type="text" name="name" required="required" placeholder="Full Name"/>
                    <input type="text" name='tell' required="required" id="tell" placeholder="Contact Number" />
                    <input type="text" name='address' required="required" id="address" placeholder="Address" />
                    <input type="text" name='pcode' required="required" id="pcode" placeholder="Postal Code" />
					<input type="text" name='email' required="required" id="email" placeholder="Email Address" />
					<input type="text" name='username' required="required" id="username" placeholder="Username" />
					<input type="password" name='password1' required="required" id="password1" placeholder="Password" />
					<input type="password" name='password2' required="required" id="password2" placeholder="Confirm Password" />
                    
					<div class="clear"></div>
					<div class="submit-all">
						<input type="submit" value="Submit" id="btnSubmit " name="submit">
					</div>
                </form>

				<h3>Already have an account? <a href="login.php"> Login here</a></h3>
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

<script type="text/javascript">

$(document).ready(function(){ 
    $("#btnSubmit").click(function() { 
    alert("Save changes?");
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'insertCustomer.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>


<script type="text/javascript">
$(document).ready(function() { 

    $('#btnSubmit').click(function() {  

        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var emailaddressVal = $("#email").val();
        if(emailaddressVal == '') {
            $("#email").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }

        else if(!emailReg.test(emailaddressVal)) {
            $("#email").after('<span class="error">Enter a valid email address.</span>');
            hasError = true;
        }

        if(hasError == true) { return false; }

    });
});

</script>

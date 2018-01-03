<?php
include("../config.php");
include("../usersession.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Check Out</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/signin.css" rel="stylesheet" type="text/css" media="all"/>
<script src="../js/jquery-2.1.1.min.js"></script> 
<link href="../css/icons.css" rel="stylesheet">

</head>
<body> 
<div class="login-box">
    <div class="login-main">  	
    	 <div class="login-head2">
				<h3>GRit Express Secure Payment</h3>
		 </div>
			<div class="login-block">
				<form  action="InsertPayment.php" method="post" autocomplete="off" id="formElem" name="formElem" class="myForm">

	<!--TOTAL IN SHOPPING CART-->
	<?php $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if(isset($_SESSION["cart_session"])){
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm) {
        $subtotal = ($cart_itm["unitPrice"]*$cart_itm["Pieces"]);
        $total = ($total + $subtotal); }
    echo '</ol>';
    echo '<h4 Align="right">Total: <big style="color:green">'.$currency.$total.'</big></h4>';
	}else{}?>

			<h4><strong>Account</strong></h4>
            <input type="text" name="fullname" id="fullname" required="required" placeholder="Full Name"/>
            <input type="text" name='email' id="email" required="required" value="<?php echo "$login_session"?>" />
            <input type="password" name='password' id="password" required="required" placeholder="Password" />
            <h4><strong>Personal Details</strong></h4>
            <input type="text" name="address" id="address" required="required" placeholder="Home Address"/>
            <input type="text" name="phone" id="phone" required="required" placeholder="Contact Number" />
            <h4><strong>Payment</strong></h4>
            <input hidden="hidden" type="text" name="brand" id="brand" value="1" />
            <input type="text" name="totalAmount" id="totalAmount" required="required" value="<?php echo"$currency $total"?>" />
    
    <?php
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if(isset($_SESSION["cart_session"])){
    $total = 0;
    foreach ($_SESSION["cart_session"] as $cart_itm){
        $subtotal = ($cart_itm["unitPrice"]*$cart_itm["Pieces"]);
        $total = ($total + $subtotal); }
	}else{}?>

                     

                	<div class="clear"></div>
                	<div class="submit-all">
                    <input type="submit" id="registerButton" name="submit" value="Proceed" />
    
                </div>

                </form>
				<h5><a href="../index.php">Go Back</a></h5><br><br>
			</div>
      </div>
</div>

<div class="copyright">
	 <p style="font-size: 0.8em;color: #272822;">
	 © 2017. All Rights Reserved | <strong>GRiT Express</strong>, a subsidiary company of <strong>GRiT Web Services, Co.</strong><br>
	</p>
</div>	

</body>
</html>

 <script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#registerButton").click(function() { 
     
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'InsertPayment.php',
        data: $(".myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
                      
						

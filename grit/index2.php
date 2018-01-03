<?php
include("config.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/button.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>
	 
	<div id="wrapper">		 
		</div>
		<div id="navigation header">
			<div class="shell">
				<ul>
                    <div class="btn-group btn-group-justified" style="padding-top: 20px;">
                    <a href="home.php" class="btn btn-warning">Home</a>
                    <a href="index2.php" class="btn btn-warning">Products</a>
                    <a href="contactus.php" class="btn btn-warning">Contact Us</a>
                    <a href="signin/signup.php" class="btn btn-primary">Sign Up</a>
                    <a href="signin/login.php" class="btn btn-success">Log In</a>
                    </div>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>

	<div id="main" class="shell">
<div id="products">
	<h2>Products</h2>
						
          <form name="form1">
	     <input type="hidden" name="productid" />
         <input type="hidden" name="command" />
         </form>

<div class="section group">
		  
<?php $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
    if ($results) { 
		while($obj = $results->fetch_object()){
	echo '<div class="grid_1_of_4 images_1_of_4">'; 
    echo '<form method="post" action="shoppingCartUpdate.php">';
	echo '<div class="product-thumb"><img src="images/'.$obj->Picture.'"></div>';
    echo '<div class="product-content"><h2><b>'.$obj->ProductName.'</b> </h2>';
    echo '<div class="product-desc">'.$obj->Description.'</div>';
    echo '<div class="product-info">';
	echo '<p><span class="price"> Price:<big style="color:green">'.$currency.$obj->Price.'</big></span></p>';
	echo '</div></div>';
    echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
    echo '<input type="hidden" name="type" value="add" />';
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';}}?>
</div>
</div>
</div>
  
</body>
</html>
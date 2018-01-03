<?php
include("config.php");
include("usersession.php");
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
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>
	 
<div id="wrapper">
		<div id="header">
			<div class="shell">
		<div class="shopping-cart"  id="cart">
		<dl id="acc">	
		<dt class="active">								
			<p class="shopping" >SHOPPING CART &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><hr></p>
		</dt>
		<dd class="active" style="display: block;">
		<?php $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			if(isset($_SESSION["cart_session"])){
    		$total = 0;
    	echo '<ul>';
    		foreach ($_SESSION["cart_session"] as $cart_itm){
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="shoppingCartUpdate.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: #84B816" ><big> '.$cart_itm["name"].' </big></h3>';
		echo '<span><b><i>Quantity: </i></b> <strong style="color: #F97D03" ><big> '.$cart_itm["Pieces"].'</big></strong> </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #183544" ><big>'.$currency.$cart_itm["unitPrice"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["unitPrice"]*$cart_itm["Pieces"]);
        $total = ($total+$subtotal); }
    	echo '</ul>';
    	echo '<span ><strong style="color: #183544; font-size: 20px; float: right;" ><i>Total:</i> <big style="color: #183544; font-size: 20px;" >'.$currency.$total.'</big></strong></span>';
    	echo '<span> <a class="btn" style="float:right;" href="checkout/checkout.php"> <span class="btn btn-l btn-success btn-sm">Check Out</span></a></span>';
		}else{
    	echo ' <h4 style="text-align: center;">Your cart is empty!</h4>';}?>

		</dd>
		</dl>
		</div>
			</div>
		</div>
		</div>
		 
		<div id="navigation header">			 
			<div class="shell">
                <?php echo "Logged in as: ". "<i><b>".$login_session."</b></i>";?>
				<ul>
                    <div class="btn-group btn-group-justified">
                    <a href="home.php" class="btn btn-warning">Home</a>
                    <a href="index.php" class="btn btn-warning active">Products</a>
                    <a href="contactus.php" class="btn btn-warning">Contact Us</a>
                    <a href="signin/logout.php" class="btn btn-danger">Logout</a>
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
    echo 'Quantity: <input type="text" name="product_qty" value="1" size="1" />';
	echo '<div class="button"><span><button class="cart-button">Add to Cart</button></span> </div>';
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
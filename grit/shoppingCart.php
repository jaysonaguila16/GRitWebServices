<?php
include("config.php");
include("usersession.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">

</head>
<body>
	 
	<div id="wrapper">
		<div id="main" class="shell"><br>
			<div class="viewcart">
 	<?php $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["cart_session"]))
    {
	    $total = 0;
		echo '<form method="post" action="shoppingCartUpdate.php">';
		echo '<table cellspacing="0">';
		echo   '<thead>';
		echo '<tr>';
		echo '<td>Product:</td>';
		echo '<td>Quantity:</td>';
		echo ' <td>Description:</td>';
		echo '<td>Price:</td>';
		echo '<td>Action:</td>';
		echo '</tr>';
		echo '</thead>'; 
		$cart_items = 0;
		foreach ($_SESSION["cart_session"] as $cart_itm)
        {
           $Product_ID  = $cart_itm["code"];
		   $results = $mysqli->query("SELECT productName,Description, Price FROM product  WHERE Product_ID='$Product_ID'"); 
          if ($results) { 
          while($obj = $results->fetch_object())
        {

		echo '<tr class="cart-itm">';
		echo '<td><h3>'.$obj->productName.'</h3></td> ';
        echo '<td class="p-qty"><input type="text" name="product_qty" value="'.$cart_itm["Pieces"].'" size="2"   maxlength="5" disabled/></td>';
        echo '<td>'.$obj->Description.'</td>';
		echo '<td class="p-price" style="color:green"><b>'.$currency.$obj->Price.'</b></td>';
	    echo '<td><span class="remove-check"><a href="shoppingCartUpdate.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span></td>';
            echo '</tr>';
			$subtotal = ($cart_itm["unitPrice"]*$cart_itm["Pieces"]);
			$total = ($total + $subtotal);

		echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->productName.'" />';
		echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$Product_ID.'" />';
		echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->Description.'" />';
		echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["Pieces"].'"/>';
			$cart_items ++;
			      		    }}}

		echo '<span style="float: right;"><a  class="btn" href="index.php?emptycart=1&return_url='.$current_url.'"><span class="btn btn-l btn-warning">Continue Shopping</span></a></span>';
		echo '<span class="check-out-txt">';
		echo '<br/><br/><br/>';
    	echo '</table>';
		echo '<span> <h4 style="float:right;"> Grand Total: <big style="color:green">'.$currency.$total.'</big> </h4></span> ' .'<br/><br/><br/>';
		echo '<span style="float: right;"> <a href="checkout/checkout.php"><button type="button" class="btn btn-1 btn-warning">Buy</button></a></span>';
		echo '</span>';
		echo '</form>'; 

   			}else{        
		echo '<span class="cartempty"><i>Your Cart is empty</i></span>';}?>
   		</div><br><br><br>w
		</div>
	</div>
	 
</body>
</html>
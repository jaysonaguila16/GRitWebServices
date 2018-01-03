<?php
include("config.php");
include("usersession.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="web/style/main.css">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="web/style/expresslogo1.png" type="image/png" height="42">
		<title>
			Home
        </title>   
	</head>

	<body>

		<div class="TOPBAR">
            <a href="#"> <span style="float: right; padding-right: 12em; font-family: Arial; color:#F3F6FA;margin:0;"> <?php echo "Logged in as: ". "<i><b>".$login_session."</b></i>";?> </span></a> 
            <a href="signin/logout.php"> <p class="login">Logout</p> </a>
        </div>
        
        
        <div class="SEARCH">
            <input class="search" type="text" placeholder="Search for products and brands">
            <picture>
            <a href=#> <img id="searchb" src="web/style/searchbutton.png" width="4%" media="(max-width: 100%)">> </a>
            <a href="shoppingCart.php"> <img id="cartb" src="web/style/cart.png" width="3%"media="(max-width: 100%)">> </a>
            </picture>
        </div>
        
             <strong>
              <a href=../gritweb/index.html> <p class="nav2">Home</p> </a>
              <a href="index.php"> <p class="nav3">Products</p> </a>
              <a href="contactus.php"> <p class="nav4">Contact Us</p> </a>
             </strong>
        
        <div class="TOPNAV">
        <picture>
            <img id="bgtopnav" src="web/style/topnav.jpg" width="100%" height="11%">
        </picture>
        </div>
        <picture>
        <img id="logo" src="web/style/logo.png" width="10%" height="auto" media="(max-width: 100%)">
        </picture>        
        
        <div class="ADS">
        <picture>
            <img id="SP" src="web/style/Samsung-Galaxy-S3.gif" width="22%" media="(max-width: 600px)">
            <img id="SP1" src="web/style/smartphonead.jpg" width="22%" media="(max-width: 600px)">
            <img id="SP2" src="web/style/asus%20rog.gif" width="22%" media="(max-width: 600px)">  
       </picture>     
        </div>
        
            <a href="index.php"><button class="ORDER1" type="button" >
                        ORDER NOW
                </button></a>
            <a href="index.php"><button class="ORDER2" type="button" >
                        ORDER NOW
                </button></a>
       
        
        <div class="FEATURED">
            <strong><p>Featured product brands</p></strong>
            <hr width="80%" align="left">
            <br>
            <picture>
            <a href="index.php"> <img id="acer" src="web/style/product/acer.png" width="13%"> </a>
            <a href="index.php"> <img id="apple" src="web/style/product/apple.png" width="7%"> </a>
            <a href="index.php"> <img id="asus" src="web/style/product/asus.png" width="15%"> </a>
            <a href="index.php"> <img id="dell" src="web/style/product/dell.png" width="8%"> </a>
            <a href="index.php"> <img id="lenovo" src="web/style/product/lenovo.png" width="15%"> </a>
            <a href="index.php"> <img id="msi" src="web/style/product/msi.png" width="13%"> </a>
            <a href="index.php"> <img id="oppo" src="web/style/product/OPPO.png" width="18%"> </a>
            <a href="index.php"> <img id="samsung" src="web/style/product/samsung.png" width="16%"></a>
            <a href="index.php"> <img id="vivo" src="web/style/product/vivo.png" width="10%"></a>
            </picture>
        </div>
        
        <div class="LOWER">
            
            <ul id="CUSTOMERCARE"><strong>
                <li class="BOLD">Customer Care</li>  
                <a href=#> <li>Help Center</li> </a>
                <a href=#> <li>Payment</li> </a>
                <a href=#> <li>How to Buy</li> </a>
                <a href=#> <li>Shipping & Delivery</li> </a>
                <a href=#> <li>International Product Policy</li> </a>
                <a href=#> <li>How to Return</li> </a>
                <a href=#> <li>Question?</li> </a>
                <a href=#> <li>Contact Us</li> </a>
                </strong>
            </ul>
            
            <ul id="XPRESS"><strong>
                <li class="BOLD">GRiT Express</li>
                <a href=#> <li>About GRiT Express</li> </a>
                <a href=#> <li>Affiliate Program</li> </a>
                <a href=#> <li>PR & Media</li> </a>
                <a href=#> <li>Careers</li> </a>
                <a href=#> <li>Terms & Conditions</li> </a>
                <a href=#> <li>Privacy Policy</li> </a>
                <a href=#> <li>All Brands</li> </a>
                <a href=#> <li>Popular Pages</li> </a>
                <a href=#> <li>Store Directory</li> </a>
                <a href=#> <li>Campaign Terms & Conditions</li> </a>
                <a href=#> <li>Redmart</li> </a>
                </strong>
            </ul>
           
            <strong>
            <span class="text1">
                Exclusive Deals and Offers!
            </span>
                
            <span class="text2">
                Subscribe to the GRiT Express newsletter
            </span>  
            </strong>
            
            <input class="form" type=text placeholder="Your Email Address">
            <input class="radiob" type="radio" name="gender" value="male"> 
                <p class="radiom">Male</p>
            <input class="radiob1" type="radio" name="gender" value="male"> 
                <p class="radiof">Female</p>
            
                <a href=#><button type="submit" >
                        SUBMIT
                </button></a>
            
            <img id="logo1" src="web/style/logo.png" width="6%" height="auto">          
            <img id="ios" src="web/style/ios.png" width="10%" height="auto">
            
            <img id="android" src="web/style/android.png" width="10%" height="auto">
            
        </div>
	</body>
</html>
					
				
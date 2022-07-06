<!DOCTYPE html>
<html>
<head>
<title>Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
 <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

 <!-- custom css file link  -->
 <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- //heading	 -->
<body class="orderform">
 
<?php  include('partialss/menuu.php'); ?>
	<!-- //title -->
	<div id="content">
		<h1>Your Shopping Cart</h1>
		<form id="shopping-cart" action="cart.html" method="post">
			<table class="shopping-cart">
				<!-- //item, quantity, price  -->
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>

				</tr>
                <tr>
                    <th>Lipstick By Kylie</th>
                    <th>1</th>
                    <th> 100$ </th>
                    
                </tr>
			  </thead>
			  <tbody>
				  <td>
					  <tr>
                      <th>Compact Powder</th>
                    <th>2</th>
                    <th> 200$ </th>
					  </tr>
				  </td>
				  <td>
					  <tr>
					
					  </tr>
				  </td>
			   
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
            <div class="cart-btn">
                    <!-- go to home page -->
                
                        <a href="index-home.php" class="btn" padding-right="2px" >Continue Shopping </a>
                    
                    <!-- go to checkout -->
                   
                        <a href="checkout.php" class="btn">Go To Checkout</a>
                   
                
            </div>
			
		</form>
	</div>
	

</div>

<!-- !-- footer section starts  --> 

<?php include('partialss/footerr.php'); ?>

<!-- footer section ends -->








</body>
</html>

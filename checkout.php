<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
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

<body id="checkout-page">

<div id="site">
	<header id="masthead">
		<h1></h1>
	</header>
	<div id="content">
		<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <form action="order.html" method="post" id="checkout-order-form">
		 	<h2>Your Details</h2>
		 	
		 	<fieldset id="fieldset-billing">
		 		<legend>Billing</legend>
		 		<div>
		 			<label for="name">Name</label>
		 			<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="email">Email</label>
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="city">City</label>
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="address">Address</label>
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="zip">ZIP Code</label>
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="country">Country</label>
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="De">Denmark</option>
		 				<option value="IN">India</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
             <!-- billing section -->
		 	<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>
		 	
		 	<fieldset id="fieldset-shipping">
		 		
		 		<legend>Shipping</legend>
		 		
		 		<div>
		 			<label for="sname">Name</label>
		 			<input type ="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="semail">Email</label>
		 			<input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="scity">City</label>
		 			<input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="saddress">Address</label>
		 			<input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="szip">ZIP Code</label>
		 			<input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="scountry">Country</label>
		 			<select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="De">Denmark</option>
		 				<option value="IN">India</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<a href="success.html">Submit</a>
		 
		 </form>
	</div>
	
	

</div>

<footer id="site-info">
    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>quick links</h3>
                <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
                <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> shop</a>
                
            </div>
    
            <div class="box">
                <h3>extra links</h3>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> my order </a>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> my favorite </a>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> my wishlist </a>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> private policy </a>
                <a href="#" class="link"> <i class="fas fa-angle-right"></i> terms of use </a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> +918247803623</p>
                <p> <i class="fas fa-phone"></i> +918985885755 </p>
                <p> <i class="fas fa-phone"></i> +919398397835 </p>
                <p> <i class="fas fa-envelope"></i> sahitiputcha2043@gmail.com </p>
                <p> <i class="fas fa-map"></i> Hyderabad, India - 500001 </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    
                </div>
            </div>
    
        
        </div>
    
        <div class="credit"> created by <span> Glow Cosmetics Team</span> | all rights reserved! </div>
    
    </section>
	</footer>

</body>
</html>

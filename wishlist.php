<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="orderform">
   <?php include('partialss/menuu.php'); ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="search-form-orderpage">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
            
            <table class = "selected product" cellspacing="50px" >
                <tr >
                    <td> <legend>Selected Product</legend></td>
                </tr>
                <tr>
                    
                    <td><div class="cosmtic img">
                        <img src="images/cosmetic img 10.jpg" alt="" class="img-responsive img-curve" width ="500px" height="700px">
                    </div></td>

                    <td> <div class="cosmetic-desc">
                        <h3>Product Title</h3>
                        <p class="price">$2.3</p>
        
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" >
                        
                    </div></td>
                    <td><legend>Delivery Details</legend>
                        <div class="delivery-details">
                            <div class="order-label">Full Name</div>
                            <input type="text" name="full-name" placeholder="E.g. Satvika Putcha" class="input-responsive" >
        
                            <div class="order-label">Phone Number</div>
                            <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" >
        
                            <div class="order-label">Email</div>
                            <input type="email" name="email" placeholder="E.g. satvika.putcha@gmail.com" class="input-responsive" >
        
                            <div class="order-label">Address</div>
                            <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" ></textarea>
        
                           <div><input type="submit" name="submit" value="Confirm Order" class="btn btn-primary"><a href="cart.php"></a></div>  </td>
                        </div>
                </tr>
            </table>


            

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <!-- footer Section Starts Here -->
   <?php include('partialss/footerr.php'); ?>
    <!-- footer Section Ends Here -->

</body>
</html>

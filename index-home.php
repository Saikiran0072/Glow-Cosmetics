<?php

session_start();
define('SITEURL','http://localhost/cosmetic%20website/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<?php include('partialss/menuu.php'); ?>
<!-- navbar section  -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="slide active">
        <div class="content">
            <img src="images/cosmetic img 10.jpg" alt="">
            <span>new arrivals 2022</span>
            <h3>cosmetics</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/cosmetic img 10.jpg" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="images/cosmetic img 2.jpg" alt="">
            <span>new arrivals 2022</span>
            <h3>blenders</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/cosmetic img 2.jpg" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="images/cosmetic img 3.jpg" alt="">
            <span>new collections</span>
            <h3>skin care</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/cosmetic img 3.jpg" alt="">
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

<?php 
                     $sql = "SELECT * FROM category LIMIT 3 ";
                     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                     if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $category_num =$rows['category_num'];
                                $title = $rows['title'];
                                $featured =$rows['featured'];
                            }
                        }
                    }
                                ?>
    <div href="#" class="img1">
        <img src="images/cosmetic img 5.jpg" alt="img1">
        <div class="cosmetic"><a href="categoriess.php">Makeup</a></div> 
        <!-- cosmetics -->
                </div>
   <div href="#" class="img2">
        <img src="images/cosmetic img 6.jpg" alt="img2">
        <div class="sunscream"><a>sunscreen Lotion</a></div>
        <!-- sunscream -->
                </div>

    <div href="#" class="img3">
        <img src="images/cosmetic img 4.jpg" alt="img3" >
        <div class="powder"><a>Translucent powders</a></div>
        <!-- powder -->
                </div> -->

    <div href="#" class="img4">
        <img src="images/cosmetic img 9.jpg" alt="img4">
        <div class="eyeshadow"><a>Eye shadow Palletes</a></div>
        <!-- eye shadow -->
                </div> 

   <div href="#" class="img5">
        <img src="images/cosmetic img 7.jpg" alt="img5">
        <div class="lipstick"><a>Lipkit</a></div>
        <!-- lipsticks -->
                </div>

    <div href="#" class="img6">
        <img src="images/cosmetic img 8.jpg" alt="img6">
        <div class="mascara"><a>Mascaras and Eyliners</a></div>
        <!-- mascara -->
                </div>


                        
     
</section>

<!-- category section ends -->



<!-- shop section starts  -->

<section class="shop" id="shop">

    <div class="heading">
        <h1>featured products</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="swiper products-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 12.jpg" alt="product1">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Tumeric Glow Moisturizer by Kora Organics</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 13.jpg" alt="product2">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Kylie Lip by Kylie Cosmetics<br><br></p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 19.jpg" alt="product3">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>KKW body fragance by KKW Cosmetics</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 14.jpg" alt="product4">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Wishful by Huda Beauty <br> <br> </p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 15.jpg" alt="product5">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Stila Eyeliner by Stila <br><br></p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 16.jpg" alt="product6">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Prism Libre by Givenchy <br><br></p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 17.jpg" alt="product7">
                    <div class="icons">
                        <a href=""ishlist.php class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Anti aging cream by Caudalie <br><br></p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/cosmetic img 18.jpg" alt="product8">
                    <div class="icons">
                        <a href="wishlist.php" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>Berry Under Eye creame by Kora Organics</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->



<!-- footer section starts  -->

<?php include('partialss/footerr.php'); ?>
<!-- footer section ends -->











<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link      -->
<script src="js/script.js"></script>

<script>
    lightGallery(document.querySelector('.gallery .lightbox'));
</script>
    
</body>
</html>

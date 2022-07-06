<?php 
include('partialss/menuu.php');?>

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
<div class ="main-content">
        <div class="wrapper">
        <h1>Manage Category</h1>
        <br/>
        <?php
        session_start();
        define('SITEURL','http://localhost/cosmetic%20website/');
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'cosmetic-website');
        
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
        $db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());


        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        ?>
           
        <br/> <br/>

        <table class="tbl-full">
                <tr>
                    <th>S.No.</th>
                    <th>title</th>
                    <th>featured</th>
                    <th>Actions</th>
                </tr>

                <?php 
                     $sql = "SELECT * FROM product ";
                     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                     if($res==TRUE){
                        $count = mysqli_num_rows($res);
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $product_Id =$rows['product_Id'];
                                $product_title = $rows['product_title'];
                                $description =$rows['description'];
                                $price =$rows['price'];
                                
                                ?>


                                  <tr>
                                 <td><?php echo $product_Id; ?></td>
                                 <td><?php echo $product_title; ?> </td>
                                 <td><?php echo $description; ?> </td>
                                 <td><?php echo $price; ?></td>
                                 
                                 <td>
                                     <a href="cart.php">Add to cart </a>
                                 </tr>
                                <?php

                            }
                        }
                        else{

                        }

                     }
            
                
                ?>

                <br/>
        
                
            </table>
        </div> 
    </div>
    <!-- main content section ends  -->


<?php
include('partialss/footerr.php');
?>



<?php 
include('partials/menu.php');?>

<div class ="main-content">
        <div class="wrapper">
        <h1>Manage Product</h1>
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
           <a href="add product.php" class="btn-primary">Add Product</a>
        <br/> <br/>

        <table class="tbl-full">
                <tr>
                    <th> Product S.No.</th>
                    <th>Product title</th>
                    <th>Product description</th>
                    <th>Product Price</th>
                    <th>Category S.no</th>
                    <th>featured</th>
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
                                $price = $rows['price'];
                                $category_num =$rows['category_num'];
                                $featured = $rows['featured'];
                                ?>
                                  <tr>
                                 <td><?php echo $product_Id; ?></td>
                                 <td><?php echo $product_title; ?> </td>
                                 <td><?php echo $description; ?> </td>
                                 <td><?php echo $price; ?></td>
                                 <td><?php echo $category_num; ?></td>
                                 <td><?php echo $featured; ?></td>
                                 <td>
                                     <br>
                                 
                                 <br>   
                                 </td>
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
include('partials/footer.php');
?>


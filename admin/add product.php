<?php  include('partials/menu.php');?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1>
        <br>
        <br>
        <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSSION['add']);
        }

        ?>
        <br><br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Product title: </td>
                    <td> <input type="text" name=" product title" placeholder = "Enter product title"> </td>
                </tr>
                <tr>
                    <td>Product description: </td>
                    <td> <input type="text" name="product description" placeholder = "Enter Product description"> </td>
                </tr>
                <tr>
                    <td>Product price: </td>
                    <td> <input type="number" name="price" placeholder = "Enter price"> </td>
                </tr>
                    <td>category number </td>
                    <td> <input type="number" name="category number" placeholder = "Enter category number"> </td>
                </tr>
            
                <tr>
                    <td>featured: </td>
                    <td> <input type="radio" name="featured" value="Yes">Yes
                         <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <td> <input type="submit" name="submit" value="Add Product" class="btn-secondary"> </td>
                </tr>
            </table>
        </form>

        <?php 
        
session_start();
define('SITEURL','http://localhost/cosmetic%20website/admin/manage-product.php');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error()); 

        if(isset($_POST['submit'])){
            // echo "Clicked";
            $product_title =$_POST['product_title'];
            $description =$_POST['description'];
            $price = $_POST['price'];
            $category_num =$_POST['category_num'];
            if(isset($_POST['featured'])){
                $featued =$_POST['featured'];
            }
            else{
                $featured = "No";
            }
            $sql = "INSERT INTO product"."( product_title,description ,price,category_Id, featured)"."VALUES"."('$product_title','$description','$price','$category_Id','$featured')";
            
            $res= mysqli_query($conn ,$sql) or die(mysqli_error());
            if($res==TRUE){
                $_SESSION['add']= "<div class='success'>Product added Successful.</div>";
             header('location:'.SITEURL,'admin/manage-category.php');
             echo "Category added successfully";
    
           
    
            }
            else{
                $_SESSION['add']= "<div class='error'>Failed to add .</div>";
                header('location:'.SITEURL,'admin/add product.php');
       
    
                
            }

        

        }
        
        ?>

    </div>
</div>

<?php  include('partials/footer.php');?>

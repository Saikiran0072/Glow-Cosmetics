<?php  include('partials/menu.php');?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
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
                    <td>title: </td>
                    <td> <input type="text" name="title" placeholder = "Enter Category title"> </td>
                </tr>
            
                <tr>
                    <td>featured: </td>
                    <td> <input type="radio" name="featured" value="Yes">Yes
                         <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <td> <input type="submit" name="submit" value="Add Ctegory" class="btn-secondary"> </td>
                </tr>
            </table>
        </form>

        <?php 
        
session_start();
define('SITEURL','http://localhost/cosmetic%20website/admin/manage-category.php');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error()); 

        if(isset($_POST['submit'])){
            // echo "Clicked";
            $title =$_POST['title'];
            if(isset($_POST['featured'])){
                $featued =$_POST['featured'];
            }
            else{
                $featured = "No";
            }
            $sql = "INSERT INTO category"."( title, featured)"."VALUES"."('$title','$featured')";
            
            $res= mysqli_query($conn ,$sql) or die(mysqli_error());
            if($res==TRUE){
                $_SESSION['add']= "<div class='success'>Category added Successful.</div>";
             header('location:'.SITEURL,'admin/manage-category.php');
             echo "Category added successfully";
    
           
    
            }
            else{
                $_SESSION['add']= "<div class='error'>Failed to add Successful.</div>";
                header('location:'.SITEURL,'admin/add category.php');
       
    
                
            }

        

        }
        
        ?>

    </div>
</div>

<?php  include('partials/footer.php');?>

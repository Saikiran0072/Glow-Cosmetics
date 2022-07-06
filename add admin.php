<?php 
include('partials/menu.php');

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>

        <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        
        ?>
        <br>
        
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td> <input type="text" name="full_name" placeholder = "Enter Your Name"> </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td> <input type="text" name="user_name" placeholder = "Enter Your Name"> </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="passwor" placeholder = "Enter Password"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <td> <input type="submit" name="submit" value="Add Admin" class="btn-secondary"> </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
include('partials/footer.php')
?>

<?php

session_start();
define('SITEURL','http://localhost/cosmetic%20website/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());



    if(isset($_POST['submit'])){
        $Id =$_POST['Id'];
        $full_name = $_POST['full_name'];
        $user_name =$_POST['user_name'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO admin"."(Id,full_name,user_name,password)"."VALUES"."('$Id','$full_name','$user_name','$password')";
            
        $res= mysqli_query($conn,$sql) or die(mysqli_error());

        if($res==TRUE){
            $_SESSION['add'] ="Admin added successfully"; 
            header("location:".SITEURL.'admin/manage-admin.php');
       

        }
        else{
            $_SESSION['add'] ="Admin not added ";
            header("location:".SITEURL.'admin/add-admin.php');
       


            
        }
      


    }
   

?>


<html>
    <head>
        <title>Login Cosmetic Website system</title>
        <link rel="stylesheet" href="../css/adminn.css">
    </head>
    <body>
        
<div class="login">
    <h1 class="text-center">Login</h1> <br>
    <?php
    if(isset($_SESSION['login'])){
        echo $_SESSIO['login'];
        unset($SESSION['login']);
    }
    ?>
    <br><br>





    <form action="" method="POST" class="text-center">
        Username:
        <input type="text" name="user_name" placeholder="Enter Username"><br> <br>
        Password:
        <input type="password" name="password" placeholder="Enter the password"> <br> <br>
        <input type="submit" name="submit" value="Login" class="btn-primary"> <br> <br>
    </form>

   
</div>


    </body>
</html>

<?php

session_start();
define('SITEURL','http://localhost/cosmetic%20website/admin/index.php');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());


if(isset($_POST['submit'])){
    $user_name =$_POST['user_name'];
    $password = md5($_POST['password']);

     $sql = "SELECT 'user_name' , 'password' FROM admin ";
     $res = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($res);

     if($count==1){
         $_SESSION['login']= "<div class='success'>Login Successful.</div>";
         header('location:'.SITEURL,'admin/');

     }
     else{
        $_SESSION['login']= "<div class='error'>Login failed.</div>";
        header('location:'.SITEURL,'admin/login.php');

     }

}
?>

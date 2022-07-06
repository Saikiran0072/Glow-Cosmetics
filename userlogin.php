
<html>
    <head>
        <title>Login to Cosmetic Website system</title>
        <link rel="stylesheet" href="../css/adminn.css">
    </head>
    <body>
        
<div class="loginn">
    <h1 class="text-center">Login</h1> <br>
    <?php
    if(isset($_SESSION['loginn'])){
        echo $_SESSIO['loginn'];
        unset($SESSION['loginn']);
    }
    ?>
    <br><br>





    <form action="" method="POST" class="text-center">
        Username:
        <input type="text" name="username" placeholder="Enter Username"><br> <br>
        Password:
        <input type="password" name="password" placeholder="Enter the password"> <br> <br>
        <input type="submit" name="submit" value="Login" class="btn-primary"> <br> <br>
    </form>

   
</div>


    </body>
</html>

<?php

session_start();
define('SITEURL','http://localhost/cosmetic%20website/index-home.php');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());


if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user_login"."(username,password)"."VALUES"."('$username','$password')";
     
    $res= mysqli_query($conn,$sql) or die(mysqli_error());

     if($count==1){
         $_SESSION['loginn']= "<div class='success'>Login Successful.</div>";
         header('location:'.SITEURL,'admin/');

     }
     else{
        $_SESSION['loginn']= "<div class='error'>Login failed.</div>";
        header('location:'.SITEURL,'userlogin.php');

     }

}
?>

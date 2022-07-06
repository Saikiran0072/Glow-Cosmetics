<html>
    <head>
        <title>Signup Cosmetic Website system</title>
        <link rel="stylesheet" href="../css/adminn.css">
    </head>
    <body>
        
<div class="signup">
    <h1 class="text-center">Signup</h1> <br>
    <?php
    if(isset($_SESSION['signup'])){
        echo $_SESSION['signup'];
        unset($SESSION['signup']);
    }
    ?>
    <br><br>


    <form action="" method="POST" class="text-center">
        Fullname:
        <input type="text" name="fullname" placeholder="Enter fullname"> <br><br>
        Username:
        <input type="text" name="username" placeholder="Enter Username"><br> <br>
        Password:
        <input type="password" name="password" placeholder="Enter the password"> <br> <br>
        <input type="submit" name="submit" value="Signup" class="btn-primary"> <br> <br>

        Already have an account?
        <a href="userlogin.php">Login</a>
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
    $fullname = $_POST['fullname'];
    $username =$_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user_signup"."(fullname,username,password)"."VALUES"."('$fullname','$username','$password')";
    $res= mysqli_query($conn,$sql) or die(mysqli_error());

     if($count==1){
         $_SESSION['signup']= "<div class='success'>Signup Successful.</div>";
         header('location:'.SITEURL,'user_signup/');

     }
     else{
        $_SESSION['signup']= "<div class='error'>Signup failed.</div>";
        header('location:'.SITEURL,'usersignup.php');

     }

}
?>
